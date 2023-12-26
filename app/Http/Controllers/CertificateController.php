<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class CertificateController extends Controller
{
    public function index()
    {
        try {
            $certificates = Certificate::all();
            return response()->json($certificates, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred.'], 500);
        }
    }

    public function show(Certificate $certificate)
    {
        try {
            return response()->json($certificate, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Certificate not found.'], 404);
        }
    }


    
    public function store(Request $request)
    {
        try {
            // Validation rules for request data
            $validator = Validator::make($request->all(), [
                'ac_year' => 'required',
                'ac_level' => 'required',
                'firstname' => 'nullable',
                'lastname' => 'nullable',
                'email' => 'nullable|email',
                'phone' => 'nullable',
                'exam_type' => 'nullable',
                'field' => 'required',
                'defense_date' => 'required|date',
                'speciality' => 'required',
                'description' => 'required',
                'birth_cert' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'cip' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'id_card.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'student_card' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'enrolle1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'enrolle2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'enrolle3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'dis_cover_page' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'cert_thesis_def' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            if ($validator->fails()) {
                // Handle validation failure, you can redirect or return a response as needed.
                return view('false_form_filled_certificate');
            }
    
            // Check if the user is authenticated
            if (Auth::check()) {
                // If authenticated, use the user's session data
                $user = Auth::user();
            } else {
                // If not authenticated, get user details based on mat from the input
                $user = User::where('mat_number', $request->input('mat'))->first();
    
                if (!$user) {
                    return view('not_found');
                }
            }
    
            // Automatically fill "mat" from the authenticated user if not provided in the input
            $mat = $request->filled('mat') ? $request->input('mat') : $user->mat_number;
    
            // Store the uploaded images in the 'certificates' folder
            $birth_certPath = $request->file('birth_cert')->store('birth_cert', 'public');
            $cipPath = $request->file('cip')->store('cip', 'public');
            $id_cardPath = $request->file('id_card')->store('id_card', 'public');
            $student_cardPath = $request->file('student_card')->store('student_card', 'public');
            $enrolle1Path = $request->file('enrolle1')->store('enrolle1', 'public');
            $enrolle2Path = $request->file('enrolle2')->store('enrolle2', 'public');
            $enrolle3Path = $request->file('enrolle3')->store('enrolle3', 'public');
            $dis_cover_pagePath = $request->file('dis_cover_page')->store('dis_cover_page', 'public');
            $cert_thesis_defPath = $request->file('cert_thesis_def')->store('cert_thesis_def', 'public');
    
            $certificateData = [
                'user_id' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'email' => $user->email,
                'phone' => $user->phone,
                'mat' => $mat,
                'ac_year' => $request->input('ac_year'),
                'ac_level' => $request->input('ac_level'),
                'exam_type' => $request->input('exam_type'),
                'field' => $request->input('field'),
                'defense_date' => $request->input('defense_date'),
                'speciality' => $request->input('speciality'),
                'description' => $request->input('description'),
                'birth_cert' => $birth_certPath,
                'cip' => $cipPath,
                'id_card' => $id_cardPath,
                'student_card' => $student_cardPath,
                'enrolle1' => $enrolle1Path,
                'enrolle2' => $enrolle2Path,
                'enrolle3' => $enrolle3Path,
                'dis_cover_page' => $dis_cover_pagePath,
                'cert_thesis_def' => $cert_thesis_defPath,
            ];
    
            $idCardPaths = [];
            if ($request->hasFile('id_card')) {
                foreach ($request->file('id_card') as $file) {
                    $idCardPath = $file->store('id_card', 'public');
                    $idCardPaths[] = $idCardPath;
                }
            }
            
            $certificate = $user->certificates()->create($certificateData);
    
            // Handle success, you can redirect or return a response as needed.
            return view('test_certificate');
    
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error($e);
    
            // return response()->json(['error' => $e->getMessage()]);
            return view('error');
        }
    }
    




    public function update(Request $request, Certificate $certificate)
    {
        try {
            // Validation rules for request data
            $validator = Validator::make($request->all(), [
                'ac_year' => 'required',
                'ac_level' => 'required',
                'mat' => 'required|exists:users,mat_number',
                'firstname' => 'nullable',
                'lastname' => 'nullable',
                'email' => 'nullable|email',
                'phone' => 'nullable',
                'exam_type' => 'nullable',
                'field' => 'required',
                'speciality' => 'required',
                'defense_date' => 'required|date',

                'description' => 'required',
                'bulletin1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'bulletin2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect('http://localhost/reset/false_form_filled.html');

                // return response()->json($validator->errors(), 400);
            }

            if ($request->hasFile('bulletin1')) {
                Storage::delete('public/' . $certificate->bulletin1);
                $bulletin1Path = $request->file('bulletin1')->store('bulletin1', 'public');
            } else {
                $bulletin1Path = $certificate->bulletin1;
            }

            if ($request->hasFile('bulletin2')) {
                Storage::delete('public/' . $certificate->bulletin2);
                $bulletin2Path = $request->file('bulletin2')->store('bulletin2', 'public');
            } else {
                $bulletin2Path = $certificate->bulletin2;
            }

            $certificateData = array_merge($request->all(), [
                'bulletin1' => $bulletin1Path,
                'bulletin2' => $bulletin2Path,
            ]);

            // Get user details based on mat
            $user = User::where('mat_number', $request->input('mat'))->first();

            if (!$user) {
                return response()->json(['message' => 'User not found.'], 404);
            }

            // Automatically fill user-related fields
            $certificateData['user_id'] = $user->id;
            $certificateData['firstname'] = $user->firstname;
            $certificateData['lastname'] = $user->lastname;
            $certificateData['email'] = $user->email;
            $certificateData['phone'] = $user->phone;

            $certificate->update($certificateData);

            // return response()->json($certificate, 200);
            return redirect('http://localhost/reset/test_transcript.html');

        } catch (\Exception $e) {
            // return response()->json(['message' => 'An error occurred.'], 500);
            return redirect('http://localhost/reset/false_form_filled.html');

        }
    }

    public function destroy(Certificate $certificate)
    {
        try {
            Storage::delete('public/' . $certificate->bulletin1);
            Storage::delete('public/' . $certificate->bulletin2);
            $certificate->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred.'], 500);
        }
    }


        //check status method
        public function userCertificates()
        {
            try {
                // Get the logged-in user's ID
                $userId = Auth::id();
        
                // Fetch all complaints associated with the user
                // $userComplaints = Complaint::where('student_id', $userId)->get();
                $userComplaints = Certificate::where('user_id', $userId)->paginate(4);
    
        
                // Pass the complaints to a view for displaying
                return view('certificate_status', ['userCertificates' => $userComplaints]);
            } catch (\Exception $e) {
                // Handle exceptions if any
                return back()->withError('Error fetching user certificates');
            }
        }
}
