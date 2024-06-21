<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'date' => 'required|date',
                'place_birth' => 'required|string',
                'email' => 'required|email|unique:users',
                'phone' => 'required|string',
                'mat_number' => 'required|max:8|string|unique:users',
                'google_id' => 'nullable|string',
                'phone_code' => 'nullable|string',
                'secret_key' => 'nullable|string',
                'password' => 'required|string|min:6',
            ]);

            $identifier = $this->generateIdentifier($validatedData['firstname'], $validatedData['lastname'], $validatedData['mat_number']);
            $validatedData['identifier'] = $identifier;

            $user = User::create($validatedData);

            // Redirect on successful registration
            return view('register_sucess');
            // return redirect()->route('register_sucess')->with('error', "Une erreur inattendue est survenue, veuillez reéssayer s'il vous plaît");

            
        } catch (\Exception $e) {
            // Handle the exception and redirect to error.html
              return redirect()->route('register')->with('error', "Cet email a dèjà été utilisé");

            // return view('already_exists');
        }
    }


  

    private function generateIdentifier($firstname, $lastname, $mat_number)
    {
        $uniquePart = uniqid();
        return $firstname . '|-_-|' . $uniquePart . '@ADR0@' . $lastname . '|_-_|' . $mat_number;
    }

    public function show($mat_number)
    {
        $user = User::where('mat_number', $mat_number)->first();
        if ($user) {
            return response()->json(['message' => 'User retrieved successfully', 'user' => $user]);
        } else {
            return redirect()->route('register')->with('error', "Utilisateur non retrouvé");
        }
    }

    public function update(Request $request, $mat_number)
    {
        $user = User::where('mat_number', $mat_number)->first();

        if ($user) {
            $validatedData = $request->validate([
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users')->ignore($user->id),
                ],
                'phone' => 'required|string',
                'mat_number' => [
                    'required',
                    'string',
                    Rule::unique('users')->ignore($user->id),
                ],
                'identifier' => [
                    'required',
                    'string',
                    Rule::unique('users')->ignore($user->id),
                ],
                'google_id' => 'nullable|string',
                'phone_code' => 'nullable|string',
                'secret_key' => 'nullable|string',
                'password' => 'sometimes|string|min:6',
            ]);

            $user->update($validatedData);

            return response()->json(['message' => 'User updated successfully', 'user' => $user]);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }

    public function destroy($mat_number)
    {
        $user = User::where('mat_number', $mat_number)->first();

        if ($user) {
            $firstname = $user->firstname;
            $lastname = $user->lastname;
            $user->delete();

            $message = "You've just deleted $firstname $lastname successfully";
            return response()->json(['message' => $message], 204);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }


    public function updateProfile(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:3048',
        ]);
    
        $user = Auth::user();
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
    
            // Store the new image using storeFile method
            $path = $this->storeFile($request->file('image'));
    
            // Update the user's image path
            $user->image = $path;
            $user->save();
        }
    
        return redirect()->back()->with('success', 'Profile picture updated successfully.');
    }
    
    private function storeFile($file)
    {
        if (!$file || !$file->isValid()) {
            return null;
        }
    
        return $file->store('profile_images', 'public');
    }

    public function login(Request $request)
    {
        try {
            // Validate the login data
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            // Check if the user exists
            $userExists = User::where('email', $credentials['email'])->exists();
    
            if (!$userExists) {
                return redirect()->route('login')->with('error', "Aucun compte n'est associé à cet email. Veuillez vérifier et reéssayer");
            }
    
            if (Auth::attempt($credentials)) {
                // Authentication successful
                return redirect()->route('index_redirect'); // Redirect to the dashboard or any other page
            } else {
                // Authentication failed, redirect back to the login form with an error message
                return redirect()->route('login')->with('error', 'Mot de passe incorrecte. Veuillez vérifier et reéssayer'); 
                // return view('invalid_credential');
            }
        } catch (ValidationException $e) {
            // Handle validation errors
            return redirect()->route('login')->withErrors($e->validator->errors()->all())->withInput();
        } catch (\Exception $e) {
            // Handle other exceptions
            return redirect()->route('login')->with('error', 'Une erreur inattendue s\'est produite. Veuillez réessayer.');
        }
    }
    public function logout()
{
    Auth::logout(); // Log the user out

    return redirect()->route('index'); // Redirect to the login form or any other page
}

}
