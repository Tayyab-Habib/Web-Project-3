@extends('layouts.navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Guest</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>

    .box{
        border:1px solid black;
        display:flex;
        flex-direction:column;
        width:38%;
        margin: 1% auto;
        justify-content:center;
        align-items:center;
        background-color:white;
        color:black;
        border-radius:12px;
        overflow:hidden;
    }
    .inp{
        width:100%;
    }
    .content{
        width:80%;
    }
    .form_header{
        background-color:#ff5621;
        width:100%;
        text-align:center;
        margin-bottom:1%;
    }
    .table{
        color:white;
        width:70%;
        margin: auto;
        background-color:#424141;
        opacity:0.9;
        text-align:center;
    }
    .table tr{
        height:35px;
        font-size:1.1rem;
    }
    .header{
        background-color: #ff5621;
    }
    @media (max-width: 1050px){
        .form_header h1{
            font-size:1.3rem;
        }
        .box{
            width:80%;
        }        
        table {
            border-collapse: collapse;
            border:white;
        }
        .table tr{
            font-size:0.9rem;
        }
        .table td{
            border: 1px solid white;
        }
        .table{
            opacity: 1;
        }
}
.error{
    color:red;
    font-size:0.9rem;
}
</style>
<body>
    @section('content')
    <h1 style="text-align:center;color:white;">GUEST DETAILS</h1>
    <div class="table" style="overflow-x:auto;">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
			<tr class="header">
				<td>First Name</td>
                <td>Last Name</td>
				<td>Email</td>
                <td>Age</td>
                <td>Gender</td>
				<td>RoomNo</td>
                <td>Days</td>
			</tr>
			<?php 
			 foreach ($guestData as $rData) {
                print "<tr>";
                    print "<td>" .$rData->FName. "</td>";
                    print "<td>" .$rData->LName. "</td>";
                    print "<td>" .$rData->Email. "</td>";
                    print "<td>" .$rData->Age. "</td>";
                    print "<td>" .$rData->Gender. "</td>";
                    print "<td>" .$rData->RoomNo. "</td>";
                    print "<td>" .$rData->Days. "</td>";
                    print "</tr>";
            }
			?>
		</table>
    </div>
    <div class="container">
        <div class="box" id="box_right">
            <div class="form_header">
                <h1>Add New Data</h1>
            </div>
                <div class="content">
                    <form id="form" action="/updateGuest/{{$id}}" method="post">
                    @csrf
                    <label for="fname">Enter First Name</label><br>
                    <input onfocusin="myFunction()" class="inp" type="text" name="fname" id="fname">
                    <br><br>
                    <label for="lname">Enter last Name</label><br>
                    <input onfocusin="myFunction()" class="inp" type="text" name="lname" id="lname">
                    <br><br>
                    <label for="email">Enter Email</label><br>
                    <input onfocusin="myFunction()" class="inp" type="email" name="email" id="email">
                    <br><br>
                    <label for="gender">Select Gender</label><br>
                    <select class="inp" name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <br><br>
                    <label for="age">Enter Age</label><br>
                    <input onfocusin="myFunction()" class="inp" type="number" name="age" id="age">
                    <br> <br>
                    <label for="days">Enter No of Days to Stay</label><br>
                    <input onfocusin="myFunction()" class="inp" type="number" name="days" id="days">
                    <br> <br>
                    <label for="phone">Enter PhoneNo</label><br>
                    <input onfocusin="myFunction()" class="inp" type="text" name="phone" id="phone">
                    <br><br>
                    <label for="room">Select Room Number</label>
                    <select class="inp" name="room" id="room">
                        <?php
                            foreach ($rooms as $room){
                            print "<option value='$room->RNumber'>" .$room->RNumber. "</option>";
                        }
                        ?>
                    </select>
                    <input onclick="" type="submit" value="Update" class="btn">
                </form>
                <button class="btn" onclick="location.href='rooms'">Go Back</button>
                    </div>
                </div>
    </div>
    @endsection
    <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
                alert(msg);
            }  
            function myFunction(){
                //alert('inside alert');
                document.getElementById('hell').style.display = 'none';
                // var errors = document.getElementsByClassName('error');
                // for(var i=0; i< buttons.length; i++){
                //     buttons[i].style.display = 'none';
                // }
            }
            $(document).ready(function(){            
                $("#form").submit(function(){
                    $fname = $("#fname").val();
                    $lname = $("#lname").val();
                    $email = $("#email").val();
                    $age = $("#age").val();
                    $days = $("#days").val();
                    $phone = $("#phone").val();
                    if($fname.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#fname");
                        return false;
                    }else if($lname.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#lname");
                        return false;
                    }else if($email.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#email");
                        return false;
                    }else if($age.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#age");
                        return false;
                    }else if($days.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#days");
                        return false;
                    }else if($phone.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#phone");
                        return false;
                    }else{
                        if($phone.length != 11){
                            $("<label id = 'hell' class='error'>**Phone Length Must be 11 Digits</label>").insertAfter("#phone");
                        return false;
                        }
                    }
                });
            });
    </script> 
</body>
</html>