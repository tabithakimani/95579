<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
</head>
<body>
                

<center>
<br><br>
<a href='{{ url('/student') }}'><button>Register a student</button></a><br><br>
<a href='{{ url('/fees') }}'><button>Record new fees payment</button></a><br><br>
<a href='{{ url('/search') }}'><button>View a record</button></a><br><br>
<a href='{{ url('/allstudents') }}'><button>View all students</button></a><br><br>

</center>

</body>
</html>