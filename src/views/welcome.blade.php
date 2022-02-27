<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

         label {
             display: block;
             border: none !important;
             z-index: 4000;
         }

         .answer-pane{
             margin-top: 33px !important;
         }
    </style>
</head>
<body class="antialiased">


<div class="container" style="margin-top: 5%;direction: rtl">
    <div class="row">
        <div class="col-md-12">
            @include('layouts.errors')
            <div class="panel panel-default">
                @if (isset($result['message']))
                    @component('component.alert',['class'=>$result['class']])
                        {{ $result['message'] }}
                    @endcomponent
                @endif
                <div class="panel-heading">ایجاد نظر سنجی:</div>
                <div class="panel-group">
                    <form action="{{route('send')}}" method="POST" class="form-control"
                          style="height: 700px; border: none" id="survey-form">
                        @csrf
                        <label>عنوان نظرسنجی: </label>
                        <input name="survey_title" id="survey_title" type="text" class="form-control input-group"/>
                        <input name="qnum" id="qnum" type="hidden" value=""/>
                        <input name="choicenum" id="choicenum" type="hidden" value=""/>
                        <label>سوال نظرسنجی:</label>
                        <div id="questions">
                        </div>

                        <label for="exampleColorInput" class="form-label">رنگ نوشته ها</label>
                        <input name="colorText" type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">


                        <label for="exampleColorInput" class="form-label">رنگ پس زمینه</label>
                        <input name="colorBackground" type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">


                        <label for="exampleColorInput" class="form-label">رنگ حاشیه</label>
                        <input name="colorBorder" type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">


                        <label for="exampleColorInput" class="form-label">رنگ عنوان</label>
                        <input name="colorTitle" type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">


                        <label for="exampleColorInput" class="form-label">رنگ پس زمینه عنوان</label>
                        <input name="colorBackgroundTitle" type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">


                        <label for="exampleColorInput" class="form-label">اندازه طول</label>
                        <input name="width" type="number"  max="1000" min="0" class="form-control form-control-color" title="اندازه طول">


                        <label for="exampleColorInput" class="form-label">اندازه ارتفاع</label>
                        <input name="height" type="number" max="1000" min="0" class="form-control form-control-color" title="اندازه ارتفاع">

                        <button class="btn btn-primary" type="button" style="display: block; margin-top: 5px;"
                                id="addq"><span class="glyphicon glyphicon-plus"></span>افزودن سوال
                        </button>
                        <button class="btn btn-success" type="submit" id="uploadsurvey" name="uploadsurvey"
                                style="display: none; margin-top: 10px">بارگذاری نظرسنجی
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script>
    $(document).ready(function() {
        var i = 0;
        var numOfQuestions = 0;
        var labelEl = $("<label>");
        var inputEl = $("<input>");
        // Handle the user clicking on "Add a question"
        $("#addq").click(function() {
            // Increment both counters,
            numOfQuestions++;
            i++;
            // a nested function creates the HTML DOM structure.
            addQuestion();
            // Handle the user choosing what type of question they want
            $(".choices").on("change", function() {
                var option = $(this).val();
                switch (option) {
                    case "radio":
                        showRadioOpts();
                        break;
                    // case "checkbox":
                    //     showCheckboxOpts();
                    //     break;
                    // case "text":
                    //     showTextOpts();
                    //     break;
                }
            })
            $('#addq').css('display','none');
        });

        /**
         * This handles the HTML DOM creation. I don't want to clog up
         *   the main routine with all the ugly, so I've moved it here.
         *   Purely cosmetic. The functioning is the same as the former
         *   append() functions with the element completely spelled out.
         **/
        function addQuestion() {

            var newQuestionEl = inputEl.clone().prop({
                "type": "text",
                "name": "q" + i,
                "id": "q" + i,
                "class": "form-control"
            });
            var newQuestion = labelEl.clone().prop({
                "for": "q" + i,
                "class": "form-control"
            }).append("Question: ", newQuestionEl);

            var newQTypeArr = [];
            var newQTypeRadioEl = inputEl.clone().prop({
                type: "radio",
                name: "qType" + i,
                id: "qType" + i,
                value: "radio",
                class: "choices radiobox"
            });
            newQTypeArr[0] = labelEl.clone().append(newQTypeRadioEl, " Radio");

            // var newQTypeCheckEl = inputEl.clone().prop({
            //     type: "radio",
            //     name: "qType" + i,
            //     id: "qType" + i,
            //     value: "checkbox",
            //     class: "choices radiobox"
            // });
            // newQTypeArr[1] = labelEl.clone().append(newQTypeCheckEl, "Checkbox");
            // var newQTypeTextEl = inputEl.clone().prop({
            //     type: "radio",
            //     name: "qType" + i,
            //     id: "qType" + i,
            //     value: "text",
            //     class: "choices radiobox"
            // });
            // newQTypeArr[2] = labelEl.clone().append(newQTypeTextEl, "Text");
            var answerOptionsEl = $("<div>").prop({
                class: "answer-options-pane"
            });
            var newAnsContainerEl = $("<div>").prop({
                class: "answer-pane"
            }).append(newQTypeArr, answerOptionsEl);
            var newQContainerEl = $("<div>").prop({
                id: "newq"
            }).append(newQuestion, newAnsContainerEl);

            $("#questions").append(newQContainerEl);
            $("#qnum").attr("value", numOfQuestions);
        }; //end addQuestion()

        // Toggle the radio answer options
        function showRadioOpts() {
            // First, hide all answer options. Then, add one radio option.
            $(".answer-options-pane").empty();
            addRadioOpts();

        }; // end showRadioOpts()

        // Toggle the checkbox answer options
        function showCheckboxOpts() {
            $(".answer-options-pane").empty();
        }; // end showCheckboxOpts()

        // Toggle the text box answer options
        function showTextOpts() {
            $(".answer-options-pane").empty();
            addTextOpts();
        }; // end showTextOpts()

        /***
         * Another DOM element creation function. This creates the radio
         *   button text option, and if it's the first, a button to add
         *   more options.
         ***/
        var countChoices=0
        function addRadioOpts() {
            countChoices++;

            // We want to get the length of the current choices,
            //  as this will give us an index for the new option

            var radioChoice = $(".radio-choice");
            var choice_c = radioChoice.length;
            var radioChoiceTextEl = inputEl.clone().prop({
                "type": "text",
                "class": "form-control answer-option radio-choice",
                "name": "radiochoice" + choice_c + "_q" + i,
                "id": "radiochoice" + choice_c + "_q" + i,
                "title": "q" + i
            });
            // If we don't have any radio elements yet, we will also
            //  want to create an "add more options" button.
            if (choice_c <= 0) {
                var addIconEl = $("<span>").prop({
                    "class": "glyphicon glyphicon-plus"
                });
                var addChoiceButton = $("<button>").prop({
                    "id": "radiobtn" + i,
                    "class": "btn btn-primary add-radio-choice answer-option"
                }).append(addIconEl, "افزودن گزینه جدید").on("click", function(evt) {
                    // Make sure you don't let that button do what buttons do...
                    evt.preventDefault();
                    addRadioOpts()
                });
                $(".answer-options-pane").append(addChoiceButton);
            }
            radioChoiceEl = labelEl.clone().append(radioChoiceTextEl);
            // Make sure to add the new text element BEFORE the
            //    add more button.
            $(".add-radio-choice").before(radioChoiceEl);
            if (countChoices===8){
                $('#radiobtn1').css('display','none');
            }
            if(countChoices > 1){
                $('#uploadsurvey').css('display','block');
            }
        };

        function addTextOpts(){
            var textChoiceTextEl = inputEl.clone().prop({
                "type": "text",
                "class": "form-control answer-option text-choice",
                "name": "radiochoice_q" + i,
                "id": "textchoice_q" + i,
                "title": "q" + i
            });
            textChoiceEl = labelEl.clone().append("Text: ", textChoiceTextEl);
            $(".answer-options-pane").append(textChoiceEl)
        }
    });
</script>

</body>
</html>
