@extends('layouts.admin')



@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Testimoinal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Car</h2>
  <form action= "{{ route('updateteacher', $teacher->id)}}"  method="post"   enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$teacher->name}}">
    </div>
    <div class="form-group">
        <label for="title">Job_Title:</label>
        <input type="text" class="form-control" id="job_title" placeholder="Enter job_title" name="job_title" value="{{$teacher->job_title}}">
      </div>

    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
        <img src="{{ asset('assets/images/'.$teacher->image) }}" alt="cars" style="width:150px;">
        @error('image')
            {{ $message }}
        @enderror

    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="is_popular" @checked($teacher->is_popular)> Is_popular</label>
    </div>
    <button type="submit" class="btn btn-default">update</button>
  </form>
</div>

</body>
</html>
@endsection
