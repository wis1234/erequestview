<?php

namespace App\Http\Controllers;

use App\Models\PedRegistration;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


use Exception;

class PedRegistrationController extends Controller
{
    public function index()
    {
        try {
            $pedRegistrations = PedRegistration::all();
            return response()->json($pedRegistrations, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch registrations'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->only(['fiche_inscription', 'ac_year', 'ac_level', 'field', 'program', 'semester', 'description']), [
                'fiche_inscription' => 'required|file|mimes:jpg,jpeg,png|max:3048',
                'ac_year' => 'required|string',
                'ac_level' => 'required|string',
                'field' => 'required|string',
                'program' => 'required|string',
              
                
                'semester' => 'required|string',

                'description' => 'nullable|string',
            ]);

            if ($validator->fails()) {
                throw new ValidationException($validator);
            }

            // Get the authenticated user data from the session
            $user = Auth::user();

            if (!$user) {
                return response()->json(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
                // return view('errors.419');
            }



            // Automatically fill the 'mat' field based on the user's mat_number
            $mat = $user->mat_number;

            // Other complaint data
            $pedRegistrationData = [
                'ac_year' => $request->input('ac_year'),
                'ac_level' => $request->input('ac_level'),
                'field' => $request->input('field'),
                'program' => $request->input('program'),
            
               
                'semester' => $request->input('semester'),
                'description' => $request->input('description'),
                // 'complaint_id' =>$complaint->id,
                'user_id' => $user->id,
                'user_firstname' => $user->firstname,
                'user_lastname' => $user->lastname,
                'user_phone' => $user->phone,
                'user_email' => $user->email,
                'mat_number' => $user->mat_number,
            ];

            if ($request->hasFile('fiche_inscription')) {
                $file = $request->file('fiche_inscription');
                $ficheInscriptionPath = $this->storeFile($file);
                
                if (!$ficheInscriptionPath) {
                    // return response()->json(['error' => 'Fiche de préinscription NOT SUPPORTED.'], Response::HTTP_INTERNAL_SERVER_ERROR);
                    return redirect()->route('ped_registration_form')->with('error', "Uniquement des images d'une taille maximale de 2Mo sont acceptées");
                    // return view('not_support');
                }
    
                $pedRegistrationData['fiche_inscription'] = $ficheInscriptionPath;
            }
    
         
    
            // Create the Complaint model with the 'fiche_inscription' field set to the path
            $ped_registration = new PedRegistration($pedRegistrationData);
            $ped_registration->save();
    
            // return response()->json(['message' => 'Complaint created successfully', 'data' => $complaint]);
            return view('test_ped_registration');

        } catch (ValidationException $e) {

            // return response()->json(['error' => 'Validation error', 'error' => $e->getMessage()], Response::HTTP_BAD_REQUEST);

            return redirect()->route('ped_registration_form')->with('error', "Mauvais remplissage du formulaire, veuillez vérifier les informations rensignées et réessayer.");
        } catch (Exception $e) {
            // return response()->json(['error' => 'An error occurred', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            // return view('false_form_filled');
            return redirect()->route('ped_registration_form')->with('error', "Une erreur inattendue est survenue, veuillez reéssayer s'il vous plaît");

        }
    }

    private function storeFile($file)
    {
        if (!$file || !$file->isValid()) {
            return null;
        }

        return $file->store('ped_registration_files', 'public');
    }


    public function show($id)
    {
        try {
            $pedRegistration = PedRegistration::findOrFail($id);
            return response()->json($pedRegistration, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Registration not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch registration'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $pedRegistration = PedRegistration::findOrFail($id);

            $validated = $request->validate([
                'user_id' => 'sometimes|exists:users,id',
                'complaint_id' => 'sometimes|exists:complaints,id',
                'ac_year' => 'sometimes|string',
                'ac_level' => 'sometimes|string',
                'field' => 'sometimes|string',
                'program' => 'sometimes|string',
                'semester' => 'sometimes|string',
                'fiche_inscription' => 'nullable|string',
                'description' => 'nullable|string',
                'status' => 'sometimes|string',
                'ped_lunch' => 'nullable|string',
                'feedback' => 'nullable|string',
            ]);

            $pedRegistration->update($validated);
            return response()->json($pedRegistration, 200);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Registration not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update registration'], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $pedRegistration = PedRegistration::findOrFail($id);
            $pedRegistration->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Registration not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete registration'], 500);
        }
    }



    public function showPedRegistrationForm(){

        $ped_closed = PedRegistration::where('ped_lunch', 'stopped')->exists();
    
        if($ped_closed){
    
            return view('ped_closed');
    
        }
        else{
        }
        return view('ped_registration_form');
    
    }

      // Check status method
      public function userPedRegistration()
      {
          try {
              // Get the logged-in user's ID
              $userId = Auth::id();
  
              // Fetch all complaints associated with the user
              $userPedRegistration = PedRegistration::where('user_id', $userId)->paginate(1000);
  
              // Pass the complaints to a view for displaying
              return view('ped_registration_status', ['userPedRegistration' => $userPedRegistration]);
          } catch (\Exception $e) {
              // Handle exceptions if any
              return back()->withError('Error fetching user complaints');
          }
      }


      
// get values in the complaints table to desabling button

    public function getPedLunchValue()
    {
        
        $claimLunchValue = PedRegistration::value('ped_lunch');

        return response()->json(['ped_lunch' => $claimLunchValue]);
    }





    //using as api to lunch ped registrations**
    
    public function updateAllPeds()
    {
        // Récupérer toutes les inscriptions pédagogiques ayant "stopped" comme valeur de "ped_lunch"
        $registrations = PedRegistration::where('ped_lunch', 'stopped')->get();

        // Mettre à jour chaque inscription individuellement pour déclencher le mutateur
        foreach ($registrations as $registration) {
            $registration->ped_lunch = 'lunched';
            $registration->save(); // Cela déclenche le mutateur et met à jour current_time
        }

        return response()->json(['message' => 'Toutes les inscriptions pédagogiques ont été mises à jour avec succès.']);
    }


public function updateAllPedsStop()
{
    // Mettre à jour toutes les réclamations ayant "stopped" par "lunched"
    PedRegistration::where('ped_lunch', 'lunched')->update(['ped_lunch' => 'stopped']);
    
    return response()->json(['message' => 'Toutes les inscriptions pédagogique ont été mises à jour avec succès.']);
}

//minute getter method
public function getHour(){
    $hour = PedRegistration::value('hour');
    $ped_lunch = PedRegistration::value('ped_lunch');
    $server_time = Carbon::now()->toDateTimeString();
    $start_time = PedRegistration::value('current_time');

    return response()->json(['hour' => $hour, 'ped_lunch' => $ped_lunch, 'server_time' => $server_time, 'start_time'=>$start_time]);
}

}
