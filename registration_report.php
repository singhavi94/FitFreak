<?php
include_once 'conn_database.php';
$result = mysqli_query($conn,"SELECT * FROM myusers");
?>

<?php
$uname="admin";
$pwd="admin";
session_start();
if(isset($_SESSION['uname'])){

  include_once 'registration_report.php';

}
else
{
  if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
    $_SESSION['uname']=$uname;
    echo "<script> location.href='admin_dashboard.php'</script>";
  }
  else {
    echo "<script> alert('Username or Password is incorrect')</script>";
    echo "<script> location.href='userlogin.php'</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<title>Admin Dashboard</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="image/logo_A.png" height="10px">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="WOW Slider, HTML Slideshow, Slideshow HTML" />
  <meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="index _men.css">

</head>
<body onload="myFunction()" style="margin:0;">
  
         <div id="loader"><img src="image/New GIF/01.gif"></div>
      
<div style="display:none;" id="myDiv" class="animate-bottom"> 
   <nav class="navbar navbar-default navbar-fixed">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar" style="border-radius: 0px;background-color:#FE0000;"></span>
        <span class="icon-bar" style="border-radius: 0px;background-color:#FE0000;"></span>
        <span class="icon-bar" style="border-radius: 0px;background-color:#FE0000;"></span>                        
      </button>
       <a class="navbar-brand" href="#section1">Fit Freak</a>
       <img src="image/0024.png" height="70px" width="70px;">
    </div>
    <div class="arrow_navigation"><i class="fa fa-play"></i></div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin_dashboard.php"><b>Home</b></a></li>
        <li><a href="registration_report.php"><b>User Report</b></a></li>
         <li><a href="comment_report.php"><b>Comment Report</b></a></li>
        <li><a href="membership_report.php"><b>Membership</b></a></li>
        <li><a href="logout.php"><b>Logout</b></a></li>
      </ul>
    </div>
</nav>
<style>
   
            .profile_image_well{margin-top: 20px;}
              .profile_image_well .well{background-color: white; padding: 5px;border-top-left-radius: 30px;border-bottom-left-radius: 0px;border-top-right-radius: 30px;border-bottom-right-radius: 0px;border:1px solid #2C37A0;overflow: hidden;}
               .profile_image_well .well img{border-top-left-radius: 30px;border-top-right-radius: 30px;}
               .profile_image_well .well img:hover{transition: 0.7s;transform: scale(1.4); cursor: pointer;}
         
            

</style>
  
  
<style>
  
.section_profile
{
  background-color:white;
  height: 100%;padding-top: 100px;
}
    #profile
  {
    padding-top:20px;
    height:100%;
    color: #fff; 
    padding-bottom: 20px;
     
 
  }
   #profile h2
   {
    letter-spacing: 3px;
    text-align: center;
    color: #0C8FF9;
   font-family: 'Acme';
     
   }
    #profile p
   {
    letter-spacing: 1px;
    text-align: center;
    font-family: rockwell;
    font-style: italic;
   }
   #profile h1
   {
    letter-spacing: 3px;
    text-align: center;
    font-family:rockwell; 
   }

</style>


    <div class="section_profile" style="background-color: white;">
      <div class="container">
        <div class="add_courier_well">
          <div id="profile" class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="admin_profile">

                  <h2><?php echo "<h2  style='color: #1c2833'>Welcome ".$_SESSION['uname']."</h2>"; ?></h2>
                  <div class="well" style="background-color: white;border-radius: 0px;border:1px solid #1c2833;">
                    <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<style>
  .details_fetch h3{font-family: rockwell;color: orange;}
    .details_fetch h4{font-family: rockwell;color: black;font-size: 18px;}
</style>
<tr class="<?php if(isset($classname)) echo $classname;?>">

<div class="quote_well">

  <div class="well" style="background-color: white;border:1px solid orange;">
    <div class="row">
      <div class="col-lg-2"><h3 style="color:#2C37A0;text-align: center;font-size: 26px;"><i class="fa fa-list-alt" style="color: #2C37A0;"></i></h3></div>
      <div class="col-lg-10"><h2 style="font-size: 16px;text-align: center;padding-bottom: 20px;color: #2C37A0;"> Details Of New Member</h2></div>
    </div>
    
   <style>
     .quote_well .well h3:before {

  counter-increment: my-sec-counter;
  content: "" counter(my-sec-counter) ". ";
}
.quote_well .well h4{color: black;}
   </style>
<div class="row">
  <div class="col-lg-12">
     <h2 style="font-size: 18px; color: #2C37A0;">New Member Details</h2>
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-4">
            <h4>First Name</h4>
            <h4>Last Name</h4>
            <h4>Phone Number</h4>
            <h4>Email</h4>
            <h4>Gender</h4>
            <h4>Date of Birth</h4>
            <h4>City</h4>
            <h4>State</h4>
            <h4>Membership Typle</h4>
            <h4>Permanent Address</h4>
            <h4>Communication Address</h4>
          </div>
          <div class="col-lg-1">
            <h4>:</h4>
            <h4>:</h4>
            <h4>:</h4>
            <h4>:</h4>
            <h4>:</h4>
            <h4>:</h4>
            <h4>:</h4>
             <h4>:</h4> 
              <h4>:</h4>
             <h4>:</h4>
               <h4>:</h4>  
          </div>
          <div class="col-lg-5">
             
                  <h4><?php echo $row["firstname"]; ?></h4>
                  <h4><?php echo $row["lastname"]; ?></h4>
                  <h4><?php echo $row["email"]; ?></h4>
                  <h4><?php echo $row["number"]; ?></h4>
                  <h4><?php echo $row["gender"]; ?></h4>
                  <h4><?php echo $row["date"]; ?></h4>
                  <h4><?php echo $row["city"]; ?></h4>
                  <h4><?php echo $row["state"]; ?></h4>
                  <h4><?php echo $row["membership"]; ?></h4>
                  <h4><?php echo $row["paddress"]; ?></h4>
                  <h4><?php echo $row["caddress"]; ?></h4>
          </div>
          <div class="col-lg-1"></div>
        </div>        
  </div>
    
   
</div>

  </div>
</div>

</tr>

 
<hr />
<?php
$i++;
}
?>
                  </div>
                </div>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  
<div id="section11" class="container-fluid">
 

       <div class="row">
         <div class="col-lg-4" style="background-color:;">
            
         </div>
          <div class="col-lg-4" style="background-color:;">
              <div class="row">
                <div class="col-lg-5 col-xs-5" style="background-color:;"></div>
                <div class="col-lg-3 col-xs-3" style="background-color:;">
                  <a href="#myDiv"><div class="curve_to_top"></div>
                  </a>
                </div>
                <div class="col-lg-4 col-xs-4" style="background-color:;"></div>
              </div>
               <div class="row">
                <div class="col-lg-12" style="background-color:;">
                  <a href="#myDiv"><h4>To The Top</h4></a>
                </div>
               
              </div>
          </div>
           <div class="col-lg-4" style="background-color:;">
            
         </div>
            
       </div>

  
    


  </div>
</div>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script> 
</body>
</html>
</style>