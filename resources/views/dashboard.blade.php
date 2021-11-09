
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <style>
 * {
  box-sizing: border-box;
}

input[type=text],[type=email],[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
            
<div class="container">
<link rel="stylesheet" href="">

<form action="{{route('student.add')}}" method="post">
  <br>
  @csrf
  <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="email" name="email" placeholder="Your Email..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Number</label>
      </div>
      <div class="col-75">
        <input type="number" name="number" placeholder="Write Number">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Gender</label>
      </div>
      <div class="col-75">
        <select name="gender">
          <option value="male">Male</option>
          <option value="famale">Famale</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <input type="submit" value="Submit">
</div>
</form>
</div>

<br>
  @if(session()->has("success"))
  <div class="alert alert-success">
    {{ session("success") }}
  </div>
  @endif

  <div class="container">
  <h2>Students List</h2>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>gender</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
       @foreach($students as $student)
       <tr>
           <td>{{ $student->id }} </td>
           <td>{{ $student->name }} </td>
           <td>{{ $student->email }} </td>
           <td>{{ $student->number }} </td>
           <td>{{ ucfirst($student->gender) }} </td>
           <td><a href="{{route('student.update', $student->id)}}" class="btn btn-info">Edit</a> <a href="{{route('student.delete', $student->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
