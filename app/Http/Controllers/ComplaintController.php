<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ClaimStatusChanged;
use Carbon\Carbon;

class ComplaintController extends Controller
{
    public function index()
    {
        try {
            $complaints = Complaint::all();
            return response()->json(['complaints' => $complaints]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error fetching complaints', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->only(['fiche_inscription', 'ac_year', 'ac_level', 'field', 'program','tc', 'seq_number', 'jury', 'grade_over_20', 'coef_grade', 'validation', 'exam_type', 'complain_type', 'ecue', 'ue', 'semester', 'description']), [
                'fiche_inscription' => 'required|file|mimes:jpg,jpeg,png|max:2048',
                'ac_year' => 'required|string',
                'ac_level' => 'required|string',
                'field' => 'required|string',
                'program' => 'required|string',
                'tc' => 'nullable|string',
                'jury' => 'nullable|string',
                'seq_number' => 'required|string',
                'grade_over_20'=> 'required|integer',
                'coef_grade'=> 'required|integer',
                'validation'=> 'required|string',
                'exam_type' => 'required|string',
                'complain_type' => 'required|string',
                'ecue' => 'required|string',
                'ue' => 'required|string',
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
            $complaintData = [
                'ac_year' => $request->input('ac_year'),
                'ac_level' => $request->input('ac_level'),
                'field' => $request->input('field'),
                'program' => $request->input('program'),
                'tc' => $request->input('tc'),
                'jury' => $request->input('jury'),
                'seq_number' => $request->input('seq_number'),
                'grade_over_20' => $request->input('grade_over_20'),
                'coef_grade' => $request->input('coef_grade'),
                'validation' => $request->input('validation'),
                'exam_type' => $request->input('exam_type'),
                'complain_type' => $request->input('complain_type'),
                'ecue' => $request->input('ecue'),
                'ue' => $request->input('ue'),
                'semester' => $request->input('semester'),
                'description' => $request->input('description'),
                'student_id' => $user->id,
                'claimant_firstname' => $user->firstname,
                'claimant_lastname' => $user->lastname,
                'claimant_phone' => $user->phone,
                'claimant_email' => $user->email,
                'mat_number' => $user->mat_number,
            ];

            if ($request->hasFile('fiche_inscription')) {
                $file = $request->file('fiche_inscription');
                $ficheInscriptionPath = $this->storeFile($file);
                
                if (!$ficheInscriptionPath) {
                    // return response()->json(['error' => 'Fiche de préinscription NOT SUPPORTED.'], Response::HTTP_INTERNAL_SERVER_ERROR);
                    return redirect()->route('complaint_form')->with('error', "Uniquement des images d'une taille maximale de 2Mo sont acceptées");
                    // return view('not_support');
                }
    
                // $complaintData['fiche_inscription'] = $ficheInscriptionPath;

                $complaintData['fiche_inscription'] = trim($ficheInscriptionPath, '"');

            }
            // Create the Complaint model with the 'fiche_inscription' field set to the path
            $complaint = new Complaint($complaintData);
            $complaint->save();
    
            // return response()->json(['message' => 'Complaint created successfully', 'data' => $complaint]);
            return view('test');

        } catch (ValidationException $e) {

            // return response()->json(['error' => 'Validation error', 'error' => $e->getMessage()], Response::HTTP_BAD_REQUEST);

            return redirect()->route('complaint_form')->with('error', "Mauvais remplissage du formulaire, veuillez vérifier les informations rensignées et réessayer.");
        } catch (Exception $e) {
            // return response()->json(['error' => 'An error occurred', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            // return view('false_form_filled');
            return redirect()->route('complaint_form')->with('error', "Une erreur inattendue est survenue, veuillez reéssayer s'il vous plaît");

        }
    }




    public function show($id)
    {
        try {
            $complaint = Complaint::findOrFail($id);
            return response()->json(['complaint' => $complaint]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Complaint not found'], Response::HTTP_NOT_FOUND);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error fetching complaint', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $complaint = Complaint::findOrFail($id);

            $validator = Validator::make($request->only(['ac_year', 'ac_level', 'mat', 'field', 'speciality', 'exam_type', 'complain_type', 'ecue', 'ecue_sub', 'description']), [
                'ac_year' => 'required|string',
                'ac_level' => 'required|string',
                'mat' => 'required|string',
                'field' => 'required|string',
                'speciality' => 'required|string',
                'exam_type' => 'required|string',
                'complain_type' => 'required|string',
                'ecue' => 'required|string',
                'ecue_sub' => 'required|string',
                'description' => 'nullable|string',
            ]);

            if ($validator->fails()) {
                throw new ValidationException($validator);
            }

            $complaintData = $request->only(['ac_year', 'ac_level', 'mat', 'field', 'speciality', 'exam_type', 'complain_type', 'ecue', 'ecue_sub', 'description']);

            // Update 'fiche_inscription' file if provided
            if ($request->hasFile('fiche_inscription')) {
                $ficheInscriptionPath = $this->storeFile($request->file('fiche_inscription'));
                if (!$ficheInscriptionPath) {
                    return response()->json(['message' => 'Failed to update fiche_inscription file'], Response::HTTP_INTERNAL_SERVER_ERROR);
                }
                $complaintData['fiche_inscription'] = $ficheInscriptionPath;
            }

            // Update other complaint data
            $complaint->update($complaintData);

            return response()->json(['message' => 'Complaint updated successfully', 'data' => $complaint]);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Complaint not found'], Response::HTTP_NOT_FOUND);
        } catch (Exception $e) {
            return response()->json(['message' => 'An error occurred', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($id)
    {
        try {
            $complaint = Complaint::findOrFail($id);

            // Delete 'fiche_inscription' file if it exists
            if ($complaint->fiche_inscription) {
                $this->deleteFile($complaint->fiche_inscription);
            }

            $complaint->delete();

            return response()->json(['message' => 'Complaint deleted successfully'], Response::HTTP_OK);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Complaint not found'], Response::HTTP_NOT_FOUND);
        } catch (Exception $e) {
            return response()->json(['message' => 'An error occurred', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function storeFile($file)
    {
        if (!$file || !$file->isValid()) {
            return null;
        }

        return $file->store('complaint_files', 'public');
    }
    
//     protected function storeFile($file)
// {
//     try {
//         $path = $file->store('complaint_files', 'public');
//         return $path;
//     } catch (Exception $e) {
//         return false;
//     }
// }

// public function store(Request $request)
// {
//     try {
//         $validator = Validator::make($request->only([
//             'fiche_inscription', 'ac_year', 'ac_level', 'field', 'program', 'tc', 'seq_number', 
//             'jury', 'grade_over_20', 'coef_grade', 'validation', 'exam_type', 'complain_type', 
//             'ecue', 'ue', 'semester', 'description'
//         ]), [
//             'fiche_inscription' => 'required|file|mimes:jpg,jpeg,png|max:3048',
//             'ac_year' => 'required|string',
//             'ac_level' => 'required|string',
//             'field' => 'required|string',
//             'program' => 'required|string',
//             'tc' => 'nullable|string',
//             'jury' => 'nullable|string',
//             'seq_number' => 'required|string',
//             'grade_over_20'=> 'required|integer',
//             'coef_grade'=> 'required|integer',
//             'validation'=> 'required|string',
//             'exam_type' => 'required|string',
//             'complain_type' => 'required|string',
//             'ecue' => 'required|string',
//             'ue' => 'required|string',
//             'semester' => 'required|string',
//             'description' => 'nullable|string',
//         ]);

//         if ($validator->fails()) {
//             throw new ValidationException($validator);
//         }

//         // Get the authenticated user data from the session
//         $user = Auth::user();

//         if (!$user) {
//             return response()->json(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
//         }

//         // Automatically fill the 'mat' field based on the user's mat_number
//         $mat = $user->mat_number;

//         // Other complaint data
//         $complaintData = [
//             'ac_year' => $request->input('ac_year'),
//             'ac_level' => $request->input('ac_level'),
//             'field' => $request->input('field'),
//             'program' => $request->input('program'),
//             'tc' => $request->input('tc'),
//             'jury' => $request->input('jury'),
//             'seq_number' => $request->input('seq_number'),
//             'grade_over_20' => $request->input('grade_over_20'),
//             'coef_grade' => $request->input('coef_grade'),
//             'validation' => $request->input('validation'),
//             'exam_type' => $request->input('exam_type'),
//             'complain_type' => $request->input('complain_type'),
//             'ecue' => $request->input('ecue'),
//             'ue' => $request->input('ue'),
//             'semester' => $request->input('semester'),
//             'description' => $request->input('description'),
//             'student_id' => $user->id,
//             'claimant_firstname' => $user->firstname,
//             'claimant_lastname' => $user->lastname,
//             'claimant_phone' => $user->phone,
//             'claimant_email' => $user->email,
//             'mat_number' => $user->mat_number,
//         ];

//         // Handle file upload
//         if ($request->hasFile('fiche_inscription')) {
//             $file = $request->file('fiche_inscription');
//             $ficheInscriptionPath = $this->storeFile($file);

//             if (!$ficheInscriptionPath) {
//                 return redirect()->route('complaint_form')->with('error', "Uniquement des images d'une taille maximale de 2Mo sont acceptées");
//             }

//             $complaintData['fiche_inscription'] = $ficheInscriptionPath;
//         }

//         // Create the Complaint model with the 'fiche_inscription' field set to the path
//         $complaint = new Complaint($complaintData);
//         $complaint->save();

//         return view('test');
        
//     } catch (ValidationException $e) {
//         return redirect()->route('complaint_form')->with('error', "Mauvais remplissage du formulaire, veuillez vérifier les informations rensignées et réessayer.");
//     } catch (Exception $e) {
//         return redirect()->route('complaint_form')->with('error', "Une erreur inattendue est survenue, veuillez réessayer s'il vous plaît");
//     }
// }


    private function deleteFile($path)
    {
        Storage::disk('public')->delete($path);
    }

    // Check status method
    public function userComplaints()
    {
        try {
            // Get the logged-in user's ID
            $userId = Auth::id();

            // Fetch all complaints associated with the user
            $userComplaints = Complaint::where('student_id', $userId)->paginate(1000);

            // Pass the complaints to a view for displaying
            return view('complaint_status', ['userComplaints' => $userComplaints]);
        } catch (\Exception $e) {
            // Handle exceptions if any
            return back()->withError('Error fetching user complaints');
        }
    }

    // Usage as API
    public function getImagePaths($id)
    {
        $complaint = Complaint::where('id', $id)->first();

        if ($complaint) {
            $imagePaths = $complaint->fiche_inscription;
            return response()->json(['imagePaths' => $imagePaths], 200);
        } else {
            return response()->json(['message' => 'Complaint not found.'], 404);
        }
    }

// get values in the complaints table to desabling button

    public function getClaimLunchValue()
    {
        
        $claimLunchValue = Complaint::value('claim_lunch');

        return response()->json(['claim_lunch' => $claimLunchValue]);
    }





    //using as api to lunch complaints**
    
    public function updateAllComplaints()
    {
        // Récupérer toutes les réclamations ayant "stopped" comme valeur de "claim_lunch"
        $complaints = Complaint::where('claim_lunch', 'stopped')->get();

        // Mettre à jour chaque réclamation individuellement pour déclencher le mutateur
        foreach ($complaints as $complaint) {
            $complaint->claim_lunch = 'lunched';
            $complaint->save(); // Cela déclenche le mutateur et met à jour current_time
        }

        return response()->json(['message' => 'Toutes les réclamations ont été mises à jour avec succès.']);
    }
    

public function updateAllComplaintsStop()
{
    // Mettre à jour toutes les réclamations ayant "stopped" par "lunched"
    Complaint::where('claim_lunch', 'lunched')->update(['claim_lunch' => 'stopped']);
    
    return response()->json(['message' => 'Toutes les réclamations ont été mises à jour avec succès.']);
}

public function showComplaintForm(){

    $complaint_closed = Complaint::where('claim_lunch', 'stopped')->exists();

    if($complaint_closed){

        return view('complaint_closed');

    }
    else{
    }
    return view('complaint_form');

}
//send mail to all the users after status changes

public function getStatus()
{
    $status = Complaint::pluck('claim_lunch')->first(); // Récupérer le premier statut de claim_lunch

    // Vérifier si le statut a changé par rapport au dernier statut connu
    if (session()->has('last_status')) {
        $lastStatus = session()->get('last_status');
        if ($status != $lastStatus) {
            // Envoi de l'e-mail de notification
            $users = User::all(); // Supposons que vous ayez un modèle User pour vos utilisateurs
            foreach ($users as $user) {
                Mail::to($user->email)->send(new ClaimStatusChanged($status));
            }
        }
    }

    // Stocker le dernier statut en session pour la prochaine vérification
    session(['last_status' => $status]);

    return response()->json(['status' => $status]);
}



public function getHour(){
    $hour = Complaint::value('hour');
    $claim_lunch = Complaint::value('claim_lunch');
    $server_time = Carbon::now()->toDateTimeString();
    $start_time = Complaint::value('current_time');

    return response()->json(['hour' => $hour, 'claim_lunch' => $claim_lunch, 'server_time' => $server_time, 'start_time'=>$start_time]);
}


}
