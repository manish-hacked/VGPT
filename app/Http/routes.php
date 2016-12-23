<?php

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
Route::get('/api/v1', function () {
    return view('home');
});
//Leaderboard
Route::get('/api/v1/leaderboard', function () {
    return view('leaderboard');
});
//register
Route::get('/api/v1/student', function () {
    return view('user');
});
//Dpp
Route::group(['prefix'=>'api/v1/','middleware' => ['cors']],function(){
  Route::get('dpp/view', 'DppController@view')->middleware('cors');
  Route::post('dpp/batch', 'DppController@batch')->middleware('cors');
  Route::resource('dpp','DppController');
});
//Tests
Route::group(['prefix'=>'api/v1/','middleware' => ['cors']],function(){
  Route::resource('tests','TestsController');
});
//Test
Route::group(['prefix'=>'api/v1/','middleware' => ['cors']],function(){
  Route::get('test/view', 'TestController@view')->middleware('cors');
  Route::post('test/batch', 'TestController@batch')->middleware('cors');
  Route::resource('test','TestController');
});
//Exams
Route::group(['prefix'=>'api/v1/'],function(){
  Route::post('exams/entry','ExamController@entry')->middleware('cors');
});
//Users
Route::group(['prefix'=>'api/v1/','middleware' => ['cors']],function(){
  Route::get('users/view', 'UserController@view')->middleware('cors');
  Route::get('users/search', 'UserController@search')->middleware('cors');
  Route::post('users/insert', 'UserController@insert')->middleware('cors');
  Route::post('users/ranks', 'UserController@rank')->middleware('cors');
  Route::resource('users','UserController');
});
//RankBoard
Route::group(['prefix'=>'api/v1/','middleware' => ['cors']],function(){
  Route::get('ranks/today', 'RankController@today')->middleware('cors');
  Route::get('ranks/week', 'RankController@week')->middleware('cors');
  Route::get('ranks/month', 'RankController@month')->middleware('cors');
});
//Physics
Route::group(['middleware' => ['web']], function () {
    Route::get('/api/v1/data', 'PhysicsController@select')->middleware('cors');
    Route::post('/api/v1/data', 'PhysicsController@view')->middleware('cors');
});
//Physics Level 1
Route::group(['prefix'=>'api/v1/','middleware' => ['cors']],function(){
  Route::get('question/view','PhyQuestions1Controller@view')->middleware('cors');
  Route::post('question/update','PhyQuestions1Controller@updt')->middleware('cors');
  Route::resource('question','PhyQuestions1Controller');
});
Route::group(['prefix'=>'api/v1/','middleware' => ['cors']],function(){
  Route::get('video/view', 'PhyVideos1Controller@view')->middleware('cors');
  Route::resource('video','PhyVideos1Controller');
});
