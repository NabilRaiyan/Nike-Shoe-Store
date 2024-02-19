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
    <div>
        <form action="" method="POST">
            <fieldset>
                <legend>Register</legend>
                <table>
                    <tr>
                        <td>
                            <h1>SMALL BUSINESS REGISTRATION</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="businessName">Business Name:</label>
                        </td>
                        <td>
                            <input name="businessName" type="text" />
                            <?php echo $businessName;?>
                            <?php echo $businessNameError;?>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="businessType">Business Type:</label>
                        </td>
                        <td>
                            <select name="businessType" id="businessType">
                                <option selected value=""></option>
                                <option value="retail">Retail</option>
                                <option value="consulting">Consulting</option>
                                <option value="foodServices">Food Services</option>
                                <option value="construction">Construction</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="healthcare">Others</option>

                            </select>
                            <?php echo $businessType;?>
                            <?php echo $businessTypeError;?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label for="email">Email:</label>
                        </td>
                        <td>
                            <input name="email" type="email" />
                            <?php echo $email;?>
                            <?php echo $emailError;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="taxIdentity">Tax Identification Number (TIN)</label>
                        </td>
                        <td>
                            <input name="taxIdentity" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password: </label>
                        </td>
                        <td>
                            <input name="password" type="password" />
                            <?php echo $password;?>
                            <?php echo $passwordError;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="confirmPassword">Confirm Password</label>
                        </td>
                        <td>
                            <input name="confirmPassword" type="password" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="phoneNumber">Phone Number: </label>
                        </td>
                        <td>
                            <input name="phoneNumber" type="text" />
                            <?php echo $phoneNumber;?>
                            <?php echo $phoneNumberError;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="termsCondition" type="checkbox" />
                            <label for="termsCondition">I accept the Terms of Service and Privacy Policy</label>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button name="Submit" type="submit">Register</button>
                            <button name="Reset" type="reset">Reset</button>

                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>

        
</body>
</html>