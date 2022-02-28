<?php

use \Illuminate\Support\Facades\Route;

Route::prefix('/')->middleware(['web','auth'])->group(function (){
    Route::get('/',[\Mbagri\Survey\Controllers\SurveyController::class,'index'])->name('index');
    Route::post('/store',[\Mbagri\Survey\Controllers\SurveyController::class,'store'])->name('send');
    Route::get('/survey{survey}',[\Mbagri\Survey\Controllers\SurveyController::class,'survey'])->name('survey');
//    Route::get('/survey/{id}',[\Mbagri\Survey\Controllers\SurveyController::class,'survey']);
    Route::post('/survey/submit/{id}',[\Mbagri\Survey\Controllers\SurveyController::class,'submit'])->name('survey.submit');
    Route::post('/show/result/{id}',[\Mbagri\Survey\Controllers\SurveyController::class,'showSurvey'])->name('show.result');
    Route::get('/show/result/{id}',[\Mbagri\Survey\Controllers\SurveyController::class,'showSurvey'])->name('show.result');
    Route::get('/survey/list',[\Mbagri\Survey\Controllers\SurveyController::class,'surveyList'])->name('survey.list');
    Route::get('/survey/delete/{survey}',[\Mbagri\Survey\Controllers\SurveyController::class,'destroy'])->name('survey.destroy');
});

//Route::get('/test',function (){
//    return Survey::getSurvey();
//});
