<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\TranscriptController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/get-image-paths/{mat}', [ComplaintController::class, 'getImagePaths']);
Route::get('/get-transcript-details/{mat}', [TranscriptController::class, 'getImagePaths']);



Route::put('/complaint/{id}', [ComplaintController::class, 'update'])->name('complaint_update');
Route::delete('/complaint/{id}', [ComplaintController::class, 'destroy'])->name('complaint_delete');
Route::post('/complaint', [ComplaintController::class, 'store'])->name('complaint_send');
Route::get('/transcripts/details', [TranscriptController::class, 'getTranscriptDetails'])->name('getTranscriptDetails');




//images path routing

Route::get('transcripts/images/{id}', [TranscriptController::class, 'fetchImages']);
