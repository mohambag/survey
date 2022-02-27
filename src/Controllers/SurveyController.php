<?php

namespace Mbagri\Survey\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSurveyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mbagri\Survey\Score;
use Mbagri\Survey\Survey;
use Mockery\Exception;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreSurveyRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSurveyRequest $request)
    {

        $survey = new Survey();

        $survey->question = $request->q1;
        $survey->title = $request->survey_title;
        $survey->ans0 = $request->radiochoice0_q1;
        $survey->ans1 = $request->radiochoice1_q1;
        $survey->ans2 = $request->radiochoice2_q1;
        $survey->ans3 = $request->radiochoice3_q1;
        $survey->ans4 = $request->radiochoice4_q1;
        $survey->ans5 = $request->radiochoice5_q1;
        $survey->ans6 = $request->radiochoice6_q1;
        $survey->ans7 = $request->radiochoice7_q1;
        $survey->type = $request->qType1;
        $survey->width = $request->width;
        $survey->height = $request->height;
        $survey->colorText = $request->colorText;
        $survey->colorBackground = $request->colorBackground;
        $survey->colorBorder = $request->colorBorder;
        $survey->colorTitle = $request->colorTitle;
        $survey->colorBackgroundTitle = $request->colorBackgroundTitle;
        $survey->user_id = Auth::id();
        try {
            $survey->save();
        } catch (Exception $exception) {

        }
        return redirect()->back()->with('success', 'نظر سنجی با موفقیت ثبت شد');
    }


    public function survey(Survey $survey)
    {
        $id=$survey->id;
        $check= Score::where('survey_id',$survey->id)->where('user_id',Auth::id())->first();
        if (isset($check)){
            return redirect()->route('show.result',compact('id'));
        }else{
            return view('survey', compact('survey'));
        }

    }


    public function submit(Request $request, $surveyId)
    {
        $score = new Score();
        $score->score = $request->ans;
        $score->user_id = Auth::id();
        $score->survey_id = $surveyId;
        try {
            $score->save();
        } catch (Exception $exception) {
            return redirect()->back();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Survey $survey
     * @return \Illuminate\Http\Response
     */
    public function showSurvey($id)
    {
//      $survey=Survey::where('survey_id',$survey->id)->all();
        $ans0 = Score::where('score', 'ans0')->where('survey_id',$id)->count();
        $ans1 = Score::where('score', 'ans1')->where('survey_id',$id)->count();
        $ans2 = Score::where('score', 'ans2')->where('survey_id',$id)->count();
        $ans3 = Score::where('score', 'ans3')->where('survey_id',$id)->count();
        $ans4 = Score::where('score', 'ans4')->where('survey_id',$id)->count();
        $ans5 = Score::where('score', 'ans5')->where('survey_id',$id)->count();
        $ans6 = Score::where('score', 'ans6')->where('survey_id',$id)->count();
        $ans7 = Score::where('score', 'ans7')->where('survey_id',$id)->count();
        $total = Score::count();
        $percent0 = $ans0 / $total * 100;
        $percent1 = $ans1 / $total * 100;
        $percent2 = $ans2 / $total * 100;
        $percent3 = $ans3 / $total * 100;
        $percent4 = $ans4 / $total * 100;
        $percent5 = $ans5 / $total * 100;
        $percent6 = $ans6 / $total * 100;
        $percent7 = $ans7 / $total * 100;

        $result=[
            'percent0'=>$percent0,
            'percent1'=>$percent1,
            'percent2'=>$percent2,
            'percent3'=>$percent3,
            'percent4'=>$percent4,
            'percent5'=>$percent5,
            'percent6'=>$percent6,
            'percent7'=>$percent7,
            'total'=>$total,
            'survey'=>Survey::where('id',$id)->first(),
        ];

        return view( 'result',compact('result'));

    }


    public function surveyList()
    {
        $survies=Survey::orderBy('id','desc')->get();
        return view('surveyList',compact('survies'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Survey $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        $survey->delete();
        return redirect()->back();
    }
}
