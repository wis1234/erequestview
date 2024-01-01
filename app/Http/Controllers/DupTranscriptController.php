<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DupTranscript;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DupTranscriptController extends Controller
{
    public function index()
    {
        try {
            $transcripts = DupTranscript::all();
            return response()->json($transcripts, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error fetching transcripts'], 500);
        }
    }

    public function show(DupTranscript $transcript)
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
            'fiche_inscription' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cip' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'inscription' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            // return response()->json(['message' => 'Invalid input'], 422);
            return view('false_form_filled_transcript');

        }

        $user = Auth::user();

        if (!$user) {
            $user = User::where('mat_number', $request->input('mat'))->first();

            if (!$user) {
                // return response()->json(['message' => 'User not found'], 404);
                return view('not_found');
            }
        }

        $mat = $request->filled('mat') ? $request->input('mat') : $user->mat_number;

        $imagePath = $request->file('fiche_inscription')->store('transcript_images', 'public');
        $imagePath_cip = $request->file('cip')->store('transcript_images', 'public');
        $imagePath_inscription = $request->file('inscription')->store('transcript_images', 'public');

        if (!$imagePath || !$imagePath_cip || !$imagePath_inscription) {
            // throw new \Exception('Error uploading file(s)', 500);
            return view('error');

            
        }

        $userDupTranscripts = DupTranscript::create([
            'ac_year' => $request->input('ac_year'),
            'ac_level' => $request->input('ac_level'),
            'mat' => $mat,
            'exam_type' => $request->input('exam_type'),
            'field' => $request->input('field'),
            'speciality' => $request->input('speciality'),
            'description' => $request->input('description'),
            'fiche_inscription' => $imagePath,
            'cip' => $imagePath_cip,
            'inscription' => $imagePath_inscription,
            'user_id' => $user->id,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'email' => $user->email,
            'phone' => $user->phone,
        ]);

        // return response()->json($transcript, 201);
        return view('dup_test_transcript');

    } catch (\Exception $e) {
        // return response()->json(['message' => 'Error creating transcript'], 500);
        return view('false_form_filled_transcript');
    }
}



    public function update(Request $request, DupTranscript $transcript)
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

    public function destroy(DupTranscript $transcript)
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
     public function userDupTranscripts()
     {
        try {
            // Get the logged-in user's ID
            $userId = Auth::id();
    
            // Fetch all transcripts associated with the user
            $userDupTranscripts = DupTranscript::where('user_id', $userId)->paginate(4);
    
            // Pass the transcripts to the view for displaying
            return view('dup_transcript_status', compact('userDupTranscripts'));
        } catch (\Exception $e) {
            // Handle exceptions if any
            return back()->withError('Error fetching user transcripts');
        }
     }
}
