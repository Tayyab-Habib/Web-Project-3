@extends('layouts.navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/542f8a648d.js" crossorigin="anonymous"></script>
    <title>About</title>                
</head>
<style>
    .box{
        display:block;
        margin:3% auto;
        width:50%;
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
    .icon{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .icon i{
        padding: 0% 1%;
        font-size: 1.9rem;
        color:orangered;
        cursor:pointer;
    }
    .icon a{
        margin:0% 4%;
    }
    @media (max-width: 1040px){
        .box{
            width:70%
        }
    }
    @media (max-width: 400px){
        .p-heading{
            font-size:1.3rem;
        }
    }
</style>
<body>
    @section('content')
    <div class="box">
        
    <div class="container">
        <h1 class = "p-heading">About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, iure assumenda asperiores nisi earum illum recusandae nostrum voluptatibus ea omnis. Accusantium inventore, quibusdam libero atque molestias magnam illo at necessitatibus adipisci excepturi, animi magni quo est eum nesciunt laborum? Eveniet blanditiis nisi, suscipit, optio fugit molestias error reprehenderit nulla eligendi, natus officia ad deleniti ullam harum facilis atque fuga. Omnis nemo numquam adipisci provident quia optio laudantium?</p>

        <h1 class = "p-heading">Or You Can Contact Us At</h1>
        <div class="icon">
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            
        </div>
    </div>
    </div>
    @endsection
</body>
</html>