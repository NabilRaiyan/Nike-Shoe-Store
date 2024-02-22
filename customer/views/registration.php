<?php 
    include "../controller/process.php";
    // Header
    include "../../layouts/header.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div class="sign-up-div">
        <form action="" method="POST">
            <h1>Don't have any account? Sign up for free!</h1>
            <input name="Name" type="text" placeholder="Enter UserName"/>
            <?php echo $NameError?>
            <input  name="email" type="text" placeholder="Enter Email"/>
            <?php echo $emailError?>

            <input name="password" type="text" placeholder="Enter Password"/>
            <?php echo $passwordError?>

            <input name="confirmPassword" type="text" placeholder="Re-Enter Password"/>
            <?php echo $confirmPasswordError?>




            <button class="signupButton" type="submit" name="Submit">SIGN UP</button>
        </form>

        <!-- Footer  -->
        <?php include "../../layouts/footer.php"; ?>

    </div>

        
</body>
</html>