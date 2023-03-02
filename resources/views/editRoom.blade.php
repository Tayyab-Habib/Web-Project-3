@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rooms</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    body {
        font-family: 'Bree Serif', serif;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-image:url({{url('assets/img/bg.jpg')}});
        
    }
    .box{
        border:1px solid black;
        display:flex;
        flex-direction:column;
        width:50%;
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
        width:67%;
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
        .container{
            
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
            width:fit-content;
        }
}
.error{
    color:red;
    font-size:0.9rem;
}
</style>
<body>
    @section('content')
    <h1 style="text-align:center;">ROOM DETAILS</h1>
    <div class="table">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
			<tr class="header">
				<td>Id</td>
				<td>Room Number</td>
                <td>Room Type</td>
                <td>Status</td>
				<td>Category</td>
			</tr>
			<?php 
			 foreach ($roomData as $rData) {
                print "<tr>";
                    print "<td>" .$rData->id. "</td>";
                    print "<td>" .$rData->RNumber. "</td>";
                    print "<td>" .$rData->RType. "</td>";
                    print "<td>" .$rData->Status. "</td>";
                    print "<td>" .$rData->Category. "</td>";
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
                    <form id="form" action="/updateRoom/{{$id}}" method="post">
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