<?php $total = 0; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta charset="utf-8">
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
        @if(isset($all))
        <table>
            <thead>
                <tr>
                    
                    <th>Admission </th>
                    <th>Amount</th>
                    <th>Name</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($all as $students)
                <tr>
                    <td>{{$students->admission}}</td>
                    <td>{{$students->feespaid}}</td>
                    <td>{{$students->name}}</td>
                    

                </tr>

                <?php $total +=$students->feespaid; ?>
                @endforeach 
            </tbody>    
        </table>
        @endif
    </div><br><br>
    <p>The total amount paid is</p>
    <?php echo $total; ?>
</body>
</html>