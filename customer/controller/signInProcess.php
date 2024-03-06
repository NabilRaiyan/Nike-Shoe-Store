<?php 

    // sign in operations

    $signInEmail=$signInPassword="";
    $signInEmailError=$signInPasswordError=$signInHasError="";
    if (isset($_REQUEST["SignInSubmit"])){
        // email validation
        if (empty($_REQUEST["signInEmail"])){
            $signInEmailError = "Please enter email!";
            $signInHasError = 1;
        }else{
            if (!empty($_REQUEST["signInEmail"])){
                if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@(gmail+\.)+com$/ix",$_REQUEST["email"]))
                    {
                        $signInEmailError = "Email is not valid";
                        $haserror=1;

                    }
                else{
                    $signInEmail = $_REQUEST["signInEmail"];

            }    
            }else{
                $signInEmailError = "Please enter valid email address.";
            }
        }
        
        // password validation
        if (empty($_REQUEST["signInPassword"])){
            $signInPasswordError = "Please enter a password.";
            $signInHasError = 1;
        }else{
            $signInPassword = $_REQUEST["signInPassword"];
        }

        if ($signInHasError == 1){
            echo "Please enter credentials.";
        }else{
            $mydb = new Model();
            // opening connection
            $conObj = $mydb->OpenCon();
            $result = $mydb->signIn($conObj, "customerRegistration", $signInEmail, $signInPassword);
        }
    }
?>