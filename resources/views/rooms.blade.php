@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms Details</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
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
    #box_left{
        color:white;
        width:100%;
    }
    #box_right{
        /* height:680px; */
        width:38%;
        overflow:hidden;
        background-color:white;
        color:black;
        border-radius:18px;
    }
    .table_btn{
        background-color: #ff5621;
        color:white;
        cursor: pointer;
        border:none;
        transition: all 0.5s ease-in-out;
    }
    .table_btn:hover {
        background-color: black;
        color: white;
        border-color: black;
        transform: scale(1.1);
    }
    .table{
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
    .form_header{
        background-color:#ff5621;
        width:100%;
        text-align:center;
        margin-bottom:1%;
        color:white;
    }
    @media (max-width: 1050px){

        table {
            border-collapse: collapse;
            border:white;
        }
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
    @media (max-width: 540px){
        table tr{
            font-size:0.7rem;
        }
    }
    #add-btn{
        width:15%;
        border: 1px solid black;
        margin:2% auto;
    }

</style>
<body>
    @section('content')
    <div class="container">
        <div class="box" id="box_left">
        <button onclick="location.href='/addRooms'" id = "add-btn" class="btn">Click to Add more</button>
            <h1 style="color:black;">Rooms Details</h1>
            <div class="table" style="overflow-x:auto;">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
			<tr class="header">
				<td>Id</td>
				<td>Room Number</td>
                <td>Room Type</td>
                <td>Status</td>
				<td>Category</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
			<?php 
			 foreach ($roomData as $rData) {
                print "<tr>";
                    print "<td>" .$rData->id. "</td>";
                    print "<td>" .$rData->RNumber. "</td>";
                    print "<td>" .$rData->RType. "</td>";
                    print "<td>" .$rData->Status. "</td>";
                    print "<td>" .$rData->Category. "</td>";
                    print '<td><button class="table_btn" onclick=location.href="/editRoom?id='.$rData->id.'">Edit</button> </td>';
                    print '<td> <button class="table_btn" onclick="RoomFunction('.$rData->id.')">Delete</button> </td>';
                    print "</tr>";
            }
			?>
		</table>
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
    </script>
</body>
</html>