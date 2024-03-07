<?php 

    require_once '../model/mydb.php';
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
                if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@(gmail+\.)+com$/ix",$_REQUEST["signInEmail"]))
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

        // sign in process
        if (!$signInHasError == 1){
            $mydb = new Model();
            // opening connection
            $conobj = $mydb->OpenCon();
            $result = $mydb->signIn($conobj, "customerRegistration", $signInEmail, $signInPassword);
            if ($result === TRUE){
                echo "Successfully Signed In";
            }else{
                echo "User does not exist. Please register first.";
                echo "Error occured ".$conobj->error;
            }
        }else{
            echo "Please enter all the information.";
        }
    }
?>