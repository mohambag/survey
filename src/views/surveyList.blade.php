<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="direction: rtl">

<div>
    <a class="btn btn-success" href="{{route('index')}}">افزودن نظر سنجی</a>
</div>
<table class="table table-striped table-dark" style="direction: rtl">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">عنوان</th>
        <th scope="col">سوال</th>
        <th scope="col">مشاهده</th>
        <th scope="col">مدیریت</th>
    </tr>
    </thead>

    <tbody>

    @foreach($survies as $survey)
        <tr>
            <th scope="row">{{$survey->id}}</th>
            <td>{{$survey->title}}</td>
            <td>{{$survey->question}}</td>
            <td>
                <a href="{{route('survey',$survey)}}">مشاهده</a>
            </td>
            <td>
                <a href="{{route('survey.destroy',$survey)}}">حذف</a>
            </td>
        </tr>
    </tbody>
        @endforeach

</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
