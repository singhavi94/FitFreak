<?php
include_once 'conn_database.php';
if(isset($_POST['btn-save']))
{

$city = $_POST['city'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$terms = $_POST['terms'];

mysqli_query($conn,"insert into tryus(city,name,email,phone,terms) values ('$city','$name','$email','$phone','$terms')") or die(mysqli_error());
header('Location: thank_welcome.html');
}
?> 