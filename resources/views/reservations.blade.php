@extends('layouts.navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/542f8a648d.js" crossorigin="anonymous"></script>
    <title>Reservation</title>                
</head>
<style>
    .containerr{
        display: flex;
    /* flex-direction: column; */
    justify-content: center;
    }
    .boxx{
        border:1.5px solid red;
                margin: 2% 4%;
                text-align:center;
                background-color:white;
                padding: 2% 2%;
                border-radius: 8px;
                width:20%;
                flex-wrap:wrap;
                overflow:auto;
    }
    .boxx ul li{
                list-style:none;
            }
            .boxx ul{
                padding: 0px;
            }
    .box{
        display:block;
        margin:3% auto;
        width:85%;
    }
    .container{
        border-radius:13px;
        padding: 2% 3%;
        border:1px solid red;
        display:flex;
        flex-direction:column;
        background-color:white;
        color:black;
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
    .table td{
        color:white;
    }
    .header{
        background-color: #ff5621;
    }
    @media (max-width: 1050px){
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
    @media (max-width: 540px){
        table tr{
            font-size:0.7rem;
        }
    }
    @media (max-width: 1040px){
        html{
            width: 100;
        }
        .box{
            width:100%
        }
    }
    @media (max-width: 400px){
        .p-heading{
            font-size:1.3rem;
        }
    }
    @media (max-width: 860px){
                .boxx{
                    width:100%;
                    height:135px;
                }
                .boxx li{
                    margin-left:0%;
                }
                
                .boxx h1{
                    font-size:1.2rem;
                }
            }
</style>
<body>
    @section('content')
    <div class="box">
        
    <div class="container">
        <h1 class = "p-heading" style="text-decoration:underline;">Reservations Details</h1>
        <div class="table" style="overflow-x:auto;">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
			<tr class="header">
                <td>First Name</td>
                <td>Last Name</td>
				<td>Email</td>
                <td>Phone No</td>
                <td>Days</td>
                <td>RoomNo</td>
                <td>Type</td>
                <td>Category</td>
			</tr>
			<?php 
			 foreach ($Data as $eData) {
                print "<tr>";
                    print "<td>" .$eData->FName. "</td>";
                    print "<td>" .$eData->LName. "</td>";
                    print "<td>" .$eData->Email. "</td>";
                    print "<td>" .$eData->PhoneNo. "</td>";
                    print "<td>" .$eData->Days. "</td>";
                    print "<td>" .$eData->RoomNo. "</td>";
                    print "<td>" .$eData->RType. "</td>";
                    print "<td>" .$eData->Category. "</td>";
                    print "</tr>";
            }
			?>
		</table>
        </div>
        </div>
    </div>
    </div>
    <div class="containerr">
                <div class="boxx">
                    <h1 class="color" class="head">Total Reserved</h1>
                    <ul>
                        <?php 
                            print "<li>No of Reserved Rooms = " .$reservedCount. "</li>";
                        ?>
                        
                        
                    </ul>
                </div>
                <div class="boxx">
                <h1 class="color">Total Rooms</h1>
                    <ul>
                        <?php 
                            print "<li>No of Rooms = " .$roomsCount. "</li>";
                        ?>
                    </ul>
                </div>
            </div>
    @endsection
</body>
</html>