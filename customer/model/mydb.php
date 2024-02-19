<?php 
    class Model
    {
        // creating connection
        function OpenCon(){
            $conn = new mysqli("localhost", "root","", "customer");
            return $conn;
        }

        //adding customer
        function addCustomer($conn, $table, $name, $email, $password, $confirmPassword){
            $sql="INSERT INTO $table (name,email, password, confirmPassword) 
            VALUES ('$name', '$email', '$password', '$confirmPassword')";
            $result = $conn->query($sql);
            return $result;
        }
    }
?>