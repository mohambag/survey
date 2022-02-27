<?php

use \Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function (){
    Route::get('/',[\Mbagri\Survey\SurveyController::class,'index'])->name('index')->middleware('auth');
    Route::post('/store',[\Mbagri\Survey\SurveyController::class,'store'])->name('send')->middleware('auth');
    Route::get('/survey{survey}',[\Mbagri\Survey\SurveyController::class,'survey'])->name('survey')->middleware('auth');
//    Route::get('/survey/{id}',[\Mbagri\Survey\SurveyController::class,'survey'])->middleware('auth');
    Route::post('/survey/submit/{id}',[\Mbagri\Survey\SurveyController::class,'submit'])->name('survey.submit')->middleware('auth');
    Route::post('/show/result/{id}',[\Mbagri\Survey\SurveyController::class,'showSurvey'])->name('show.result')->middleware('auth');
    Route::get('/show/result/{id}',[\Mbagri\Survey\SurveyController::class,'showSurvey'])->name('show.result')->middleware('auth');
    Route::get('/survey/list',[\Mbagri\Survey\SurveyController::class,'surveyList'])->name('survey.list')->middleware('auth');
    Route::get('/survey/delete/{survey}',[\Mbagri\Survey\SurveyController::class,'destroy'])->name('survey.destroy')->middleware('auth');
});

//Route::get('/test',function (){
//    return Survey::getSurvey();
//});
