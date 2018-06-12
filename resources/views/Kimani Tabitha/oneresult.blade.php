<?php $total = 0; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div>
        @if(isset($details)) 
        <table>
            <thead>
                <tr>
                    <th>Admission</th>
                    <th>Name</th>
                    <th>Amount</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($details as $oneresult)
                <tr>
                    <td>{{$oneresult->admission}}</td>
                    <td>{{$oneresult->name}}</td>
                    <td>{{$oneresult->feespaid}}</td>
                    
                    
                </tr>
                <?php $total +=$oneresult->feespaid; ?>
                @endforeach
            </tbody>
        </table><br><br>
        <p>The total amount paid is</p>
     @endif
     <?php echo $total; ?>
    </div>
</body>
</html>