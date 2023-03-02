
            function myFunction(){
                document.getElementById('hell').style.display = 'none';
            }
            $(document).ready(function(){            
                $("#form").submit(function(){
                    $fname = $("#fname").val();
                    $lname = $("#lname").val();
                    $email = $("#email").val();
                    $pass = $("#pass").val();
                    $age = $("#age").val();
                    if($fname.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#fname");
                        return false;
                    }else if($lname.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#lname");
                        return false;
                    }else if($email.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#email");
                        return false;
                    }else if($pass.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#pass");
                        return false;
                    }else if($age.length == 0){
                        $("<label id = 'hell' class='error'>**Text Field Cannot be Empty</label>").insertAfter("#age");
                        return false;
                    }else{
                        var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/
                        valid = pattern.test($pass);
                        if($pass.length < 8){
                            $("<label id = 'hell' class='error'>Password Must be Greater than 8</label>").insertAfter("#pass");
                            return false;
                        }else if(!valid){
                            $("<label id = 'hell' class='error'>Pasword Must contain First Capital and @</label>").insertAfter("#pass");
                            return false;
                        }else if($phone.length != 11){
                            $("<label id = 'hell' class='error'>**Phone Length Must be 11 Digits</label>").insertAfter("#phone");
                        return false;
                        }
                    }
                });
            });