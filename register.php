<?php
/**
 * Created by PhpStorm.
 * User: marja
 * Date: 8/26/2017
 * Time: 2:25 PM
 */

// Define variables for Login Details
$host="localhost";
$db="mysql";
$username="real_estate_agent";
$pass="proektit2017";
$name="";

/* Attempt to connect */
$conn=new mysqli($host,$username,$pass,$db); // Connect to Database


//Check if is connected successfully
if (mysqli_connect_error()){
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); // Display Error
}else{
// If connection is successfulyl,insert record into database table named 'USERS'
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $usernam = $_GET['usernam'];
    $email = $_GET['email'];
    $password = $_GET['psw-repeat'];
    $query = ("INSERT INTO users (first_name, last_name, user_name, email, password) 
VALUES  ('$name', '$surname', '$username', '$email', '$password')");
    if(mysqli_query($conn, $query)){
        echo "You have been successfully registered !";
    }else{
        echo "Error";
        echo mysqli_connect_error();
    }

}

$conn->close();