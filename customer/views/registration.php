<?php 
    include "../controller/process.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div class="sign-up-div">
        <form action="" method="POST">
            <h1>Don't have any account? Sign up for free!</h1>
            <input name="name" type="text" placeholder="Enter Username"/>
            <input  name="email" type="text" placeholder="Enter Email"/>
            <input name="password" type="text" placeholder="Enter Password"/>
            <input name="confirmPassword" type="text" placeholder="Re-Enter Password"/>



            <button class="signupButton" type="submit" name="submit">SIGN UP</button>
        </form>
    </div>

        
</body>
</html>