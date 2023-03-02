@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&display=swap"
        rel="stylesheet"><link
        href="https://fonts.googleapis.com/css2?family=Allison&family=Architects+Daughter&family=Josefin+Sans:wght@300&display=swap"
        rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Festive&family=Rampart+One&family=Satisfy&display=swap"
        rel="stylesheet">
        <style>
            /* *{
                margin:0;
                padding:0;
            } */
            body {
                font-family: 'Nunito', sans-serif;

            }
            .p-heading{
                text-align:center;
                text-decoration:underline;
                font-family: 'Satisfy', cursive;
                font-size:2.8rem;
            }
            .btn{
                width: 30%;
                border:2px solid black;
                cursor: pointer;
            }
            .container{
                display:flex;
                justify-content:center;
                align-items:center;
                margin-top:6%;
                /* padding:  0% 7%; */
            }
            .box{
                border:1.5px solid red;
                margin: 0% 4%;
                text-align:center;
                background-color:white;
                padding: 2% 2%;
                border-radius: 8px;
                width:20%;
                flex-wrap:wrap;
                overflow:auto;
            }
            .box ul li{
                list-style:none;
            }
            .footer{
                height:33px;
                width:100%;
                background-color:black;
                color:white;
                margin-top:3%;

            }
            .box ul{
                    padding:0px
                }
            .btn {
                font-size: 15px;
                color: white;
                display: block;
                margin: 2% auto;
                width: 12%;
                padding: 7px;
                border-radius: 15px;
                background-color: orangered;
                cursor: pointer;
                border: 1px solid black;
                transition: all 0.5s ease-in-out;
            }
                .btn:hover {
                background-color: white;
                color: black;
                border-color: black;
                transform: scale(1.1);
            }
            .info{
                margin: 2% 3%;
                color:black;
            }
            .data{
                border-radius:12px;
                border:1.5px solid red;
               margin: 2% auto;
               width: 40%;
               display:flex;
               flex-direction:column;
               justify-content:center;
               align-items:center;
               background-color:white;
            Color:black;
            }
            table{
                line-height: 2;
            }
            .color{
                color:orangered;
                text-decoration:underline;
            }
            @media
             (max-width: 860px){
                .box{
                    width:100%;
                    height:185px;
                }
                .box li{
                    margin-left:0%;
                }
                
                .box h1{
                    font-size:1.2rem;
                }
                .btn{
                    width:fit-content;
                }
                table{
                    font-size: 0.9rem;
                }
            }
            @media (max-width: 650px){
                
                .data{
                    width:100%;
                }
                #heading{
                    font-size:1.2rem;
                }
            }
            
        </style>
    </head>
    <body class="antialiased">
         @section('content')
         <h1 class="p-heading" style="">Admin Pannel</h1>
         <button class="btn" onclick="location.href='/'">Logout</button>
            <div class="container">
                <div class="box">
                    <h1 class="color" class="head">Employees Details</h1>
                    <ul>
                        <?php 
                            print "<li>No of employees = " .$employeeCount. "</li>";
                            print "<li>Working employees = " .$employeeCount. "</li>";
                        ?>
                    </ul>
                </div>
                <div class="box">
                <h1 class="color">Rooms Details</h1>
                    <ul>
                        <?php 
                            print "<li>No of Rooms = " .$roomsCount. "</li>";
                            print "<li>No of Reserved Rooms = " .$reservedCount. "</li>";
                        ?>
                    </ul>
                </div>
            </div>

            <div class="info">
                <h1 id = "heading" style="padding:0px 7px;background-color:grey;width:fit-content;margin:auto;">Personal Information</h1>
                <div class="data">
                    <div class="head">
                        <h2 class="color">Details</h2>
                    </div>
                    <div class="table">
                        <table>
                        <?php 
                        
                            foreach ($adminData as $aData) {
                            print "<tr>";
                                print "<td> <strong>Email: </strong> </td>";
                                print "<td>" .$aData->Email. "</td>";
                            print "</tr>";
                            print "<tr>";
                                print "<td> <strong>First Name: </strong> </td>";
                                print "<td>" .$aData->Fname. "</td>";
                            print "</tr>";
                            print "<tr>";
                                print "<td> <strong>Last Name: </strong> </td>";
                                print "<td>" .$aData->Lname. "</td>";
                            print "</tr>";
                            print "<tr>";
                                print "<td> <strong>Age: </strong> </td>";
                                print "<td>" .$aData->Age. "</td>";
                            print "</tr>";
                            print "<tr>";
                                print "<td> <strong>Gender: </strong> </td>";
                                print "<td>" .$aData->Gender. "</td>";
                            print "</tr>";
                            }
                        ?>
                        </table>
                    </div>
                </div>
            </div>
         @endsection

    </body>

</html>
