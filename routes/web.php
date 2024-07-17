<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\OnboardingController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Professional2Controller;
use App\Http\Controllers\GameController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Root route for the welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// Authenticated routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirects', [HomeController::class, "index"])->name('redirects');

Route::get('/community', [CommunityController::class, 'index'])->name('community');



// Route::get('/mental-health-professionals', [ProfessionalController::class, 'index'])->name('mental_health_professionals');
// Route::get('/appointments/create/', [AppointmentController::class, 'create'])->name('appointments.create');
// Route::post('/appointments/store/{professional}', [AppointmentController::class, 'store'])->name('appointments.store');
// routes/web.php
// Route::get('/book-appointment', [App\Http\Controllers\AppointmentController::class, 'create'])->name('appointments.create');
Route::get('/professional/{id}', [ProfessionalController::class, 'show'])->name('professional.show');
Route::get('/mental-health-professionals', [ProfessionalController::class, 'index'])->name('mental_health_professionals');

Route::get('/appointments', [ProfessionalController::class, 'ShowAppointment'])->name('appointments');
Route::post('/appointments/book', [AppointmentController::class, 'book'])->name('appointments.book');
Route::get('/UserAppointments', [AppointmentController::class, 'userAppointments'])->name('appointments.index');
Route::post('/appointments/{id}/confirm', [AppointmentController::class, 'confirm'])->name('appointments.confirm');
Route::post('/appointments/{id}/reschedule', [AppointmentController::class, 'requestReschedule'])->name('appointments.reschedule.email');


// Route::get('/professional/profile', [ProfessionalController::class, 'showProfile'])->name('professional.profile');
// Route::get('/professional/profile', [ProfessionalController::class, 'updateProfile'])->name('professional.profile.update');
// Route::post('/professional/profile', [ProfessionalController::class, 'updateProfile'])->name('professional.profile.update');
// Route::post('/professional/availability', [ProfessionalController::class, 'addAvailability'])->name('professional.availability.add');
// Route::delete('/professional/availability/{id}', [ProfessionalController::class, 'deleteAvailability'])->name('professional.availability.delete');

Route::get('/breathing/exercise', [GameController::class, 'index'])->name('game.breathing');
Route::get('/meditation', [GameController::class, 'level2'])->name('game.meditation');
Route::get('/memory/game', [GameController::class, 'level3'])->name('game.memory');


Route::get('/chatrooms/{room}', [ChatController::class, 'show'])->name('chatrooms.show');
Route::get('/messages/{room}', [ChatController::class, 'getMessages']);
Route::post('/messages/{room}', [ChatController::class, 'postMessage']);


// Route::post('/appointment/{id}/confirm', [AppointmentController::class, 'confirm'])->name('appointment.confirm');
// Route::post('/appointment/{id}/reschedule', [AppointmentController::class, 'reschedule'])->name('appointment.reschedule');


// Route::post('/appointments/{availability}', [AppointmentController::class, 'bookAppointment'])->name('appointments.book');
// Route::get('/appointments', [AppointmentController::class, 'viewAppointments'])->name('appointments.index');
// Route::delete('/appointments/{appointment}', [AppointmentController::class, 'cancelAppointment'])->name('appointments.cancel');



// Onboarding routes
// Route::get('/onboarding/step1', [OnboardingController::class, 'step1'])->name('onboarding.step1');
// Route::post('/onboarding/step1', [OnboardingController::class, 'postStep1'])->name('onboarding.postStep1');
// Route::get('/onboarding/step2', [OnboardingController::class, 'step2'])->name('onboarding.step2');
// Route::post('/onboarding/step2', [OnboardingController::class, 'postStep2'])->name('onboarding.postStep2');
// Route::get('/onboarding/step3', [OnboardingController::class, 'step3'])->name('onboarding.step3');
