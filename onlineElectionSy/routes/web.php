<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::group(['prefix'=>'admin'], function(){

	 Route::get('/', 'AdminController@index')->name('admin.home');
	 Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
	 Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
	 Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
	 Route::get('/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	 Route::post('/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	 Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
     Route::post('password/reset', 'Admin\ResetPasswordController@reset');
     Route::get('/newElection', 'Admin\NewElectionController@addNewElection')->name('admin.newElection');
     Route::post('/newElection', 'Admin\NewElectionController@addCandidates');

     Route::post('/addCandidateDetails', 'Admin\AddCandidateController@cadidateDetails')->name('admin.addCandidateDetails');
     Route::get('/viewElection', 'Admin\ViewElectionController@view')->name('admin.viewElection');
     Route::post('/viewElection', 'Admin\ViewElectionController@viewCandidates');

     Route::get('/endElection', 'Admin\endElectionController@endElectionForm')->name('admin.endElection');
     Route::post('/endElection', 'Admin\endElectionController@endElection');
     Route::get('/voteCount', 'Admin\VoteCount@voteForm')->name('admin.voteCount');
    Route::post('/voteCount', 'Admin\VoteCount@count');
});

Route::group(['prefix'=>'user'], function(){
    Route::get('/vote', 'User\VoteController@votingForm')->name('user.vote');
    Route::post('/vote', 'User\VoteController@votingCandidate');
    Route::post('/pressVote', 'User\VoteController@vote')->name('user.pressVote');
    Route::get('/voteCount', 'User\VoteCount@voteForm')->name('user.voteCount');
    Route::post('/voteCount', 'User\VoteCount@count');
});

