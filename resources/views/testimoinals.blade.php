@extends('layouts.admin')



@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Testimoinal List</title>
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
        <th>Job</th>
        <th>Image</th>
        <th>Comment</th>
        <th>Published</th>
        <th>Edeit</th>
        <th>delete</th>
        <th>show</th>

      </tr>
    </thead>
    <tbody>
@foreach ( $testimoinals as $testimoinal)
      <tr>
        <td>{{ $testimoinal->name}}</td>
        <td>{{ $testimoinal->job }}</td>
        <td>{{ $testimoinal->image }}</td>
        <td>{{ $testimoinal->comment}}</td>

        <td>
            @if($testimoinal->published)
                Yes
            @else
                No
            @endif
        </td>

            <td><a href="edittestimoinal/{{ $testimoinal->id }}">Edit</a></td>
            <td><a href="updatetestimoinal/{{ $testimoinal->id }}">delete</a></td>
            <td><a href="/{{ $testimoinal->id }}">show</a></td>
      </tr>
@endforeach
    </tbody>
  </table>
</div>

</body>
</html>
@endsection
