<!DOCTYPE html>
<html lang="en">
<head>
  <title> Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
<body>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
​
<div class="container">
  <h2>Post form</h2>
  <form action="{{ url('posts') }}" method="POST"> 
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title " name="title" value="{{old('title')}}">
    </div>
​
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class = "form-control" id = "description" name="description">{{old('description')}}</textarea>
     
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
​
</div>
​
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>




