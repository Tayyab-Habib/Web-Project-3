<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SignUp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&display=swap"
    rel="stylesheet">
    <script src="https://kit.fontawesome.com/542f8a648d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Festive&family=Rampart+One&family=Satisfy&display=swap">
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
                align-items:center;
                justify-content:center;
                margin: 0% 4%;
            }
            .content{
                width: 74%;
                margin: 5% 0%;
            }
            .content .inp{
                width:100%;
                margin-top:4%;
                background:transparent;
                border:none;
                border-bottom: 1px solid black
            }
            .content input:focus{
                outline:none;
            }
            .btn {
                font-size: 15px;
                color: white;
                display: block;
                margin: 8% auto;
                width: 42%;
                padding: 7px;
                border-radius: 15px;
                background-color: white;
                color:black;
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
            .box{
                padding:0px 12px;
                margin: 1% 0%;
                width: 29%;
                height: 721px;
                display:flex;
                flex-direction:column;
                align-items:center;
                border-radius:12px;

            }
            .icon{
                margin: 6% auto;
                font-size:2.3rem;
                text-align:center;
            }
            .icon i{
                margin: 0% 5%
            }
            .image{
                padding-top:29%;
            }
            #left_box{
                border-top-right-radius:0px;
                border-bottom-right-radius:0px;
                background-color:white;
                color:black;
            }
            #left_box .btn{
                background-color: #ff5621;
                color:white;
            }
            #left_box .btn:hover{
                background-color: black;
                color:white;
            }
            #right_box{
                border-top-left-radius:0px;
                border-bottom-left-radius:0px;
                background-image: linear-gradient(to right, #ff5621 0%, #ed6b41 51%, #e91e63 100%);
                /* background-color:#d35b4e; */
                color:white;
            }
            
            #create_aacount{
                color:black;
            }
            .inp::placeholder{
                color:black;
            }
            .error{
    color:red;
    font-size:0.9rem;
}
            @media (max-width: 800px){
                .container{
                    flex-direction:column;
                }
                .box{
                    width:85%;
                    height:610px;    
                }


            }
            
        </style>
    </head>
    <body class="antialiased">
            <div class="container">
                <div class="box" id="left_box">
                    <div class="image">
                        <img src="{{ URL::to('/assets/img/profile.png') }}" alt="" height="230px" width="230px">  
                    </div>
                    <div class="labels">
                        <h1>Let's get you started</h1>
                        <strong >Fill the form to create Account</strong>
                        <p>Already have an Account? <strong> <a href="/">Click Here</a> </strong></p> 
                    </div>
                </div>
                <div class="box" id="right_box">
                <h1 style="text-decoration:underline">Sign Up</h1>
                    <div class="content">
                    <form id = "form" action="/addAdmin" method="post">
                    @csrf
                    <label for="fname">Enter First Name</label><br>
                    <input onfocusin="myFunction()" class="inp" type="text" name="fname" id="fname" placeholder="Muhammad">
                    
                    <br><br>
                    <label for="lname">Enter last Name</label><br>
                    <input onfocusin="myFunction()" class="inp" type="text" name="lname" id="lname" placeholder="Talha">

                    <br><br>
                    <label for="pass">Enter Password</label><br>
                    <input onfocusin="myFunction()" class="inp" type="password" name="pass" id="pass"placeholder="Must 1 Capital and numeric values (e.g Abc@1234)">

                    <br> <br>
                    <label for="email">Enter Email</label><br>
                    <input onfocusin="myFunction()" class="inp" type="email" name="email" id="email" placeholder="abc@example.com">
                    
                    <br><br>
                    <label for="gender">Select Gender</label><br>
                <select class="inp" name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                    
                    <br><br>
                    <label for="age">Enter Age</label><br>
                    <input onfocusin="myFunction()" class="inp" type="number" name="age" id="age" placeholder="Your Age">
                    
                    <br> <br>
                    <input id="submit" type="submit" value="Submit" class="btn">
                    </form>
                    </div>
                </div>

            <script src="{{asset('/js/signup.js')}}"></script> 
            <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
                alert(msg);
            }  
            </script> 
    </body>
</html>
