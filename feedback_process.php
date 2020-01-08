<?php
include_once 'conn_database.php';
if(isset($_POST['btn-save']))
{


$name = $_POST['feedbackname'];
$email = $_POST['feedbackemail'];
$phone = $_POST['feedbackphone'];
$coment = $_POST['feedbackcoment'];
$date = $_POST['feedbackdate'];
$city = $_POST['feedbackcity'];
$state = $_POST['feedbackstate'];


mysqli_query($conn,"insert into userfeedback(feedbackname,feedbackemail,feedbackphone,feedbackcoment,feedbackdate,feedbackcity,feedbackstate) values (
	'$name','$email','$phone','$coment','$date','$city','$state')") or die(mysqli_error());
header('Location: thank_welcome.html');
}
?> 