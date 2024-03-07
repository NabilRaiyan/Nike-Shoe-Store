<?php 
    include "../controller/signUpProcess.php";
    include "../controller/signInProcess.php";
    // Header
    include "../../layouts/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOIN WITH US</title>
</head>
<body>

    <!-- Sign in div -->
    <div class="sign-in-div">
        <form action="" method="POST">
            <h1>Already have an account? Sign In!</h1>
            <input  name="signInEmail" type="text" placeholder="Enter Email"/>
            <?php echo $signInEmailError;?>
            <?php echo $signInEmail;?>

            <input name="signInPassword" type="text" placeholder="Enter Password"/>
            <?php echo $signInPasswordError;?>
            <?php echo $signInPassword;?>

            <button class="signInButton" type="submit" name="SignInSubmit">SIGN IN</button>
        </form>

    </div>
    
    <!-- Sign up div -->
    <div class="sign-up-div">
        <form action="" method="POST">
            <h1>Don't have any account? Sign up for free!</h1>
            <input name="Name" type="text" placeholder="Enter UserName"/>
            <?php echo $NameError;?>
            <input  name="email" type="text" placeholder="Enter Email"/>
            <?php echo $emailError;?>

            <input name="password" type="text" placeholder="Enter Password"/>
            <?php echo $passwordError;?>

            <input name="confirmPassword" type="text" placeholder="Re-Enter Password"/>
            <?php echo $confirmPasswordError;?>

            <button class="signupButton" type="submit" name="Submit">SIGN UP</button>
        </form>

        <!-- Footer  -->
        <?php include "../../layouts/footer.php"; ?>

    </div>

        
</body>
</html>