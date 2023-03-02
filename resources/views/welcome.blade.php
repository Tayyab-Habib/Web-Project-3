<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&display=swap"
    rel="stylesheet">
    <script src="https://kit.fontawesome.com/542f8a648d.js" crossorigin="anonymous"></script>
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
                padding: 6% 0%;
                margin: 0% 4%;
            }
            .content{
                width: 74%;
                margin: 5% 0%;
            }
            .content .inp{
                width:100%;
                background:transparent;
                border:none;
                border-bottom: 1px solid black;
                margin-bottom:4px;
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
                padding:2px 12px;
                margin: 1% 0%;
                width: 29%;
                height: 455px;
                display:flex;
                flex-direction:column;
                align-items:center;
                border-radius:12px;

            }
            .icon{
                margin: 6% auto;
                font-size:2.3rem;
                justify-content:center;
                text-align:center;
                display:flex;
            }
            .icon i{
                margin: 0% 25%
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
            .error{
                color:red;
                background:black;
            }
            #Empemail::placeholder,  #Emppass::placeholder{
                color:black;
            }
            @media (max-width: 800px){
                .container{
                    flex-direction:column;
                }
                .box{
                    width:85%;
                    height:435px;    
                }


            }
            
        </style>
    </head>
    <body class="antialiased">
            <div class="container">
                <div class="box" id="left_box">
                    <h1 style="text-decoration:underline;">Admin Login</h1>
                    <div class="content">
                        <br>
                        <form action="/adminLogin" onsubmit="return validateAdminForm()" method="post">
                        @csrf
                        <label for="email">Enter Email</label><br>
                        <input  class="inp adminEmail" type="email" name="email" id="email" placeholder="abc@example.com">
                        <label class="error" id="usrname_error"></label>
                        <br><br>
                        <label for="pass">Enter Password</label><br>
                        <input onfocusout="AdminPasswordValidate()" class="inp" type="password" name="pass" id="pass" placeholder="******** (8 Digit)">
                        <label class="error" id="pass_error"></label>
                        <br>
                        <input type="submit" value="SignIn" class="btn">
                        </form>
                    </div> <br>
                    <label for="create_acc">New to our app? <strong> <a id="create_aacount" href="/signup">Create Account</a> </strong></label>
                </div>
                <div class="box" id="right_box">
                <h1 style="text-decoration:underline;">Employee Login</h1>
                    <div class="icon">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                    <form action="/employeeLogin" onsubmit="return validateEmployeeForm()" method="post">
                        @csrf
                        <label for="email">Enter Email</label><br>
                        <input class="inp" type="email" name="email" id="Empemail" placeholder="abc@example.com">
                        <label class="error" id="username_error"></label>
                        <br><br>
                        <label for="pass">Enter Password</label><br>
                        <input class="inp" type="password" name="pass" id="Emppass" placeholder="******** (8 Digit)"> 
                        <label class="error" id="password_error"></label>
                        <br>
                        <input type="submit" value="SignIn" class="btn">
                        </form>
                    </div>
                </div>
            </div>
            <script>
                var msg = '{{Session::get('alert')}}';
                var exist = '{{Session::has('alert')}}';
                var message;
                if(exist){
                    //For Admin Password
                    if(msg == 'Admin Password does not match'){
                        var pass = document.getElementById('pass').value;
                        message = "Password does not match"
                        document.getElementById('pass_error').innerHTML = message;
                    }
                        //For Employee Password
                    else if(msg == 'Password does not match'){
                        document.getElementById('password_error').innerHTML = msg;
                    }
                        //For Admin Email
                    else if(msg == 'Admin PLease Enter valid data'){
                        message = "Enter Valid information"
                        document.getElementById('usrname_error').innerHTML = message;
                    }
                        //For Employee Email
                    else{
                        document.getElementById('username_error').innerHTML = msg;
                    }
                }
                function validateAdminForm(){
                    var email = document.getElementById('email').value;
                    var pass = document.getElementById('pass').value;
                    if(email == "" || pass == ""){
                        alert("Fields Must not be Empty")
                        return false;
                    }else if(pass.length < 8){
                        document.getElementById('pass_error').innerHTML = "Password length must be greater than 8";
                        return false;
                    }
                }
                function validateEmployeeForm(){
                    var empemail = document.getElementById('Empemail').value;
                    var emppass = document.getElementById('Emppass').value;
                    if(empemail == "" || emppass == ""){
                        alert("Fields Must not be Empty");
                        return false;
                    }else if(emppass.length < 8){
                        document.getElementById('password_error').innerHTML = "Password length must be greater than 8";
                        return false;
                    }
                }

            </script>
    </body>
</html>
