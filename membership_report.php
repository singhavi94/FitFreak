<?php
include_once 'conn_database.php';
$result = mysqli_query($conn,"SELECT * FROM tryus");
?>

 
<!DOCTYPE html>
<html>
<title>Fit Freak - Corporate Membership Report</title>
<head>
  <link rel="icon" href="image/0025.png" height="10px">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Check out our Fit Freak center membership details, fees, FAQ &amp; benefits. Choose the membership that's perfect for you to improve your fitness &amp; stay active.">

  <meta name="keywords" content="Fit Freak club membership, Fit Freak center membership fees, Fit Freak India, Fit Freak, fit freak fees, Fit Freak gym membership fees, Fit Freak membership">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Chicle' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Baloo Bhai' rel='stylesheet'>
  <script type="text/javascript" src="swiper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="swiper.min.css">
  <link rel="stylesheet" type="text/css" href="index _men.css">
  <link rel="stylesheet" type="text/css" href="fit_freak_common.css">
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
       <a class="navbar-brand" href="index_men.html">Fit Freak</a>
       <a href="index_men.html"><img src="image/0024.png" height="70px" width="70px;"></a>
    </div>
    <div class="arrow_navigation"><i class="fa fa-play"></i></div>

    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
        <li><a href="membership_report.php"><b>Membership</b></a></li>
        <li><a href="membership_report.php"><b>Try Us</b></a></li>
        <li><a href="corporate_report.php"><b>Corporate Membership</b></a></li>
        <li><a href="contact_report.php"><b>Contact Us</b></a></li>
        <li><a href="careers_report.php"><b>Careers</b></a></li>
        <li><a href="feedack_report.php"><b>Feedback</b></a></li>
      
      </ul>
    </div>
</nav>
 <style>
   #section1_fas{height:100%;padding-top: 130px;padding-bottom: 30px;background-image: url(image/21.jpg);background-repeat: no-repeat;
     background-size: cover;background-position: center;}
     #section1_fas h1:before
{
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 20%;
  width: 100%;
  height: 100%;
  color: white;

  overflow: hidden;
  animation:type 10s steps(30) infinite;
  white-space: nowrap;
}
@keyframes type
{
  0%
  {
    width: 0;
  }
  50%
  {
    width: 100%;
  }
  100%
  {
    width: 0;
  }
}
 </style>
<div id="section1_above" class="container-fluid">
  
</div>
<div id="section1_fas" class="container-fluid">
    <div class="container">
      <div class="row">
       <div class="col-lg-3" style="background-color:;"></div>
        <div class="col-lg-6" style="background-color:;">
          <a href="admin_dashboard.php" data-toggle="tooltip" title="Go Back To Admin Dashboard !"><h1 style="margin-top: 120px;text-align: center;" data-text="WELCOME ADMIN"></h1></a>
        </div>
        <div class="col-lg-3" style="background-color:;"></div>
              </div>
    </div>
 <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
    
</div>
 <div class="wave1">
  <img src="image/login_down03.png" width="100%">
</div>
<style>
   #section2_fas{height:100%;background-color:;}
   .admin_dash .well{background-color: white;border-radius: 0px;padding: 10px;}
   .admin_dash h2{font-family: Baloo Bhai;letter-spacing: 2px;color: #1c2833;text-align: center;text-transform: uppercase;margin-top: -90px;}
   .admin_dash h3{font-family: Baloo Bhai;letter-spacing: 2px;color: #1c2833;text-align: center;}
   .admin_dash h4{font-family: Baloo Bhai;letter-spacing: 2px;color: #1c2833;text-align:left;}
   .admin_dash h5:before {

  counter-increment: my-sec-counter;
  content: "" counter(my-sec-counter) ". ";
}

</style>
<div id="section2_fas" class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="background-color:;">
           <div class="admin_dash">
            <h2>MEMBERSHIP REPORT</h2>
             <h3>Applied Candidates Details</h3>
                  <div class="well" style="background-color: white;border-radius: 0px;border:1px solid #1c2833;">
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    if($i%2==0)
                    $classname="even";
                    else
                    $classname="odd";
                    ?>
           <div class="admin_well_rows">
           
              <div class="well" style="background-color: white;margin-top:20px;border:1px solid #1c2833;border-style: dashed;">
                <div class="row">
                  <div class="col-lg-12">
                    <!--<h5 style="color:#1c2833;text-align: center;font-size: 26px;"><i class="fa fa-list-alt" style="color: #1c2833;"></i>Canditate </h5>-->
                      <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                          <h4>City</h4>
                          <h4>Name</h4>
                          <h4>Email</h4>
                          <h4>Phone Number</h4>
                          <h4>Applied On Date</h4>
                        </div>
                        <div class="col-lg-1">
                          <h4>:</h4>
                          <h4>:</h4>
                          <h4>:</h4>
                          <h4>:</h4>
                          <h4>:</h4>
                           
                        </div>
                        <div class="col-lg-5">
                                <h4><?php echo $row["city"]; ?></h4>
                                <h4><?php echo $row["name"]; ?></h4>
                                <h4><?php echo $row["email"]; ?></h4>
                                <h4><?php echo $row["phone"]; ?></h4>
                                <h4><?php echo $row["terms"]; ?></h4>
                        </div>
                        <div class="col-lg-1"></div>
                      </div>        
                  </div>  
                </div>
              </div>
            </div>
<hr />
<?php
$i++;
}
?>
              </div><!--Second Well-->
           </div>
        </div>  
      </div>
    </div>
</div>
 
 <style>
   #section3_fas{height:400px;background-color: ;}
</style>

<div id="section11" class="container-fluid">
       <div class="row">
         <div class="col-lg-4" style="background-color:;">
            
         </div>
         
          <div class="col-lg-4" style="background-color:;">
              <div class="row">
                <div class="col-lg-5 col-xs-5" style="background-color:;"></div>
                <div class="col-lg-3 col-xs-3" style="background-color:;">
                  <a href="#section1_fas"><div class="curve_to_top"></div>
                  </a>
                </div>
                <div class="col-lg-4 col-xs-4" style="background-color:;"></div>
              </div>
               <div class="row">
                <div class="col-lg-12" style="background-color:;">
                  <a href="#section1_fas"><h4>To The Top</h4></a>
                </div>
               
              </div>
          </div>
           <div class="col-lg-4 " style="background-color:;">
               <div class="row">
             <div class="col-lg-9 col-xs-9">
               <h2>Fit Freak</h2>
             </div>
             <div class="col-lg-3 col-xs-3">
               <img src="image/0025.png" alt="" width="100%">
             </div>
           </div>
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
