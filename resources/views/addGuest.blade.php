@extends('layouts.navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guests Details</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    .container{
        display:flex;
        padding: 0% 4%;
        padding-left:1%;
        justify-content:center;
    }
    .box{
        display: flex;
        flex-direction: column;
        /* height: 625px; */
        margin: 0% 2%;
    }
    .content{
        margin-top:5%;
        padding:1% 7%;

    }
    .box h1{
        text-align:center;
        margin:3% 0%;
        text-decoration:underline;
    }

    #box_right{
        /* height:680px; */
        width:38%;
        overflow:hidden;
        background-color:white;
        color:black;
        border-radius:18px;
    }
    .form_header{
        background-color:#ff5621;
        width:100%;
        text-align:center;
        margin-bottom:1%;
        color:white;
    }
    @media (max-width: 1050px){
        #box_right{
            width:80%;
            /* height: 905px; */
        }
        .container{
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .box{
            width:100%;
        }
    }
    .error{
    color:red;
    font-size:0.9rem;
}
</style>
<body>
    @section('content')
    <div class="container">
    <div class="box" id="box_right">
            <div class="form_header">
                <h1>Add Guest</h1>
            </div>
            <div class="content">
            <form id = "form" action="/addGuest" method="post">
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
                    <label for="room">Select Room No</label><br>
                    <select class="inp" name="room" id="room">
                        <?php
                            foreach ($rooms as $room){
                            print "<option value='$room->RNumber'>" .$room->RNumber. "</option>";
                        }
                        ?>
                    </select>
                    <input onclick="" type="submit" value="Add" class="btn">
                </form>
                
                
                    </div>
        </div>
        </div>
    @endsection
    <script src="{{asset('/js/script.js')}}"></script> 
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