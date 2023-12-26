<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Diploma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DiplomaController extends Controller
{
    public function index()
    {
        try {
            $diplomas = Diploma::all();
            return response()->json($diplomas, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error fetching diplomas'], 500);
        }
    }

    public function show(Diploma $diploma)
    {
        try {
            return response()->json($diploma, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error fetching diploma'], 500);
        }
    }

    // public function store(Request $request)
    // {
    //     try {
    //         $validator = Validator::make($request->all(), [
    //             'ac_year' => 'required',
    //             'ac_level' => 'required',
    //             'mat' => 'required|exists:users,mat_number',
    //             'field' => 'required',
    //             'speciality' => 'required',
    //             'description' => 'required',
    //             'fiche_inscription' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         ]);

    //         if ($validator->fails()) {
    //             // return response()->json($validator->errors(), 400);
    //             return view('false_form_filled');

    //         }

    //         // Get user details based on mat
    //         $user = User::where('mat_number', $request->input('mat'))->first();

    //         if (!$user) {
    //             // return response()->json(['message' => 'User not found'], 404);
    //             return view('false_form_filled');

    //         }

    //         $imagePath = $request->file('fiche_inscription')->store('diploma_images', 'public');

    //         $diploma = new Diploma([
    //             'ac_year' => $request->input('ac_year'),
    //             'ac_level' => $request->input('ac_level'),
    //             'mat' => $request->input('mat'),
    //             'field' => $request->input('field'),
    //             'speciality' => $request->input('speciality'),
    //             'description' => $request->input('description'),
    //             'fiche_inscription' => $imagePath,
    //             'user_id' => $user->id,
    //             'firstname' => $user->firstname,
    //             'lastname' => $user->lastname,
    //             'email' => $user->email,
    //             'phone' => $user->phone,
    //         ]);

    //         $diploma->save();

    //         // return response()->json($diploma, 201);
    //         return view('test_diploma');


    //     } catch (\Exception $e) {
    //         // return response()->json(['message' => 'Error creating diploma'], 500);
    //         return view('false_form_filled');

    //     }
    // }

    public function store(Request $request)
{
    try {
        $validator = Validator::make($request->all(), [
            'ac_year' => 'required',
            'ac_level' => 'required',
            'field' => 'required',
            'speciality' => 'required',
            'description' => 'required',
            'fiche_inscription' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            // return response()->json($validator->errors(), 400);
            return view('false_form_filled_diploma');
        }

        // Check if the user is authenticated
        if (Auth::check()) {
            // If authenticated, use the user's session data
            $user = Auth::user();
        } else {
            // If not authenticated, get user details based on mat from the input
            $user = User::where('mat_number', $request->input('mat'))->first();

            if (!$user) {
                // return response()->json(['message' => 'User not found'], 404);
                return view('false_form_filled_diploma');
            }
        }

        // Automatically fill "mat" from the authenticated user if not provided in the input
        $mat = $request->filled('mat') ? $request->input('mat') : $user->mat_number;

        $imagePath = $request->file('fiche_inscription')->store('diploma_images', 'public');

        $diploma = new Diploma([
            'ac_year' => $request->input('ac_year'),
            'ac_level' => $request->input('ac_level'),
            'mat' => $mat,
            'field' => $request->input('field'),
            'speciality' => $request->input('speciality'),
            'description' => $request->input('description'),
            'fiche_inscription' => $imagePath,
            'user_id' => $user->id,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'email' => $user->email,
            'phone' => $user->phone,
        ]);

        $diploma->save();

        // return response()->json($diploma, 201);
        return view('test_diploma');

    } catch (\Exception $e) {
        // return response()->json(['message' => 'Error creating diploma'], 500);
        return view('false_form_filled_diploma');
    }
}


    public function update(Request $request, Diploma $diploma)
    {
        try {
            $validator = Validator::make($request->all(), [
                'ac_year' => 'required',
                'ac_level' => 'required',
                'mat' => 'required|exists:users,mat_number',
                'field' => 'required',
                'speciality' => 'required',
                'description' => 'required',
                'fiche_inscription' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            // Get user details based on mat
            $user = User::where('mat_number', $request->input('mat'))->first();

            $diplomaData = array_merge($request->all(), [
                'user_id' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'email' => $user->email,
                'phone' => $user->phone,
            ]);

            if ($request->hasFile('fiche_inscription')) {
                Storage::delete('public/' . $diploma->fiche_inscription);
                $imagePath = $request->file('fiche_inscription')->store('diploma_images', 'public');
                $diplomaData['fiche_inscription'] = $imagePath;
            }

            $diploma->update($diplomaData);

            return response()->json($diploma, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error updating diploma'], 500);
        }
    }

    public function destroy(Diploma $diploma)
    {
        try {
            Storage::delete('public/' . $diploma->fiche_inscription);
            $diploma->delete();

            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error deleting diploma'], 500);
        }
    }


    
     //check status method
     public function userDiploma()
     {
         try {
             // Get the logged-in user's ID
             $userId = Auth::id();
     
             // Fetch all complaints associated with the user
             // $userTranscripts = Complaint::where('student_id', $userId)->get();
             $userDiploma = Diploma::where('user_id', $userId)->paginate(4);
 
     
             // Pass the complaints to a view for displaying
             return view('diploma_status', ['userDiploma' => $userDiploma]);
         } catch (\Exception $e) {
             // Handle exceptions if any
             return back()->withError('Error fetching user certificates');
         }
     }
}
