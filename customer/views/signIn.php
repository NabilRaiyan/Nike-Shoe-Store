<?php 
    include "../controller/process.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div>
        
    </div>
    <div class="sign-in-div">
        <form action="" method="POST">
            <h1>Already have an account? Sign In!</h1>
            <input  name="email" type="text" placeholder="Enter Email"/>
            <?php echo $emailError?>

            <input name="password" type="text" placeholder="Enter Password"/>
            <?php echo $passwordError?>

            <button class="signInButton" type="submit" name="Submit">SIGN UP</button>
        </form>

        <!-- Footer  -->
        <?php include "../../layouts/footer.php"; ?>

    </div>

        
</body>
</html>