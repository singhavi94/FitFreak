<?php
include_once 'conn_database.php';
if(isset($_POST['btn-save']))
{
// variables for input data
$desig = $_POST['careerdesi'];
$name = $_POST['careername'];
$email = $_POST['careeremail'];
$phone = $_POST['careerphone'];
$certi = $_POST['careercerti'];
$terms = $_POST['careerterms'];



// sql query for inserting data into database

mysqli_query($conn,"insert into career(careerdesi,careername,careeremail,careerphone,careercerti,careerterms) values ('$desig','$name','$email','$phone','$certi','$terms')") or die(mysqli_error());
header('Location: thank_welcome.html');
}
?> 