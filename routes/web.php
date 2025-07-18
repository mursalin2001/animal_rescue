<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfoPageController;
use App\Http\Controllers\SnakeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect(route('home'));
});

// Temporary fix for favicon issue
Route::get('/favicon.ico', function () {
    return redirect(route('home'));
});

// Email Verification Routes (MUST be outside the auth group)
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home'); // Change to your post-verification landing page
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Protected Routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Dashboard
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // Post Routes
    Route::resource('/posts', PostController::class)->names('posts');
    Route::get('/feeds', [PostController::class, 'followers'])->name('feeds');
    Route::post('/posts/{id}/update-status', [AssignmentController::class, 'updateStatus'])->name('posts.updateStatus');
    Route::put('/posts/{id}/adoption', [AssignmentController::class, 'updateAdoption'])->name('update.adoption');
    Route::get('/posts/{id}/animal_profile', [InfoPageController::class, 'show'])->name('pages.animal_profile');

    // User Management (Admins)
    Route::resource('/manage/users', UserController::class)->except(['create', 'show', 'store'])->names('users');

    // Volunteer Form
    Route::post('/volunteer', [InfoPageController::class, 'store'])->name('volunteer.store');

    // Info Pages
    Route::get('/pages/virtualAssistant', [InfoPageController::class, 'virtualAssistant'])->name('pages.virtualAssistant');
    Route::get('/pages/volunteer', [InfoPageController::class, 'volunteer'])->name('pages.volunteer');
    Route::get('/pages/careTips', [InfoPageController::class, 'careTips'])->name('pages.careTips');
    Route::get('/pages/ongoing', [InfoPageController::class, 'ongoing'])->name('pages.ongoing');
    Route::get('/pages/complete', [InfoPageController::class, 'complete'])->name('pages.complete');

    // Snake Info Pages
    Route::get('/pages/snake-type-details', [SnakeController::class, 'showtype'])->name('pages.snakeTypeDetails');
    Route::get('/pages/snake-bite-treatment', [SnakeController::class, 'showtreatment'])->name('pages.snakebiteTreatment');
    Route::get('/pages/snake-bite-symptom', [SnakeController::class, 'showsymptom'])->name('pages.snakebiteSymptoms');
    Route::get('/pages/snake-importance', [SnakeController::class, 'showimportance'])->name('pages.importanceOfSnake');

    // Admin-only Assignments Page (Policy Protected)
    Route::get('/admin/assignments', [AssignmentController::class, 'index'])
        ->name('admin.assignments')
        ->middleware('can:viewAny,App\Models\User');

    // Catch-all for Profile Pages — keep last to avoid route conflicts!
    Route::get('/{username}', [ProfileController::class, 'show'])->name('profile');
});
