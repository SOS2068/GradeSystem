@extends('user.grademaster')
@section('title', 'Database')
@section ('content')
<div class = "container">
<div class="row">
    <div class="col-md-12"> <br />
        <h3 align = "center"> Add User </h3> <br />

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

        <form method = "post" action = "{{url('user')}}"> 
        {{csrf_field()}} 
        <div class="form-group">
            <input type = "text" name ="Fname" class="form-control" placeholder = "First Name">
        </div>
        <div class="form-group">
            <input type = "text" name ="Lname" class="form-control" placeholder = "Last Name">
        </div>
        <div class="form-group">
            <input type = "float" name ="GPA" class="form-control" placeholder = "Your GPA">
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