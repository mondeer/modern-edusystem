<?php

Route::get('/', function(){
  return view('welcome');
});

Route::get('/edusystem/admin', function(){
  return view('admin.dashboard');
});

// students access free content
Route::get('/enroll/new', function(){
  return view('students.enroll');
});

Route::post('/hire/imond', 'HireCtrl@hire');

Route::get('/newblog', 'BlogCtrl@create');

Route::post('/newblog', 'BlogCtrl@postCreate');

Route::get('/edusystem/components', 'BlogCtrl@show');

Route::get('/viewblog/{id}', array('as'=>'viewblog', 'uses'=>'BlogCtrl@showblog'));

// topical Questions
Route::get('/topical-quiz/create', 'GoogledocCtrl@create');

Route::post('/topical-quiz/create', 'GoogledocCtrl@postCreate');

Route::get('/topical-quiz/view', 'GoogledocCtrl@show');

Route::get('/topical-quiz/{id}', array('as'=>'topical', 'uses'=>'GoogledocCtrl@showblog'));

// end of topical questions

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/imondwork', function(){
  return view('work');
});

Route::get('/imondcontact', function(){
  return view('imondcontact');
});

Route::get('imond/sms', 'SmsCtrl@sms_init');

Route::post('imond/sms', 'SmsCtrl@imondSend');


Route::get('imond/contact', 'ContactCtrl@index');

Route::post('imond/contact', 'ContactCtrl@saveContact');

Route::get('/wiki', 'WikiCtrl@wikiGrab');
