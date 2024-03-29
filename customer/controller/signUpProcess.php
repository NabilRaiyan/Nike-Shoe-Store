<?php 

// Sign up operations
// declaring variable
$Name=$email=$password=$confirmPassword=$haserror= '';
$NameError=$emailError=$passwordError=$confirmPasswordError='';
require_once '../model/mydb.php';


// if submit button has been clicked
if (isset($_REQUEST["Submit"])){
    
    // Name validation
    if(strlen($_REQUEST["Name"]) < 4){
        $NameError = "Business Name Should be atleast 4 character long.";
        $haserror=1;
    }else{
        $Name = $_REQUEST["Name"];
    }
    
    // email validation
    if (empty($_REQUEST['email'])){
        $emailError = "Please enter the email";
        $haserror=1;

    }
    else{
        if (!empty($_REQUEST["email"])){
            if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@(gmail+\.)+com$/ix",$_REQUEST["email"]))
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
            // checking if password has atleast one uppercase 
            if (preg_match('/[A-Z]/', $_REQUEST['password'])){
                $password = $_REQUEST['password'];
            }
            else{
                $passwordError = "Password must contain one uppercase.";
                $haserror = 1;

            }
        }
    }

    // confirm password validation
    if (empty($_REQUEST["confirmPassword"])){
        $confirmPasswordError = "Please enter password.";
        $haserror = 1;
    }else{
        if (!empty($_REQUEST["confirmPassword"])){
            if ($_REQUEST["password"] === $_REQUEST["confirmPassword"]){
                $confirmPassword = $_REQUEST["confirmPassword"];
            }else{
                $confirmPasswordError = "Password doesn't match.";
                $haserror = 1;
            }

        }
    }

    // creating Class model and connecting with db and inserting data
    if (!$haserror == 1){
        $mydb = new Model();
        // opening connection
        $conobj = $mydb->OpenCon();
        // invoking function
        $result = $mydb->addCustomer($conobj, "customerRegistration", $Name, $email, $password, $confirmPassword);
        if ($result === TRUE){
            echo "Successfully inserted the data";
        }else{
            echo "Error occured " . $conobj->error;
        }
    }else{
        echo "Please enter all the information.";
    }
}
?>
