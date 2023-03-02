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
        font-family: 'Bree Serif', serif;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-image:url({{url('assets/img/6497.jpg')}});
        }
    .nav .logo h1 {
        font-family: 'Satisfy', cursive;
        color: black;
        font-size: 3.1rem;
        margin-top:4%;
    }
    .nav{
        display:flex;
        positon:sticky;
        top:0px;
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
        font-weight:bold;
        padding: 16px 23px;
        text-decoration:none;
        color:black;
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
    @media (max-width: 1050px){
        .nav ul{
            margin-left:0px
        }
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
           color:white;
           font-weight: normal;
       }
       .nav nav{
           margin-top:0px;
       }
       .logo{
           margin-bottom:1%;
           text-align:center;
       }
       .nav .logo h1{
           color:orange;
           font-size:2.2rem;
           margin-bottom:1%;
       }
    }
</style>
<body>
    <div class="nav">
            <div class="logo">
                <h1 style="color:orange;">Sea Shell</h1>
            </div>
        <nav>
            <ul>
                <li> <a id="Anchor1" class="a" href="/employeeHome">HOME</a></li>
                <li> <a id="Anchor2" class="a" href="guest" >GUESTS</a></li>
                <li> <a id="Anchor3" class="a" href="/reservations">RESERVATIONS</a></li>
                <li> <a id="Anchor4" class="a" href="/employeeAbout">ABOUT</a></li>
            </ul>
        </nav>
    </div>
        @yield('content')
    <script>
        function highlight() {
            alert('It was clicked');
            document.getElementById('Anchor2').style.color = 'red';
            document.getElementById('Anchor2').style.background-color = 'white';
        }
        Anchor2.addEventListener('click', highlight, false);

    </script>
</body>
</html>