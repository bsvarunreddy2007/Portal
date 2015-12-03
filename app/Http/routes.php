<?php
use App\Question;
use App\Answer;
use App\User;
use App\Vote;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/Register', 'RegisterController@create');
Route::post('/Register', 'RegisterController@store');
Route::get('/index', 'RegisterController@index');
Route::get('/Login', 'LoginController@create');
Route::post('/Login', 'LoginController@store');
Route::group(['middleware' => 'auth'], function () {
Route::get('/Userhome', 'UserhomeController@create');
Route::get('/Question', 'QuestionController@create');
Route::post('/Question', 'QuestionController@store');
Route::get('/List', function(){

    $title = Question::all();
    return view('List', ['title'=>$title]);

});
Route::get('Answer/{id}/{question}', function ($id,$question)
{
	$user1 = User::all();
	$answer1 = Answer::all();
	$question1 = Question::all();
	$vote2 = Vote::all();
	return view('/Answer', ['question1'=>$question1,'answer1'=>$answer1, 'id'=>$id, 'user1'=>$user1, 'vote2'=>$vote2]);

});
Route::post('Answer/{id}/{question}', 'AnswerController@store');
Route::get('Vote/{aid}/{vote1}','VoteController@store');

Route::get('/Logout','LogoutController@create');
});
Route::get('auth/login', function()
{
	Cache::flush();
	Session::flush();
	return view('/Login');
});
Route::post('auth/login', 'LoginController@store');
