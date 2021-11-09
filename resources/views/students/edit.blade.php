<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   
  @if(session()->has("success"))
  <br>
  <div class="alert alert-success">
    {{ session("success") }}
  </div>
  @endif
  <h2>Edit Students</h2>  
  <form action="{{route('student.save')}}" method="post">    
  @csrf
      <input type="hidden" name="id" value="{{$students->id}}">
<p>
      Name: <input type="text" value="{{ $students->name }}" name="name">
</p>
<p>
      Email: <input type="text" value="{{ $students->email }}" name="email">
</p>
<p>
      Number: <input type="text" value="{{ $students->number }}" name="number">
</p>
<p>
      gender 
      <select name="gender">
          <option value="male" @if($students->gender=="male") selected @endif>male</option>
          <option value="famale" @if($students->gender=="famale") selected @endif>famale</option>
          <option value="other" @if($students->gender=="other") selected @endif>other</option>
</select>
</p>
<p>
      <button type="submit">submit</button>
</p>
</div>
</form>

</body>
</html>
