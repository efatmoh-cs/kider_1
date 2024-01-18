@extends('layouts.admin')



@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>List</h2>

  <p>The .table-hover class enables a hover state on table rows:</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Job_Title</th>
        <th>Image</th>
        <th>Is_popular</th>
        <th>Edeit</th>
        <th>delete</th>
        <th>show</th>

      </tr>
    </thead>
    <tbody>
@foreach ( $teachers as $teacher)
      <tr>
        <td>{{ $teacher->name}}</td>
        <td>{{ $teacher->job_title }}</td>
        <td>{{ $teacher->image }}</td>


        <td>
            @if($teacher->is_popular)
                Yes
            @else
                No
            @endif
        </td>

            <td><a href="editteacher/{{ $teacher->id }}">Edit</a></td>
            <td><a href="destroyteacher/{{ $teacher->id }}">delete</a></td>
            <td><a href="showteacher/{{ $teacher->id }}">show</a></td>
      </tr>
@endforeach
    </tbody>
  </table>
  <br>
  <div >
      <a class="btn btn-primary" href="{{route('createteacher')}}">Add new Teacher!!</a>

    

  </div>

</div>

</body>
</html>
@endsection
