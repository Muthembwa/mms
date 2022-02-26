<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    Route::apiResource('permissions', 'PermissionsApiController');
    Route::apiResource('roles', 'RolesApiController');
    Route::apiResource('users', 'UsersApiController');
    Route::apiResource('school-levels', 'SchoolLevelApiController');
    Route::apiResource('schools', 'SchoolApiController');
    Route::apiResource('darasas', 'DarasaApiController');
    Route::apiResource('streams', 'StreamApiController');
    Route::apiResource('subjects', 'SubjectsApiController');
    Route::apiResource('students', 'StudentsApiController');
    Route::apiResource('studentsubjects', 'StudentsubjectsApiController');
    Route::apiResource('exams', 'ExamsApiController');
    Route::apiResource('marks', 'MarksApiController');
    Route::apiResource('teams', 'TeamApiController');
    Route::apiResource('results', 'ResultsApiController');
});
