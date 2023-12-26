<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

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
            
        } catch (\Exception $e) {
            // Handle the exception and redirect to error.html
            return view('already_exists');
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
            return response()->json(['error' => 'User not found'], 404);
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


    // Handle the login form submission
    public function login(Request $request)
    {
        // Validate the login data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log in the user
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return view('index_redirect'); // Redirect to the dashboard or any other page
        }

        // Authentication failed, redirect back to the login form
        return view('invalid_credential'); // Redirect to the dashboard or any other page
    }


    public function logout()
{
    Auth::logout(); // Log the user out

    return redirect()->route('index'); // Redirect to the login form or any other page
}

}
