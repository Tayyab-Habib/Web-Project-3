<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&display=swap"
        rel="stylesheet"><link
        href="https://fonts.googleapis.com/css2?family=Allison&family=Architects+Daughter&family=Josefin+Sans:wght@300&display=swap"
        rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Festive&family=Rampart+One&family=Satisfy&display=swap"
        rel="stylesheet">
</head>
<style>
       * {
 
        font-family: 'Bree Serif', serif;
    }
    body {
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-image:url({{url('assets/img/bg.jpg')}});

            }
    .nav .logo h1 {
        font-family: 'Satisfy', cursive;
        color: black;
        font-size: 3.1rem;
        margin-top:4%;
    }
    .nav{
        display:flex;
       
    }
    .nav nav{
        margin-top: 1%;
    }
    .nav ul{
        display:flex;
        margin-left:22%;
    }
    .nav ul li{
        list-style:none;
        margin: 1% 3%;
    }
    .nav ul li a{
        padding: 16px 23px;
        text-decoration:none;
        color:#ff2f00;
        font-size: 1.3rem;

    }
    .nav ul li a:hover{
        background-color:white;
        color:#ff2f00;
        border-radius: 23px;
    }
    .logo{
        margin-left: 5%;
    }
    @media (max-width: 790px){
       .nav{
           flex-direction:column;           
       }
       .nav ul{
           margin-left: 0px;
           
           padding-left: 0px;
           flex-wrap:wrap;
           flex-direction:column;
        }
        .nav ul li a{
           font-size: 1.2rem;
       }
       .nav nav{
           margin-top:0px;
       }
       .logo{
           margin-bottom:1%;
           text-align:center;
       }
       .nav .logo h1{
           font-size:2.2rem;
           margin-bottom:1%;
       }
    }
</style>
<body>
    <div class="nav">
            <div class="logo">
                <h1>Sea Shell</h1>
            </div>
        <nav>
            <ul>
                <li> <a href="/admin">HOME</a></li>
                <li> <a href="/employees">EMPLOYEES</a></li>
                <li> <a href="/rooms">ROOMS</a></li>
                <li> <a href="/about">ABOUT</a></li>
            </ul>
        </nav>
    </div>
    @yield('content')
</body>
</html>