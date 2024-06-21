<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CertificateMasterController;
use App\Http\Controllers\TranscriptController;
use App\Http\Controllers\DiplomaController;
use App\Http\Controllers\DupTranscriptController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\PedRegistrationController;
use App\Http\Controllers\RetakeController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Auth Middleware Routes
Route::middleware(['auth'])->group(function () {

    Route::get('/test_certificate', function () {
        return view('test_certificate');
    })->name('test_certificate');

    Route::get('/test_diploma', function () {
        return view('test_diploma');
    })->name('test_diploma');

    Route::get('/test_transcript', function () {
        return view('test_transcript');
    })->name('test_transcript');

    Route::get('/test', function () {
        return view('test');
    })->name('test');

    Route::get('/certificate_form', function () {
        return view('certificate_form');
    })->name('certificate_form');

    // Route::get('/complaint_form', function () {
    //     return view('complaint_form');
    // })->name('complaint_form');

    Route::get('/false_form_filled', function () {
        return view('false_form_filled');
    })->name('false_form_filled');

    Route::get('/diploma_form', function () {
        return view('diploma_form');
    })->name('diploma_form');

 

    Route::get('/transcript_form', function () {
        return view('transcript_form');
    })->name('transcript_form');

    Route::get('/false_form_filled', function () {
        return view('false_form_filled');
    })->name('false_form_filled');

    Route::get('/false_form_filled_transcript', function () {
        return view('false_form_filled_transcript');
    })->name('false_form_filled_transcript');

    Route::get('/false_form_filled_certificate', function () {
        return view('false_form_filled_certificate');
    })->name('false_form_filled_certificate');

    Route::get('/false_form_filled_diploma', function () {
        return view('false_form_filled_diploma');
    })->name('false_form_filled_diploma');

});



// front end routing
/********************************************************/ 
Route::get('/', function () {
    return view('index');
})->name('index');

    Route::get('/already_exists', function () {
        return view('already_exists');
    })->name('already_exists');

    Route::get('/certificat_redirect', function () {
        return view('certificat_redirect');
    })->name('certificat_redirect');



    Route::get('/certificate_process', function () {
        return view('certificate_process');
    })->name('certificate_process');

    Route::get('/change_password_sucess', function () {
        return view('change_password_sucess');
    })->name('change_password_sucess');


    Route::get('/complaint_index', function () {
        return view('complaint_index');
    })->name('complaint_index');

    Route::get('/complaint_process', function () {
        return view('complaint_process');
    })->name('complaint_process');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');



    Route::get('/diploma_process', function () {
        return view('diploma_process');
    })->name('diploma_process');

    Route::get('/diploma_redirect', function () {
        return view('diploma_redirect');
    })->name('diploma_redirect');

    Route::get('/error', function () {
        return view('error');
    })->name('error');

 

    Route::get('/forgot_password', function () {
        return view('forgot_password');
    })->name('forgot_password');

    Route::get('/invalid_credential', function () {
        return view('invalid_credential');
    })->name('invalid_credential');

    Route::get('/invalid_or_expiry', function () {
        return view('invalid_or_expiry');
    })->name('invalid_or_expiry');

    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::get('/register_sucess', function () {
        return view('register_sucess');
    })->name('register_sucess');

    Route::get('/message_sucess', function () {
        return view('message_sucess');
    })->name('message_sucess');

    Route::get('/not_found', function () {
        return view('not_found');
    })->name('not_found');

    Route::get('/payment_sucess', function () {
        return view('payment_sucess');
    })->name('payment_sucess');

    // Route::post('/payment_sucess', function () {
    //     return view('payment_sucess');
    // })->name('payment_sucess');

    Route::get('/process', function () {
        return view('process');
    })->name('process');

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/send_verification_code', function () {
        return view('send_verification_code');
    })->name('send_verification_code');

    



    Route::get('/transcript_redirect', function () {
        return view('transcript_redirect');
    })->name('transcript_redirect');

    Route::get('/transcript_process', function () {
        return view('transcript_process');
    })->name('transcript_process');


    Route::get('/change_password', function () {
        return view('change_password');
    })->name('change_password');

    Route::get('/verify_code', function () {
        return view('not_allowed');
    })->name('verify_code');

    Route::get('/request_reset', function () {
        return view('not_allowed');
    })->name('request_reset');
    
// Auth Middleware Routes
/*Protected from retrieving sensitive data accesses in browser or tab*/
Route::middleware(['auth'])->group(function () {
 


    Route::get('/login_post', function () {
        return view('error_login');
    })->name('login_post');

    Route::get('/paid_training', function () {
        return view('paid_training');
    })->name('paid_training');

        Route::get('/non_paid_training', function () {
        return view('non_paid_training');
    })->name('non_paid_training');

    Route::get('/together_l1', function () {
        return view('together_l1');
    })->name('together_l1');

    Route::get('/more_than_five', function () {
        return view('more_than_five');
    })->name('more_than_five');
    

    Route::get('/dup_transcript_form', function () {
        return view('dup_transcript_form');
    })->name('dup_transcript_form');

    Route::get('/dup_test_transcript', function () {
        return view('dup_test_transcript');
    })->name('dup_test_transcript');

    Route::get('/dup_transcript_status', function () {
        return view('dup_transcript_status');
    })->name('dup_transcript_status');

    Route::get('/bachelor5+', function () {
        return view('bachelor5+');
    })->name('bachelor5+');

    Route::get('/bachelor-5', function () {
        return view('bachelor-5');
    })->name('bachelor-5');
    

    Route::get('/certificate_form_master', function () {
        return view('certificate_form_master');
    })->name('certificate_form_master');

    Route::get('/certificate_form_doctorat', function () {
        return view('certificate_form_doctorat');
    })->name('certificate_form_doctorat');

    Route::get('/ certificate_form_master', function () {
        return view(' certificate_form_master');
    })->name(' certificate_form_master');
   
});
/********************************************************/ 



//Controller routing
/********************************************************/ 

Route::post('/login_post', [AuthController::class, 'login'])->name('login_post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'register'])->name('register');



//complaints routing
// Route::get('/complaint', [ComplaintController::class, 'index'])->name('complaint_all')->middleware('auth');
Route::get('/complaint', function () {
    return view('not_allowed');
});
Route::get('/logout', function () {
    return view('not_allowed');
});

Route::post('/complaint', [ComplaintController::class, 'store'])->name('complaint_send');
Route::get('/complaint_form', [ComplaintController::class, 'showComplaintForm'])->name('complaint_form');
Route::get('/complaint/{id}', function () {
    return view('not_allowed');
});

Route::put('/complaint/{id}', [ComplaintController::class, 'update'])->name('complaint_update');
Route::delete('/complaint/{id}', [ComplaintController::class, 'destroy'])->name('complaint_delete');
//certificate routing
// Route::get('/certificates', [CertificateController::class, 'index']);
Route::get('/certificates', function () {
    return view('not_allowed');
});
Route::post('/certificate_send', [CertificateController::class, 'store'])->name('certificate_send');
// Route::get('/certificates/{certificate}', [CertificateController::class, 'show']);
Route::get('/certificates/{certificates}', function () {
    return view('not_allowed');
});
Route::get('/certificate_send', function () {
    return view('not_allowed');
});
Route::get('/not_support', function () {
    return view('not_support');
});

Route::put('/certificates/{certificate}', [CertificateController::class, 'update']);
Route::delete('/certificates/{certificate}', [CertificateController::class, 'destroy']);


//transcript routing
Route::group(['prefix' => 'transcript'], function () {
    // Route::get('/', [TranscriptController::class, 'index']);
    Route::get('/', function () {
        return view('not_allowed');
    });
    Route::post('/', [TranscriptController::class, 'store'])->name(('transcript'));

    // Route::get('{transcript}', [TranscriptController::class, 'show']);
    Route::delete('{transcript}', [TranscriptController::class, 'destroy']);
    Route::put('{transcript}', [TranscriptController::class, 'update']);
});

// Diploma routing
Route::group(['prefix' => 'diploma'], function () {
    // Route::get('/', [DiplomaController::class, 'index']);
    Route::get('/', function () {
        return view('not_allowed');
    });
    Route::post('/', [DiplomaController::class, 'store'])->name('diploma');

    // Route::get('{diploma}', [DiplomaController::class, 'show']);
    Route::delete('{diploma}', [DiplomaController::class, 'destroy']);
    Route::put('{diploma}', [DiplomaController::class, 'update']);
});





//Duplicat transcript routing
Route::post('/dup_transcript', [DupTranscriptController::class, 'store'])->name('dup_transcript');


//master certificate routing
Route::post('/certificate_master', [CertificateMasterController::class, 'store'])->name('certificate_master');




// Message routing
// Route::get('/message', [MessageController::class, 'index']);
Route::get('/message', function () {
    return view('not_allowed');
});
Route::post('/message', [MessageController::class, 'store'])->name('message');
// Route::get('/message/{id}', [MessageController::class, 'show']);
Route::put('/message/{id}', [MessageController::class, 'update']);
Route::delete('/message/{id}', [MessageController::class, 'destroy']);

//Password reset routing

Route::post('request_reset', [PasswordResetController::class, 'requestReset'])->name('request_reset');

Route::post('verify_code', [PasswordResetController::class, 'verifyverificationcode'])->name('verify_code');

Route::post('reset_password', [PasswordResetController::class, 'resetPassword'])->name('reset_password');
Route::get('/reset_password', function () {
    return view('not_allowed');
});

//handle operation in the user dashbord
Route::get('/demande', 'YourController@demandeMethod')->name('demande_route');
Route::get('/status', 'YourController@statusMethod')->name('status_route');
Route::get('/historique', 'YourController@historiqueMethod')->name('historique_route');




//handle status check 

Route::get('/user/complaints', [ComplaintController::class, 'userComplaints'])->name('complaint_status')->middleware('auth');
Route::get('/user/certificates', [CertificateController::class, 'userCertificates'])->name('certificate_status')->middleware('auth');
Route::get('/user/transcripts', [TranscriptController::class, 'userTranscripts'])->name('transcript_status')->middleware('auth');
Route::get('/user/diploma', [DiplomaController::class, 'userDiploma'])->name('diploma_status')->middleware('auth');
Route::get('/user/dup_transcript', [DupTranscriptController::class, 'userDupTranscripts'])->name('dup_transcript_status')->middleware('auth');
Route::get('/user/ped_registration', [PedRegistrationController::class, 'userPedRegistration'])->name('ped_registration_status')->middleware('auth');
Route::get('/user/retake', [RetakeController::class, 'userRetake'])->name('retake_status')->middleware('auth');


Route::get('/index_redirect', function () {
    return view('index_redirect');
})->name('index_redirect')->middleware('auth');


//generate pdf for transcript status

Route::post('/generate-pdf', [PdfController::class, 'generatePdf'])->name('generate.pdf');
Route::post('/dup_generate-pdf', [PdfController::class, 'dup_generatePdf'])->name('dup_generate.pdf');
Route::post('/com_generate-pdf', [PdfController::class, 'com_generatePdf'])->name('com_generate.pdf');


//preserve from browsers direct access
Route::get('/generate-pdf', function () {
    return view('not_allowed');
});
Route::get('/dup_generate-pdf', function () {
    return view('not_allowed');
});
Route::get('/com_generate-pdf', function () {
    return view('not_allowed');
});

//profile picture routing

Route::get('/app', function () {
    return view('layouts.app');
})->name('app');

// complaints claim lunch status routing

Route::get('/get-claim-lunch-value', [ComplaintController::class, 'getClaimLunchValue']);
Route::get('/status', [ComplaintController::class, 'getStatus'])->name('status');

//pedagogiq registration lunch status

Route::get('/get-ped-lunch-value', [PedRegistrationController::class, 'getPedLunchValue']);
Route::get('/status', [PedRegistrationController::class, 'getStatus'])->name('status');

//retake lunch status

Route::get('/get-retake-lunch-value', [RetakeController::class, 'getRetakeLunchValue']);
Route::get('/status', [RetakeController::class, 'getStatus'])->name('status');


// pedagogique registrations routing

Route::post('/PedRegistration', [PedRegistrationController::class, 'store'])->name('PedRegistration_send');
Route::get('/ped_registration_form', [PedRegistrationController::class, 'showPedRegistrationForm'])->name('ped_registration_form');
Route::get('/complaint/{id}', function () {
    return view('not_allowed');
});
Route::get('/PedRegistration', function () {
    return view('not_allowed');
});

// pedagogique registrations routing

Route::post('/Retake', [RetakeController::class, 'store'])->name('Retake_send');
Route::get('/Retake', [RetakeController::class, 'showRetakeForm'])->name('retake_form');

Route::get('/retake_form', [RetakeController::class, 'showRetakeForm'])->name('retake_form');


//minutor routing for getting hour
Route::get('/complaint/hour/check', [ComplaintController::class, 'getHour'])->name('hour');
Route::get('/ped/hour/check', [PedRegistrationController::class, 'getHour'])->name('hour');
Route::get('/retake/hour/check', [RetakeController::class, 'getHour'])->name('hour');


//profile update routing
Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');
Route::get('/profile/update', function () {
    return view('not_allowed');
});