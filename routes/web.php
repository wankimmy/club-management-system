<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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
     return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('club.index');

})->name('home');



Route::get('/vote', [Controllers\VoteController::class, 'index'])->name('index');
Route::post('/vote/store', [Controllers\VoteController::class, 'store'])->name('vote.store');
Route::post('/vote/voting', [Controllers\VoteController::class, 'voting'])->name('vote.voting');
Route::get('/vote/result/{id}', [Controllers\VoteController::class, 'result'])->name('vote.result');
Route::get('/vote/create', [Controllers\VoteController::class, 'create'])->name('vote.create');
Route::get('/vote/show/{id}', [Controllers\VoteController::class, 'show'])->name('vote.show');
Route::get('/vote/status/{id}/{status}', [Controllers\VoteController::class, 'status'])->name('vote.status');
Route::post('vote/update', [Controllers\VoteController::class, 'update']);
Route::delete('/vote/destroy/{id}', [Controllers\VoteController::class, 'destroy'])->name('vote.destroy');
Route::get('/vote/edit/{id}', [Controllers\VoteController::class, 'edit'])->name('vote.edit');

Route::get('/user', [Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/user/store', [Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/create', [Controllers\UserController::class, 'create'])->name('user.create');
Route::get('/user/show/{id}', [Controllers\UserController::class, 'show'])->name('user.show');
Route::post('user/update', [Controllers\UserController::class, 'update']);
Route::delete('/user/destroy/{id}', [Controllers\UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/edit/{id}', [Controllers\UserController::class, 'edit'])->name('user.edit');

Route::get('/proposal', [Controllers\ProposalController::class, 'index'])->name('index');
Route::post('/proposal/store', [Controllers\ProposalController::class, 'store'])->name('proposal.store');
Route::get('/proposal/create', [Controllers\ProposalController::class, 'create'])->name('proposal.create');
Route::get('/proposal/show/{id}', [Controllers\ProposalController::class, 'show'])->name('proposal.show');
Route::get('/proposal/status/{id}/{status}', [Controllers\ProposalController::class, 'status'])->name('proposal.status');
Route::post('proposal/update', [Controllers\ProposalController::class, 'update']);
Route::delete('/proposal/destroy/{id}', [Controllers\ProposalController::class, 'destroy'])->name('proposal.destroy');
Route::get('/proposal/edit/{id}', [Controllers\ProposalController::class, 'edit'])->name('proposal.edit');

Route::get('/club', [Controllers\ClubController::class, 'index'])->name('club');
Route::get('/club-activity', [Controllers\ClubActivityController::class, 'index'])->name('club-activity');
Route::post('/club/store', [Controllers\ClubController::class, 'store'])->name('club.store');
Route::post('club/update', [Controllers\ClubController::class, 'update']);
Route::delete('/club/destroy/{id}', [Controllers\ClubController::class, 'destroy'])->name('club.destroy');
Route::get('/club/edit/{id}', [Controllers\ClubController::class, 'edit'])->name('club.edit');

Route::get('/managementclub', [Controllers\ManagementClubController::class, 'index'])->name('managementclub');
Route::get('/management-activity', [Controllers\ManagementActivityController::class, 'index'])->name('management-activity');

Route::get('/adminclub', [Controllers\AdminClubController::class, 'index'])->name('adminclub');
Route::get('/admin-activity', [Controllers\AdminActivityController::class, 'index'])->name('admin-activity');

Route::get('/studentclub', [Controllers\StudentClubController::class, 'index'])->name('studentclub');
Route::get('/student-activity', [Controllers\StudentActivityController::class, 'index'])->name('student-activity');

Route::get('/club-dashboard', [Controllers\ClubDashboardController::class, 'index'])->name('club-dashboard');
Route::get('/management-dashboard', [Controllers\ManagementDashboardController::class, 'index'])->name('management-dashboard');
Route::get('/super-dashboard', [Controllers\SuperDashboardController::class, 'index'])->name('super-dashboard');
Route::get('/student-dashboard', [Controllers\StudentDashboardController::class, 'index'])->name('student-dashboard');

Route::post('/activity/store', [Controllers\ActivityController::class, 'store'])->name('activity.store');
Route::get('/activity/create', [Controllers\ActivityController::class, 'create'])->name('activity.create');
Route::get('/activity/show/{id}', [Controllers\ActivityController::class, 'show'])->name('activity.show');
Route::get('/activity/status/{id}/{status}', [Controllers\ActivityController::class, 'status'])->name('activity.status');
Route::post('activity/update', [Controllers\ActivityController::class, 'update']);
Route::delete('/activity/destroy/{id}', [Controllers\ActivityController::class, 'destroy'])->name('activity.destroy');
Route::get('/activity/edit/{id}', [Controllers\ActivityController::class, 'edit'])->name('activity.edit');