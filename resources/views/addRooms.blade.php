@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms Details</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    
    body {
        font-family: 'Bree Serif', serif;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-image:url({{url('assets/img/main.jpg')}});
    }
    .container{
        display:flex;
        padding: 0% 4%;
        justify-content:center;
        padding-left:1%;
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

        width:50%;
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
                <h1>Add Room</h1>
            </div>
            <div class="content">
                    <form id = "form" action="/addRoom" method="post">
                    @csrf
                    <label for="number">Enter Room Number</label><br>
                    <input onfocusin="myFunction()" class="inp" type="number" name="number" id="number">
                    <br><br>
                    <label for="type">Select Room Type</label><br>
                    <select class="inp" name="type" id="type">
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                    </select>
                    <br><br>
                    <label for="status">Select Room Status</label><br>
                    <select class="inp" name="status" id="status">
                        <option value="Empty">Empty</option>
                        <option value="Reserved">Reserved</option>
                    </select>
                    <br><br>
                    <label for="category">Select Room Category</label><br>
                    <select class="inp" name="category" id="category">
                        <option value="Standard">Standard</option>
                        <option value="Luxury">Luxury</option>
                        <option value="VIP">VIP</option>
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
                document.getElementById('hell').style.display = 'none';
            }
            $(document).ready(function(){            
                $("#form").submit(function(){
                    $number = $("#number").val();
                    if($number.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#number");
                        return false;
                    }
                });
            });
    </script> 
        
</body>
</html>