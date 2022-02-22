<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "d1";

$con = new mysqli($host, $user, $pass, $db);
if(!$con) {
    echo "There are some problems while connectiong database";
}

$name = $_POST['name'];
$age = $_POSt['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];

$qry = "INSERT INTO register (name, age, password, gender, email, phoneCode, phone) VALUES ('$name',$age ,'$password','$gender','$email',$phoneCode,$phone)";
$insert = mysqli_query($con,$qry);
if (!$insert) {
    echo "There are some problem while inserting data";
}
else {
    echo "data inserted";
}
?>
