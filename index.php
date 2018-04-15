<?php
/**
 * Created by PhpStorm.
 * User: marja
 * Date: 8/23/2017
 * Time: 7:57 PM
 */

header("Content-Type:application/json");
// Define variables for Login Details
$host="localhost";
$db="mysql";
$username="real_estate_agent";
$pass="proektit2017";

/* Attempt to connect */
$conn=new mysqli($host,$username,$pass,$db); // Connect to Database

//Check if is connected successfully
if (mysqli_connect_error()){
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); // Display Error
}else{
// If connection is successfulyl, extract data from database table
    $sql = "SELECT * FROM real_estate_agency";
    $result = $conn->query($sql);


    $data = array();
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($data);

}

$conn->close();