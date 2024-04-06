<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transcript;
use Illuminate\Http\Request;
use App\Models\DupTranscript;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TranscriptController extends Controller
{
    public function index()
    {
        try {
            $transcripts = Transcript::all();
            return response()->json($transcripts, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error fetching transcripts'], 500);
        }
    }

    public function show(Transcript $transcript)
    {
        try {
            return response()->json($transcript, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error fetching transcript'], 500);
        }
    }


    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'ac_year' => 'required',
                'ac_level' => 'required',
                'exam_type' => 'required',
                'field' => 'required',
                'speciality' => 'required',
                'description' => 'required',
                'training_type' => 'required',
                'fiche_inscription.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'cip.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'inscription.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            if ($validator->fails()) {
                return view('false_form_filled_transcript');
            }
    
            // Check if the user has already requested a transcript for the current semester and ac_level
            $semesterExists = Transcript::where('user_id', Auth::id())
                ->where('ac_level', $request->input('ac_level'))
                ->where('exam_type', $request->input('exam_type'))
                ->exists();
    
            // check for existing semester records
            if ($semesterExists) {
                $semester = $request->input('exam_type') === 'Semestre 1' ? 'Semestre 1' : 'Semestre 2';
                $acLevel = $request->input('ac_level');
                $errorMessage = "Vous avez déjà fait une demande de bulletin pour le $semester de $acLevel.
                 Veuillez vous rapprocher de l'administration pour plus d'information";
                
                return redirect()->back()->with('error', $errorMessage);
            }
    
            $user = Auth::user();
    
            if (!$user) {
                $user = User::where('mat_number', $request->input('mat'))->first();
    
                if (!$user) {
                    return view('not_found');
                }
            }
    
            $mat = $request->filled('mat') ? $request->input('mat') : $user->mat_number;
    
            // Store multiple images for fiche_inscription
            $ficheInscriptionPaths = [];
            foreach ($request->file('fiche_inscription') as $file) {
                $ficheInscriptionPaths[] = $file->store('transcript_images', 'public');
            }
    
            // Store multiple images for cip
            $cipPaths = [];
            foreach ($request->file('cip') as $file) {
                $cipPaths[] = $file->store('transcript_images', 'public');
            }
    
            // Store multiple images for inscription
            $inscriptionPaths = [];
            foreach ($request->file('inscription') as $file) {
                $inscriptionPaths[] = $file->store('transcript_images', 'public');
            }
    
            $transcript = Transcript::create([
                'ac_year' => $request->input('ac_year'),
                'ac_level' => $request->input('ac_level'),
                'mat' => $mat,
                'exam_type' => $request->input('exam_type'),
                'field' => $request->input('field'),
                'speciality' => $request->input('speciality'),
                'training_type' => $request->input('training_type'),
                'description' => $request->input('description'),
                'fiche_inscription' => json_encode($ficheInscriptionPaths),
                'cip' => json_encode($cipPaths),
                'inscription' => json_encode($inscriptionPaths),
                'user_id' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'email' => $user->email,
                'phone' => $user->phone,
            ]);
    
            // Determine the redirection based on the stored value
            $redirect = '';
    
            switch ($transcript->training_type) {
                case 'paid_training':
                    $redirect = 'paid_training'; // Route name for test1.blade.php
                    break;
                case 'non_paid_training':
                    $redirect = 'non_paid_training'; // Route name for test2.blade.php
                    break;
                case 'together_l1':
                    $redirect = 'together_l1'; // Route name for test3.blade.php
                    break;
                case 'more_than_five':
                    $redirect = 'more_than_five'; // Route name for test3.blade.php
                    break;
                default:
                    $redirect = 'default_page'; // Route name for default page
                    break;
            }
    
            // Redirect the user based on the determined value
            return redirect()->route($redirect);
    
        } catch (\Exception $e) {
            return view('false_form_filled_transcript');
        }
    }
    


// public function store(Request $request)
// {
//     try {
//         $validator = Validator::make($request->all(), [
//             'ac_year' => 'required',
//             'ac_level' => 'required',
//             'exam_type' => 'required',
//             'field' => 'required',
//             'speciality' => 'required',
//             'description' => 'required',
//             'training_type' => 'required',
//             'fiche_inscription' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//             'cip' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//             'inscription' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//         ]);

//         if ($validator->fails()) {
//             // return response()->json(['message' => 'Invalid input'], 422);
//             return view('false_form_filled_transcript');

//         }

// // Check if the user has already requested a transcript for the current semester and ac_level
// $semesterExists = Transcript::where('user_id', Auth::id())
// ->where('ac_level', $request->input('ac_level'))
// ->where('exam_type', $request->input('exam_type'))
// ->exists();

// // check for existing semester records
// if ($semesterExists) {
//     $semester = $request->input('exam_type') === 'Semestre 1' ? 'Semestre 1' : 'Semestre 2';
//     $acLevel = $request->input('ac_level');
//     $errorMessage = "Vous avez déjà fait une demande de bulletin pour le $semester de $acLevel";
//     return redirect()->back()->with('error', $errorMessage);
// }




//         $user = Auth::user();

//         if (!$user) {
//             $user = User::where('mat_number', $request->input('mat'))->first();

//             if (!$user) {
//                 // return response()->json(['message' => 'User not found'], 404);
//                 return view('not_found');
//             }
//         }

//         $mat = $request->filled('mat') ? $request->input('mat') : $user->mat_number;

//         $imagePath = $request->file('fiche_inscription')->store('transcript_images', 'public');
//         $imagePath_cip = $request->file('cip')->store('transcript_images', 'public');
//         $imagePath_inscription = $request->file('inscription')->store('transcript_images', 'public');

//         if (!$imagePath || !$imagePath_cip || !$imagePath_inscription) {
//             // throw new \Exception('Error uploading file(s)', 500);
//             return view('error');

            
//         }

//         $transcript = Transcript::create([
//             'ac_year' => $request->input('ac_year'),
//             'ac_level' => $request->input('ac_level'),
//             'mat' => $mat,
//             'exam_type' => $request->input('exam_type'),
//             'field' => $request->input('field'),
//             'speciality' => $request->input('speciality'),
//             'training_type' => $request->input('training_type'),
//             'description' => $request->input('description'),
//             'fiche_inscription' => $imagePath,
//             'cip' => $imagePath_cip,
//             'inscription' => $imagePath_inscription,
//             'user_id' => $user->id,
//             'firstname' => $user->firstname,
//             'lastname' => $user->lastname,
//             'email' => $user->email,
//             'phone' => $user->phone,
//         ]);

//         // return response()->json($transcript, 201);
//         // return view('test_transcript');

//         // Determine the redirection based on the stored value
//     $redirect = '';

//     switch ($transcript->training_type) {
//         case 'paid_training':
//             $redirect = 'paid_training'; // Route name for test1.blade.php
//             break;
//         case 'non_paid_training':
//             $redirect = 'non_paid_training'; // Route name for test2.blade.php
//             break;
//         case 'together_l1':
//             $redirect = 'together_l1'; // Route name for test3.blade.php
//             break;
//             case 'more_than_five':
//                 $redirect = 'more_than_five'; // Route name for test3.blade.php
//                 break;
//         default:
//             $redirect = 'default_page'; // Route name for default page
//             break;
//     }

//     // Redirect the user based on the determined value
//     return redirect()->route($redirect);

//     } catch (\Exception $e) {
//         // return response()->json(['message' => 'Error creating transcript'], 500);
//         return view('false_form_filled_transcript');
//     }
// }



    public function update(Request $request, Transcript $transcript)
    {
        try {
            $validator = Validator::make($request->all(), [
                'ac_year' => 'required',
                'ac_level' => 'required',
                'mat' => 'required|exists:users,mat_number',
                'exam_type' => 'required',
                'field' => 'required',
                'speciality' => 'required',
                'description' => 'required',
                'fiche_inscription' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($validator->fails()) {

                return redirect('http://localhost/reset/false_form_filled.html');

                // return response()->json($validator->errors(), 400);
            }

            // Get user details based on mat
            $user = User::where('mat_number', $request->input('mat'))->first();

            $transcriptData = array_merge($request->all(), [
                'user_id' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'email' => $user->email,
                'phone' => $user->phone,
            ]);

            if ($request->hasFile('fiche_inscription')) {
                Storage::delete('public/' . $transcript->fiche_inscription);
                $imagePath = $request->file('fiche_inscription')->store('transcript_images', 'public');
                $transcriptData['fiche_inscription'] = $imagePath;
            }

            $transcript->update($transcriptData);

            return response()->json($transcript, 200);
        } catch (\Exception $e) {

            return redirect('http://localhost/reset/false_form_filled.html');

            // return response()->json(['message' => 'Error updating transcript'], 500);
        }
    }

    public function destroy(Transcript $transcript)
    {
        try {
            Storage::delete('public/' . $transcript->fiche_inscription);
            $transcript->delete();

            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error deleting transcript'], 500);
        }
    }


     //check status method

     public function userTranscripts()
     {
         try {
             $userId = Auth::id();
     
             // Fetch transcripts from Transcript model for the logged-in user
            //  $userTranscripts = Transcript::where('user_id', $userId)->paginate(10);
                 $userTranscripts = Transcript::where('user_id', $userId)->paginate(100);

     
             // Fetch transcripts from DupTranscript model for the logged-in user
             $userDupTranscripts = DupTranscript::where('user_id', $userId)->paginate(100);
     
             // Pass both sets of data to the view for displaying
             return view('transcript_status', [
                 'userTranscripts' => $userTranscripts,
                 'userDupTranscripts' => $userDupTranscripts,
             ]);
         } catch (\Exception $e) {
             return back()->withError('Error fetching user transcripts');
         }
     }
     
 // Usage as API
 public function getImagePaths($id)
 {
     $transcript = Transcript::where('id', $id)->first();

     if ($transcript) {
         $imagePaths = $transcript->fiche_inscription;
         return response()->json(['imagePaths' => $imagePaths], 200);
     } else {
         return response()->json(['message' => 'Complaint not found.'], 404);
     }
 }
     
 public function getTranscriptDetails(Request $request)
 {
     $transcriptId = $request->input('id');
     $transcript = Transcript::find($transcriptId);

     if ($transcript) {
         return response()->json($transcript);
     } else {
         return response()->json(['error' => 'Transcript not found'], 404);
     }
 }
 



 // fecth images from the database
 public function fetchImages($id)
 {
     $transcript = Transcript::find($id);

     if (!$transcript) {
         return response()->json(['error' => 'Transcript not found'], 404);
     }

     $imagePaths = [
         'fiche_inscription' => $transcript->fiche_inscription,
         'cip' => $transcript->cip,
         'inscription' => $transcript->inscription,
     ];

     return response()->json($imagePaths);
 }

}
