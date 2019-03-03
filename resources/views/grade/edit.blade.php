@extends('grade.grademaster')
@section('title', 'Edit')
@section ('content')
<div class = "container">
<div class="row">
    <div class="col-md-12"> <br />
        <h3 align = "center"> Edit Grade </h3> <br />

        @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
             <li>{{$errors}}</li>
            </ul>
            </div>
        @endif

        <form method = "post" action = "{{action('GradeController@update', $id)}}"> 
        {{csrf_field()}} 
        <div class="form-group">
            <input type = "text" name ="subject" class="form-control" placeholder = "Subject" value = "{{$grade -> subject}}">
        </div>
        <div class="form-group">
            <input type = "text" name ="grade" class="form-control" placeholder = "Grade" value = "{{$grade -> grade}}">
        </div>
        <div class="form-group">
            <input type = "float" name ="credit" class="form-control" placeholder = "Credit" value = "{{$grade -> credit}}">
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