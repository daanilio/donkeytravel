<?php
//Danilio Veldhoen
$servername = "localhost";
$dbname = "donkeytravel";
$username = "root";
$password = "";


$conn = new mysqli("localhost","root","","bas");

// Check connection
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}

