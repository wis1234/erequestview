<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\PasswordResetNotification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use App\Notifications\VerificationCodeNotification;

class PasswordResetController extends Controller
{
    /**
     * Request a password reset email with a verification code.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function requestReset(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'email' => 'required|email',
            ]);

            // Find the user by email
            $user = User::where('email', $request->input('email'))->first();

            if (!$user) {
                // return view('not_found');
                return redirect()->route('forgot_password')->with('error', "Email non reconnue, veuillez reéssayer.");

            }

            // Generate a unique verification code
            $verificationCode = mt_rand(100000, 999999); // Generate a 6-digit verification code

            // Set an expiration time for the code
            $verificationCodeExpiry = now()->addMinutes(5); // Adjust the time as needed

            // Store the verification code and expiration time in the user's record
            $user->reset_code = $verificationCode;
            $user->reset_code_expiry = $verificationCodeExpiry;
            $user->save();

            // Send a notification email to the user with the verification code
            $user->notify(new PasswordResetNotification($verificationCode));

            return view('send_verification_code');
        } catch (\Exception $e) {
            // Handle exceptions here
            return redirect()->route('forgot_password')->with('error', "une erreur inattendue est survenue.");
        }
    }

    /**
     * Verify the verification code.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function verifyVerificationCode(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'verification_code' => 'required'
            ]);

            // Find the user by the reset code
            $user = User::where('reset_code', $request->input('verification_code'))->first();

            if (!$user) {
                // return view('invalid_or_expiry');
                return redirect()->route('send_verification_code')->with('error', "Code invalide ou expiré, veuillez reéssayer.");

            }

            // Check if the reset code is not expired
            if ($user->reset_code_expiry >= now()) {
                return view('change_password');
            }

            // return view('invalid_or_expiry');
            return redirect()->route('send_verification_code')->with('error', "Code invalide ou expiré, veuillez reéssayer.");


        } catch (\Exception $e) {
            // Handle exceptions here
            // return view('error');
            return redirect()->route('send_verification_code')->with('error', "Code invalide ou expiré, veuillez reéssayer.");

        }
    }

    /**
     * Reset the user's password after verification.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'verification_code' => 'required',
                'password' => 'required|min:8',
            ]);

            // Find the user by the verification code
            $user = User::where('reset_code', $request->input('verification_code'))->first();

            if (!$user) {
                // return view('error');
                return redirect()->route('change_password')->with('error', "une erreur inattendue est survenue.");

            }

            // Update the user's password and reset the reset_code and reset_code_expiry
            $user->update([
                'password' => Hash::make($request->input('password')),
                'reset_code' => null, // Reset the reset code
                'reset_code_expiry' => null, // Reset the reset code expiry
            ]);

            return view('change_password_sucess');
        } catch (\Exception $e) {
            // Handle exceptions here
            // return view('error');
            return redirect()->route('change_password')->with('error', "une erreur inattendue est survenue.");

        }
    }
}
