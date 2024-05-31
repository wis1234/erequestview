<?php

namespace App\Http\Controllers;

use App\Models\Retake;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


use Exception;

class RetakeController extends Controller
{
    public function index()
    {
        try {
            $retake = Retake::all();
            return response()->json($retake, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch registrations'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->only(['fiche_inscription', 'ac_year', 'ac_level', 'ac_level_old', 'field', 'program', 'semester', 'description']), [
                'fiche_inscription' => 'required|file|mimes:jpg,jpeg,png|max:3048',
                'ac_year' => 'required|string',
                'ac_level' => 'required|string',
                'ac_level_old' => 'required|string',
                'field' => 'required|string',
                'program' => 'required|string',
                'ue' => 'sometimes|string',
                'semester' => 'required|string',

                'description' => 'nullable|string',
            ]);

            if ($validator->fails()) {
                throw new ValidationException($validator);
            }

            // Get the authenticated user data from the session
            $user = Auth::user();

            if (!$user) {
                //return response()->json(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
                 return view('errors.419');
            }



            // Automatically fill the 'mat' field based on the user's mat_number
            $mat = $user->mat_number;

            // Other complaint data
            $retakeData = [
                'ac_year' => $request->input('ac_year'),
                'ac_level' => $request->input('ac_level'),
                'ac_level_old' => $request->input('ac_level_old'),
                'field' => $request->input('field'),
                'program' => $request->input('program'),
                'ue' => $request->input('ue'),
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
                   return redirect()->route('retake_form')->with('error', "Uniquement des images d'une taille maximale de 2Mo sont acceptées");
                    // return view('not_support');
                }
    
                $retakeData['fiche_inscription'] = $ficheInscriptionPath;
            }
    
         
    
            // Create the Complaint model with the 'fiche_inscription' field set to the path
            $Retake_new = new Retake($retakeData);
            $Retake_new->save();
    
            //return response()->json(['message' => 'Complaint created successfully', 'data' => $Retake_new]);
           return view('test_retake');

        } catch (ValidationException $e) {

             //return response()->json(['error' => 'Validation error', 'error' => $e->getMessage()], Response::HTTP_BAD_REQUEST);

            return redirect()->route('retake_form')->with('error', "Mauvais remplissage du formulaire, veuillez vérifier les informations rensignées et réessayer.");
        } catch (Exception $e) {
            //return response()->json(['error' => 'An error occurred', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            // return view('false_form_filled');
            return redirect()->route('retake_form')->with('error', "Une erreur inattendue est survenue, veuillez reéssayer s'il vous plaît");

        }
    }

    private function storeFile($file)
    {
        if (!$file || !$file->isValid()) {
            return null;
        }

        return $file->store('retake_files', 'public');
    }


    public function show($id)
    {
        try {
            $retake = Retake::findOrFail($id);
            return response()->json($retake, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Registration not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch registration'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $retake = Retake::findOrFail($id);

            $validated = $request->validate([
                'user_id' => 'required|exists:users,id',
                'complaint_id' => 'required|exists:complaints,id',
                'ac_year' => 'required|string',
                'ac_level' => 'required|string',
                'ac_level_old' => 'required|string',
                'field' => 'required|string',
                'program' => 'required|string',
                'semester' => 'required|string',
                'ue' => 'required|string',
                'fiche_inscription' => 'required|string',
                'description' => 'nullable|string',
                'status' => 'sometimes|string',
                'ped_lunch' => 'nullable|string',
                'feedback' => 'nullable|string',
            ]);

            $retake->update($validated);
            return response()->json($retake, 200);
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
            $retake = Retake::findOrFail($id);
            $retake->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Registration not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete registration'], 500);
        }
    }



    public function showRetakeForm(){

        $retake_closed = Retake::where('retake_lunch', 'stopped')->exists();
    
        if($retake_closed){
    
            return view('retake_closed');
    
        }
        else{
        }
        return view('retake_form');
    
    }

      // Check status method
      public function userRetake()
      {
          try {
              // Get the logged-in user's ID
              $userId = Auth::id();
  
              // Fetch all complaints associated with the user
              $userRetake = Retake::where('user_id', $userId)->paginate(1000);
  
              // Pass the complaints to a view for displaying
              return view('retake_status', ['userRetake' => $userRetake]);
          } catch (\Exception $e) {
              // Handle exceptions if any
              return back()->withError('Error fetching user complaints');
          }
      }


      
// get values in the complaints table to desabling button

    public function getRetakeLunchValue()
    {
        
        $RetakeLunchValue = Retake::value('retake_lunch');

        return response()->json(['retake_lunch' => $RetakeLunchValue]);
    }





    //using as api to lunch ped registrations**
    
    public function updateAllRetakes()
    {
        // Récupérer toutes les inscriptions pédagogiques ayant "stopped" comme valeur de "ped_lunch"
        $retakes = Retake::where('retake_lunch', 'stopped')->get();

        // Mettre à jour chaque inscription individuellement pour déclencher le mutateur
        foreach ($retakes as $retake) {
            $retake->retake_lunch = 'lunched';
            $retake->save(); // Cela déclenche le mutateur et met à jour current_time
        }

        return response()->json(['message' => 'Toutes les donnees de paiement ont été mis à jours avec succès.']);
    }


public function updateAllRetakesStop()
{
    // Mettre à jour toutes les réclamations ayant "stopped" par "lunched"
    Retake::where('retake_lunch', 'lunched')->update(['retake_lunch' => 'stopped']);
    
    return response()->json(['message' => 'Toutes les donnees de paiement ont été mis à jours avec succès.']);
}

//minute getter method
public function getHour(){
    $hour = Retake::value('hour');
    $retake_lunch = Retake::value('retake_lunch');
    $server_time = Carbon::now()->toDateTimeString();
    $start_time = Retake::value('current_time');

    return response()->json(['hour' => $hour, 'retake_lunch' => $retake_lunch, 'server_time' => $server_time, 'start_time'=>$start_time]);
}

}
