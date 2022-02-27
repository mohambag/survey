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


<div class="card text-center">
    <div class="card-header">
        {{$result['survey']->title}}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$result['survey']->question}}</h5>
        <div class="card-text">

            <div class="progress">
                <label>{{$result['survey']->ans0}}:</label>
                <div class="progress-bar progress-bar-striped" role="progressbar"
                     style="width: {{$result['percent0']}}%"
                     aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                <label>{{$result['percent0']}}%</label>
            </div>
            <div class="progress">
                <label>{{$result['survey']->ans1}}:</label>
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                     style="width: {{$result['percent1']}}%"
                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                <label>{{$result['percent1']}}%</label>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                     style="width: {{$result['percent2']}}%"
                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                <label>{{$result['percent2']}}%</label>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                     style="width: {{$result['percent3']}}%"
                     aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                <label>{{$result['percent3']}}%</label>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                     style="width: {{$result['percent4']}}%"
                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                <label>{{$result['percent4']}}%</label>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                     style="width: {{$result['percent5']}}%"
                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                <label>{{$result['percent5']}}%</label>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                     style="width: {{$result['percent6']}}%"
                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                <label>{{$result['percent6']}}%</label>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                     style="width: {{$result['percent7']}}%"
                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                <label>{{$result['percent7']}}%</label>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted">
        تعداد شرکت کنندگان : {{$result['total']}}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
