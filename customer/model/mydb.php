<?php 
    class Model
    {
        function OpenCon(){
            $conn = new mysqli("localhost", "root", "Nike Shoe store");
            return $conn;
        }

        function addCustomer($conn, $table, $name, $email, $password, $confirmPassword){
            $sql = "INSERT INTO $table (name,email, password, confirmPassword) 
            VALUES ('$name', '$email', '$password', '$confirmPassword')";
            $result = $conn->query($sql);
            return $result;
        }
    }
?>