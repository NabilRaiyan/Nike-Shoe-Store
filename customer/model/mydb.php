<?php 

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    class Model
    {
        // creating connection
        function OpenCon(){
            $conn = new mysqli("localhost", "root","", "customer");
            return $conn;
        }

        //inserting customer into db
        function addCustomer($conn, $table, $name, $email, $password, $confirmPassword){
            $sql="INSERT INTO $table (name,email, password, confirmPassword) 
            VALUES ('$name', '$email', '$password', '$confirmPassword')";
            $result = $conn->query($sql);
            return $result;
        }

        // creating sign in function
        function signIn($conn, $table, $signInEmail, $signInPassword){
            $SignInSql="SELECT * FROM $table WHERE email='$signInEmail'";
            $result = $conn->query($SignInSql);
            return $result;
        }
    }
?>