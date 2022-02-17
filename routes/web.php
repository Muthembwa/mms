<?php

Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    Route::delete('school-levels/destroy', 'SchoolLevelController@massDestroy')->name('school-levels.massDestroy');
    Route::resource('school-levels', 'SchoolLevelController');
    Route::delete('schools/destroy', 'SchoolController@massDestroy')->name('schools.massDestroy');
    Route::resource('schools', 'SchoolController');
    Route::delete('darasas/destroy', 'DarasaController@massDestroy')->name('darasas.massDestroy');
    Route::resource('darasas', 'DarasaController');
    Route::delete('streams/destroy', 'StreamController@massDestroy')->name('streams.massDestroy');
    Route::resource('streams', 'StreamController');
    Route::delete('subjects/destroy', 'SubjectsController@massDestroy')->name('subjects.massDestroy');
    Route::resource('subjects', 'SubjectsController');
    Route::delete('students/destroy', 'StudentsController@massDestroy')->name('students.massDestroy');
    Route::resource('students', 'StudentsController');
    Route::delete('exams/destroy', 'ExamsController@massDestroy')->name('exams.massDestroy');
    Route::resource('exams', 'ExamsController'); 
    Route::delete('marks/destroy', 'MarksController@massDestroy')->name('marks.massDestroy');
    Route::resource('marks', 'MarksController');
    Route::delete('broad-sheets/destroy', 'BroadSheetController@massDestroy')->name('broad-sheets.massDestroy');
    Route::resource('broad-sheets', 'BroadSheetController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);
    Route::delete('stream-performances/destroy', 'StreamPerformanceController@massDestroy')->name('stream-performances.massDestroy');
    Route::resource('stream-performances', 'StreamPerformanceController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);
    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');
    Route::resource('teams', 'TeamController');
    Route::delete('results/destroy', 'ResultsController@massDestroy')->name('results.massDestroy');
    Route::resource('results', 'ResultsController');
});
