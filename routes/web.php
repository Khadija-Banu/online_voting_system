<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\VoterDetailController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// });
 
// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('github')->user();
 
//     // $user->token
// });

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/home',[VoteController::class,'home'])->name('home');
Route::get('/master', function () {
    return view('master');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// backend route

Route::get('/backend_dashboard',[VoteController::class,'dashboard'])->name('backend_dashboard');
Route::get('/user_list',[VoteController::class,'userIndex'])->name('user_list');
Route::get('/vote_list',[VoteController::class,'voteIndex'])->name('vote_list');
Route::get('/vote_create',[VoteController::class,'voteCreate'])->name('vote_create');
Route::post('/vote_store',[VoteController::class,'voteStore'])->name('vote_store');
Route::get('/vote_edit/{id}',[VoteController::class,'voteEdit'])->name('vote_edit');
Route::post('/vote_update/{id}',[VoteController::class,'voteUpdate'])->name('vote_update');
Route::get('/vote_delete/{id}',[VoteController::class,'voteDelete'])->name('vote_delete');
Route::post('/store',[VoterDetailController::class,'store'])->name('details_store');
Route::get('/voter_details',[VoterDetailController::class,'voterDetail'])->name('voter_details');
