<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


// CRUD Users Routes
Route::get('/delete/{id}','UserOperationController@destroy');
Route::get('/addUser','UserOperationController@index');
Route::get('/userList','UserOperationController@userList')->name('userList');
Route::get('/blockList','UserOperationController@blockList')->name('blockList');
Route::get('/blockUser/{id}','UserOperationController@show');
Route::get('/unBlockUser/{id}','UserOperationController@unBlock');
Route::post('/updateUserStatus/{id}', 'UserOperationController@edit')->name('updateUserStatus/{id}');
Route::get('profile', 'UserProfileController@profile')->name('profile');
Route::post('updateNameUser', 'UserProfileController@updateNameUser')->name('updateNameUser');
Route::post('updateUserImage', 'UserProfileController@updateUserImage')->name('updateUserImage');
Route::post('updateUserPass', 'UserProfileController@updateUserPass')->name('updateUserPass');



// departement category Routes
Route::get('/departement', 'DepartementController@index')->name('departement');
Route::post('/addDepartement', 'DepartementController@store')->name('addDepartement');
Route::get('/deleteDepartement/{id}','DepartementController@destroy')->name('deleteDepartement/{id}');
Route::get('/editDepartement/{id}','DepartementController@show')->name('editDepartement/{id}');
Route::post('/editDepartement/{id}','DepartementController@edit')->name('editDepartement/{id}');


// Report category Routes
Route::get('/newReport', 'ReportController@index')->name('newReport');
Route::post('/addReport', 'ReportController@store')->name('addReport');
Route::get('/newReports', 'ReportController@newReports')->name('newReports');
Route::get('/confirmedReports', 'ReportController@confirmedReports')->name('confirmedReports');
Route::get('/pendingReports', 'ReportController@pendingReports')->name('pendingReports');
Route::post('/confirme/{id}', 'ReportController@confirme')->name('confirme/{id}');
Route::get('/approvedReports', 'ReportController@approvedReports')->name('approvedReports');
Route::get('/rejectedReports', 'ReportController@rejectedReports')->name('rejectedReports');
Route::get('/showDetails/{id}','ReportController@showDetails')->name('showDetails/{id}');
Route::get('/deleteReport/{id}','ReportController@destroy')->name('deleteReport/{id}');
Route::get('/editReport/{id}','ReportController@show')->name('editReport/{id}');
Route::post('/updateReport/{id}','ReportController@edit')->name('updateReport/{id}');
