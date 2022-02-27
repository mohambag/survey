<?php

use \Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function (){
    Route::get('/',[\Mbagri\Survey\SurveyControllerOld::class,'index'])->name('index')->middleware('auth');
    Route::post('/store',[\Mbagri\Survey\SurveyControllerOld::class,'store'])->name('send')->middleware('auth');
    Route::get('/survey{survey}',[\Mbagri\Survey\SurveyControllerOld::class,'survey'])->name('survey')->middleware('auth');
//    Route::get('/survey/{id}',[\Mbagri\Survey\SurveyControllerOld::class,'survey'])->middleware('auth');
    Route::post('/survey/submit/{id}',[\Mbagri\Survey\SurveyControllerOld::class,'submit'])->name('survey.submit')->middleware('auth');
    Route::post('/show/result/{id}',[\Mbagri\Survey\SurveyControllerOld::class,'showSurvey'])->name('show.result')->middleware('auth');
    Route::get('/show/result/{id}',[\Mbagri\Survey\SurveyControllerOld::class,'showSurvey'])->name('show.result')->middleware('auth');
    Route::get('/survey/list',[\Mbagri\Survey\SurveyControllerOld::class,'surveyList'])->name('survey.list')->middleware('auth');
    Route::get('/survey/delete/{survey}',[\Mbagri\Survey\SurveyControllerOld::class,'destroy'])->name('survey.destroy')->middleware('auth');
});

//Route::get('/test',function (){
//    return Survey::getSurvey();
//});
