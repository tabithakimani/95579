<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Admission</th>
        <th>Name</th>
        <th>Date</th>
        <th>Course name</th>
        <th>Gender</th>
        <th>Faculty</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($student as $student)
      @php
        $date=date('Y-m-d', $student['date']);
        @endphp
      <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['name']}}</td>
        <td>{{$date}}</td>
        <td>{{$student['admission']}}</td>
        <td>{{$student['faculty']}}</td>
        <td>{{$student['gender']}}</td>
        
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>