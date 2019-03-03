@extends('user.grademaster')
@section('title', 'HOME')
@section ('content')

<div class = "container">
    <div class = "row">
        <div class = " col-md-12">
            <br>
            <table class = "table table-bordered table-striped">
                <tr>
                    <th>First Name</th> <th> Last Name</th> <th> GPA</th>
                    <th>Edit</th> <th>Delete</th> <th>View Grade</th>
                </tr>
                @foreach($users as $row)
                <tr>
                <td>{{$row['Fname']}}</td> <td>{{$row['Lname']}}</td> <td>{{$row['GPA']}}</td>

                <td><a href="{{action('UserController@edit', $row['id'])}}" class="btn btn-primary"> Edit</a></td> 
                <td>
                    <form method="post" class="delete_form" action="{{action ('UserController@destroy', $row['id'] )}}">{{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                <form method="post" action = "{{action('GradeController@show', $row['id'])}}">
                <input type="hidden" name="_method" value="PUT">
                <button type="submit" class="btn btn-info">View</button>
                </form>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
<a href="{{route('user.create')}}" class="btn btn-success">Add User</a>
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