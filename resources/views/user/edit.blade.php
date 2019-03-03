@extends('user.grademaster')
@section('title', 'Edit')
@section ('content')
<div class = "container">
<div class="row">
    <div class="col-md-12"> <br />
        <h3 align = "center"> Edit User </h3> <br />

        @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
             <li>{{$errors}}</li>
            </ul>
            </div>
        @endif

        <form method = "post" action = "{{action('UserController@update', $id)}}"> 
        {{csrf_field()}} 
        <div class="form-group">
            <input type = "text" name ="Fname" class="form-control" placeholder = "First Name" value = "{{$user -> Fname}}">
        </div>
        <div class="form-group">
            <input type = "text" name ="Lname" class="form-control" placeholder = "Last Name" value = "{{$user -> Lname}}">
        </div>
        <div class="form-group">
            <input type = "float" name ="GPA" class="form-control" placeholder = "Your GPA" value = "{{$user -> GPA}}">
        </div>
        <br />
        <div class = "form-group">
         <input type="submit" class="btn btn-primary" value = "Update" />
        </div>
        <input type="hidden" name="_method" value="PATCH">
        </form>
    </div>
</div>
</div>
@endsection