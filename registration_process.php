<?php
include_once 'conn_database.php';
if(isset($_POST['btn-save']))
{

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$membership = $_POST['membership'];
$paddress = $_POST['paddress'];
$caddress = $_POST['caddress'];

mysqli_query($conn,"insert into myusers(firstname,lastname,email,number,gender,date,city,state,pin,membership,paddress,caddress) values ('$firstname','$lastname','$email','$number','$gender','$date','$city','$state','$pin','$membership','$paddress','$caddress')") or die(mysqli_error());
header('Location: userregis.php');
}
?> 