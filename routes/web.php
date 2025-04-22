<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect(route('home'));
});

// Temporary fix for unknown bug.
Route::get('/favicon.ico', function () {
    return redirect(route('home'));
});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::resource('/posts', "App\Http\Controllers\PostController")->names('posts');
    Route::get('/feeds', "App\Http\Controllers\PostController@followers")->name('feeds');
    Route::resource('/manage/users', "App\Http\Controllers\UserController")->except(['create', 'show', 'store'])->names('users');
    Route::get('/{username}', "App\Http\Controllers\ProfileController@show")->name('profile');



    Route::post('/volunteer', [App\Http\Controllers\InfoPageController::class, 'store'])->name('volunteer.store');


    Route::get('/pages/virtualAssistant', [App\Http\Controllers\InfoPageController::class, 'virtualAssistant'])->name('pages.virtualAssistant');
    Route::get('/pages/volunteer', [App\Http\Controllers\InfoPageController::class, 'volunteer'])->name('pages.volunteer');
    Route::get('/pages/careTips', [App\Http\Controllers\InfoPageController::class, 'careTips'])->name('pages.careTips');



    Route::get('/admin/assignments', 'App\Http\Controllers\AssignmentController@index')
        ->name('admin.assignments')
        ->middleware('can:viewAny,App\Models\User'); // Only accessible by admin

});
