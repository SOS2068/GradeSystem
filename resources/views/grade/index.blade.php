@extends('grade.grademaster')
@section('title', 'Grade Page')
@section ('content')

<div class = "container">
    <div class = "row">
        <div class = " col-md-12">
            <br>
            <table class = "table table-bordered table-striped">
                <tr>
                    <th>Subject</th> <th> Grade</th> <th> Credit</th>
                    <th>Edit</th> <th>Delete</th>
                </tr>
                @foreach($grades as $row)
                <tr>
                <td>{{$row['subject']}}</td> <td>{{$row['grade']}}</td> <td>{{$row['credit']}}</td>

                <td><a href="{{action('GradeController@edit', $row['id'])}}" class="btn btn-primary"> Edit</a></td> 
                <td>
                    <form method="post" class="delete_form" action="{{action ('GradeController@destroy', $row['id'] )}}">{{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<a href="{{route('grade.create')}}" class="btn btn-success">Add grade</a>
<script>
$(document).ready(function(){
    $('.delete_form').on('submit',function(){
        if(confirm(" Sure?")){
            return true;
        }
        else{
            return false;
        }
    });
});
</script>
@endsection