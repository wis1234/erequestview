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
            $validator = Validator::make($request->only(['fiche_inscription', 'ac_year', 'ac_level', 'field', 'speciality', 'exam_type', 'complain_type', 'ecue', 'ecue_sub', 'description']), [
                'fiche_inscription.*' => 'required|file|mimes:jpg,jpeg,png|max:2048',
                'ac_year' => 'required|string',
                'ac_level' => 'required|string',
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

            // Get the authenticated user data from the session
            $user = Auth::user();

            if (!$user) {
                // return response()->json(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
                return view('errors.419');
            }

            // Automatically fill the 'mat' field based on the user's mat_number
            $mat = $user->mat_number;

            // Other complaint data
            $complaintData = [
                'mat' => $mat,
                'ac_year' => $request->input('ac_year'),
                'ac_level' => $request->input('ac_level'),
                'field' => $request->input('field'),
                'speciality' => $request->input('speciality'),
                'exam_type' => $request->input('exam_type'),
                'complain_type' => $request->input('complain_type'),
                'ecue' => $request->input('ecue'),
                'ecue_sub' => $request->input('ecue_sub'),
                'description' => $request->input('description'),
                'student_id' => $user->id,
                'claimant_firstname' => $user->firstname,
                'claimant_lastname' => $user->lastname,
                'claimant_phone' => $user->phone,
                'claimant_email' => $user->email,
            ];

            $ficheInscriptionPaths = [];

            foreach ($request->file('fiche_inscription') as $file) {
                $ficheInscriptionPath = $this->storeFile($file);
    
                if (!$ficheInscriptionPath) {
                    // return response()->json(['error' => 'Failed to store fiche inscription file.'], Response::HTTP_INTERNAL_SERVER_ERROR);
                    return view('not_support');
                }
    
                $ficheInscriptionPaths[] = $ficheInscriptionPath;
            }
    
            // Add 'fiche_inscription' field to complaint data
            $complaintData['fiche_inscription'] = $ficheInscriptionPaths;
    
            // Create the Complaint model with the 'fiche_inscription' field set to the path
            $complaint = new Complaint($complaintData);
            $complaint->save();
    
            // return response()->json(['message' => 'Complaint created successfully', 'data' => $complaint]);
            return view('test');

        } catch (ValidationException $e) {
            return view('not_support');
          } catch (Exception $e) {
            // return response()->json(['message' => 'An error occurred', 'error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            return view('false_form_filled');
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
}
