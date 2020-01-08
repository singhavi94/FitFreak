<?php
include_once 'conn_database.php';
if(isset($_POST['btn-save']))
{

$city = $_POST['concity'];
$name = $_POST['conname'];
$email = $_POST['conemail'];
$phone = $_POST['conphone'];
$terms = $_POST['conterms'];

mysqli_query($conn,"insert into contactus(concity,conname,conemail,conphone,conterms) values ('$city','$name','$email','$phone','$terms')") or die(mysqli_error());
header('Location: thank_welcome.html');
}
?> 