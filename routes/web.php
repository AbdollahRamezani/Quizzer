<?php



Route::get('/' , 'HomeController@Index');
Route::get('/question/{id}' , 'QuestionController@question');
Route::post('/check' , 'QuestionController@check');

Route::get('/final' , 'HomeController@final');
Route::get('/login' , 'HomeController@login');
Route::post('/login_check' , 'HomeController@login_check');
Route::get('/insert' , 'HomeController@insert');
Route::post('/add' , 'Questioncontroller@add');

