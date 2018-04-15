<?php
/**
 * Created by PhpStorm.
 * User: marja
 * Date: 8/27/2017
 * Time: 9:28 AM
 */

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
// Get values from HTML input elements
    $code = $_GET['code'];
    $title = $_GET['title'];
    $lastchange = $_GET['lastchange'];
    $settlement = $_GET['settlement'];
    $location = $_GET['location'];
    $surface = $_GET['surface'];
    $numrooms = $_GET['numrooms'];
    $numbedrooms = $_GET['numbedrooms'];
    $floor = $_GET['floor'];
    $interior = $_GET['interior'];
    $numbathrooms = $_GET['numbathrooms'];
    $terrace = $_GET['terrace'];
    $climate = $_GET['climate'];
    $ownheat = $_GET['ownheat'];
    $internet = $_GET['internet'];
    $cabletv = $_GET['cabletv'];
    $elevator = $_GET['elevator'];
    $newbuilding = $_GET['newbuilding'];
    $parking = $_GET['parking'];
    $price = $_GET['price'];
    $deposit = $_GET['deposit'];
    $comission = $_GET['comission'];
    $description = $_GET['description'];
    $estatetype= $_GET['eestatetype'];
    $images = 'slika.jpg';
    $images = 'http://i.imgur.com/iacfFje.jpg,http://i.imgur.com/PofzcB3.jpg,http://i.imgur.com/GJ6VNqS.jpg,http://i.imgur.com/Fj1rwT9.jpg,http://i.imgur.com/bZdPBql.jpg';
    $phonenumber = $_GET['phonenumber'];



    $query = ("INSERT INTO real_estate_agency (code, title, LastChange, Settlement, Location, Surface, NumRooms, NumBedRooms, Floor, Interior, NumBathrooms, Terrace, Climate, OwnHeat, Internet, CableTV, Elevator, NewBuilding, Parking, Price, Deposit, Comission, Description, EstateType, Images, PhoneNumber) 
VALUES ('$code', '$title', '$lastchange', '$settlement', '$location', '$surface', '$numrooms', '$numbedrooms', '$floor', '$interior','$numbathrooms','$terrace', '$climate', '$ownheat', '$internet', '$cabletv', '$elevator','$newbuilding', '$parking','$price','$deposit','$comission','$description','$estatetype','$images','$phonenumber')");
    if(mysqli_query($conn, $query)){
        echo "Your advert was added successfully!";
    }else{
        echo "Error!";
        echo mysqli_error($conn); // Display Error
    }


}

$conn->close();