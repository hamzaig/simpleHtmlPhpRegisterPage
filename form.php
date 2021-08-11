<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webengineering";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  echo "fail";
}

$name = $_REQUEST["name"];
$age = $_REQUEST["age"];
$gender = $_REQUEST["gender"];
$country = $_REQUEST["country"];

// echo $name;
// echo $age;
// echo $gender;
// echo $country;

$insert_sql = "INSERT INTO assignment2 (name, age,gender,country) VALUES ('$name', $age,'$gender','$country')";
//echo $insert_sql;exit;

if ($conn->query($insert_sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " ;
}

$conn->close();
?> 
