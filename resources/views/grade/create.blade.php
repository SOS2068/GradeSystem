@extends('grade.grademaster')
@section('title', 'Database')
@section ('content')
<div class = "container">
<div class="row">
    <div class="col-md-12"> <br />
        <h3 align = "center"> Add Grade </h3> <br />

        @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
             <li>{{$errors}}</li>
            </ul>
            </div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
        <p> {{\ Session::get('success')}}</p>
        </div>
        @endif

        <form method = "post" action = "{{url('grade')}}"> 
        {{csrf_field()}} 
        <div class="form-group">
            <input type = "text" name ="subject" class="form-control" placeholder = "Subject">
        </div>
        <div class="form-group">
            <input type = "text" name ="grade" class="form-control" placeholder = "Grade">
        </div>
        <div class="form-group">
            <input type = "float" name ="credit" class="form-control" placeholder = "Credit">
        </div>
        <br />
        <div class = "form-group">
         <input type="submit" class="btn btn-primary" value = "SAVE" />
        </div>
        </form>
    </div>
</div>
</div>
@endsection