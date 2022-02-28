<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{__DIR__.'bootstrap.min.css'}}">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"--}}
{{--          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
</head>
<body dir="rtl">
<style>

    input{
        float: right !important;
        margin-left: 0 !important;
    }

    label{
        margin-right: 5px;
    }
    #main-tag {
    @if($survey->width !=null)
        width: {{$survey->width}}px !important;
        height: {{$survey->height}}px !important;
       @else
        width:100% !important;
        min-height: 100% !important;
        z-index: 20;
    @endif
     }
    .card-header,.card-title,.button-btn{
        text-align: center !important;
    }
</style>

<div class="card" id="main-tag" style="overflow: hidden;float:right;border-color: {{$survey->colorBackgroundTitle}}">
    <h5 class="card-header"
        style="color: {{$survey->colorTitle}} ;background-color: {{$survey->colorBackgroundTitle}}">  {{$survey->title}}</h5>
    <div class="card-body" style="background-color: {{$survey->colorBackground}}">
        <h5 class="card-title" >  {{$survey->question}}</h5>
        <form action="{{route('survey.submit',$survey->id)}}" method="POST" class="form-control"
              style="height: 700px;background-color: {{$survey->colorBackground}}; border: none" id="survey-form">


            @csrf
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ans" value="ans0" id="flexRadioDefault1">
                <label style="color: {{$survey->colorText}}" class="form-check-label" for="flexRadioDefault1">
                    {{$survey->ans0}}
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ans" value="ans1" id="flexRadioDefault2" checked>
                <label style="color: {{$survey->colorText}}" class="form-check-label" for="flexRadioDefault2">
                    {{$survey->ans1}}
                </label>
            </div>

            @if($survey->ans2 != null)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ans" value="ans2" id="flexRadioDefault3" checked>
                    <label style="color: {{$survey->colorText}}" class="form-check-label" for="flexRadioDefault3">
                        {{$survey->ans2}}
                    </label>
                </div>
                @if($survey->ans3 != null)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ans" value="ans3" id="flexRadioDefault4"
                               checked>
                        <label style="color: {{$survey->colorText}}" class="form-check-label" for="flexRadioDefault4">
                            {{$survey->ans3}}
                        </label>
                    </div>

                    @if($survey->ans4 != null)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ans" value="ans4" id="flexRadioDefault5"
                                   checked>
                            <label style="color: {{$survey->colorText}}" class="form-check-label"
                                   for="flexRadioDefault5">
                                {{$survey->ans4}}
                            </label>
                        </div>

                        @if($survey->ans5 != null)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ans" value="ans5"
                                       id="flexRadioDefault6" checked>
                                <label style="color: {{$survey->colorText}}" class="form-check-label"
                                       for="flexRadioDefault6">
                                    {{$survey->ans5}}
                                </label>
                            </div>


                            @if($survey->ans6 != null)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans" value="ans6"
                                           id="flexRadioDefault7" checked>
                                    <label style="color: {{$survey->colorText}}" class="form-check-label"
                                           for="flexRadioDefault7">
                                        {{$survey->ans6}}
                                    </label>
                                </div>


                                @if($survey->ans7 != null)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ans" value="ans0" 7
                                               id="flexRadioDefault8" checked>
                                        <label style="color: {{$survey->colorText}}" class="form-check-label"
                                               for="flexRadioDefault8">
                                            {{$survey->ans7}}
                                        </label>
                                    </div>

                                @endif
                            @endif
                        @endif
                    @endif
                @endif
            @endif
            <div class="form-group button-btn">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('show.result',$survey->id)}}" class="btn btn-primary">Result</a>
            </div>
        </form>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
