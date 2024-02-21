<?php 

// declaring variable
$businessName=$email=$password=$confirmPassword=$haserror= '';
$businessNameError=$emailError=$passwordError=$confirmPasswordError='';
include '../model/mydb.php';

// if submit button has been clicked
if (isset($_REQUEST["Submit"])){
    
    // name validation
    if(strlen($_REQUEST["businessName"]) < 4){
        $businessNameError = "Business Name Should be atleast 4 character long.";
        $haserror=1;
    }else{
        $businessName = $_REQUEST["businessName"];
    }
    

    // email validation
    if (empty($_REQUEST['email'])){
        $emailError = "Please enter the email";
        $haserror=1;

    }
    else{
        if (!empty($_REQUEST["email"])){
            if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@(aiub+\.)+edu$/ix",$_REQUEST["email"]))
            {
                $emailError = "Email is not valid";
                $haserror=1;

            }else{
                $email = $_REQUEST["email"];

            }

        }else{
            $emailError = "Please enter valid email address.";
        }


    }
        
    // password validation
    if (empty($_REQUEST['password'])){
        $passwordError = "Please enter password";
        $haserror = 1;
    }
    else{
        if (strlen($_REQUEST['password']) < 6){
            $passwordError = "Password should at least 6 character long";
            $haserror = 1;

        }
        else{
            if (preg_match('/[A-Z]/', $_REQUEST['password'])){
                $password = $_REQUEST['password'];
            }
            else{
                $passwordError = "Password must contain one uppercase.";
                $haserror = 1;

            }
        }
    }

   

    // creating Class model and connecting with db and inserting data
    $mydb = new Model();
    // opening connection
    $conobj = $mydb->OpenCon();
    // invoking function
    $result = $mydb->addCustomer($conobj, "customerRegistration", $_REQUEST["businessName"], $_REQUEST["email"], $_REQUEST["password"], 
    $_REQUEST["confirmPassword"]);
    if ($result === TRUE){
        echo "Successfully inserted the data";
    }else{
        echo "Error occured ".$conobj->error;
    }
     
}

    
?>
