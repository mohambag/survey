@if($errors->any())
    <div class="form-row">
    <div class="alert alert-danger" >
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    </div>
@endif


@if(Session('success'))
    <div class="form-row">
    <div class="alert alert-success">
        {{Session('success')}}
    </div>
    </div>
@endif


@if(Session('warning'))
    <div class="form-row">
    <div class="alert alert-danger">
        {{Session('warning')}}
    </div>
    </div>
@endif
