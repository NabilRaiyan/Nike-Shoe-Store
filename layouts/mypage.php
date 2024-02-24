<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="sign-in-div">
        <form action="" method="POST">
            <h1>Already have an account? Sign In!</h1>
            <input  name="email" type="text" placeholder="Enter Email"/>
            <?php echo $emailError?>

            <input name="password" type="text" placeholder="Enter Password"/>
            <?php echo $passwordError?>

            <button class="signInButton" type="submit" name="Submit">SIGN IN</button>
        </form>

    </div>
</body>
</html>