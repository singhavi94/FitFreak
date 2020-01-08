<?php
include_once 'conn_database.php';
$result = mysqli_query($conn,"SELECT * FROM contactus");
?>

<!DOCTYPE html>
<html>
<title>Fit Freak - Contact Us</title>
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
        <li><a href="train_with_us.html"><b>Train With Us</b></a></li>
        <li><a href="membership.html"><b>Membership</b></a></li>
        <li><a href="facilities.html"><b>Facilities</b></a></li>
        <li><a href="tryus.html"><b>Try Us</b></a></li>
        <li><a href="#section5_fas"><b>Buy Now</b></a></li>
      </ul>
    </div>
</nav>
 <style>
   #section1_fas{height:100%;padding-top: 130px;padding-bottom: 30px;background-image: url(image/102.jpg);background-repeat: no-repeat;
     background-size: cover;background-position: center;}
 </style>
<div id="section1_above" class="container-fluid">
  
</div>
<div id="section1_fas" class="container-fluid">
    <div class="container">
      <div class="row">
       
        <div class="col-lg-6" style="background-color:;">
          <h1 style="padding-bottom: 40px;">CONTACT US</h1>
        </div>

        <div class="col-lg-6" style="background-color:;"></div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-1" style="background-color:;"></div>
        <div class="col-lg-10" style="background-color:;">
          <div class="down_well">
            <div class="well">
              <h4>Fit Freak feature progressive programs with world class fitness equipment, trainers and nutrition counselors to help you your fitness further. We have the widest range of group fitness classes such Yoga, Aerobics, Zumba, Les Mills favorites & much more.</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-1" style="background-color:;"></div>
      </div>
    </div>
    
</div>
<div id="section2_fas" class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="background-color:;">
          <div class="tryusone"><br>
            <h1>CONTACT A CLUB</h1>
          </div>
        </div>  
      </div>
    </div>
</div>

<style>
    #section3_fas{background-color: white;height:100%;padding-top: 30px;padding-bottom: 30px;}
    #section3_fas .location_map {height:100%;border-radius: 0px;background-color: white;border:none;padding: 0px;}
    .location_address_one h3{font-family:Baloo Bhai;letter-spacing: 2px;padding-left: 20px;line-height: 30px;}
    .location_address_one h4{font-family:Baloo Bhai;letter-spacing: 2px;padding-left: 20px;line-height: 30px;}
    .location_address_two h3{font-family:Baloo Bhai;letter-spacing: 2px;padding-left: 20px;line-height: 30px;}
    .location_address_two h4{font-family:Baloo Bhai;letter-spacing: 2px;padding-left: 20px;line-height: 30px;}
    #section3_fas .vertical_line{height: 5px;background-color: #1c2833;width: 100%;margin-top: 3px;}
</style>
<div id="section3_fas" class="container-fluid">
  <div class="location_map">   
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.168601011222!2d77.55523341418746!3d13.02493309082093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3d639ef842c9%3A0x2a4877f5735011ca!2sBombay+Dyeing+Yashwanthapura!5e0!3m2!1sen!2sin!4v1547058656385" width="100%" height="256px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>   
  </div><br>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="location_address_one">
          <h3>Fit Freak Cub</h3>
          <h4>Kashipur New Colony,<br>
          Near Kadam Chauraha<br>
          Uttar Pradesh<br>
          277001</h4><br>
          
        </div>
      </div>
      <div class="col-lg-4" style="background-color: #abb2b9 ;">
        <div class="location_address_two">

        <h3>Opening Times</h3>
        <br>
        <h4>Monday to Saturday<br>
          6:30AM - 10:00PM<br>
          Sunday<br>
          7:00AM - 7:00PM</h4>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="location_address_two">
            <h3>Contact Us</h3>
        <h4><i class="fa fa-map-marker"></i> Get Directions<br>
         <i class="fa fa-phone"></i> 9450473559 <br>
          <i class="fa fa-envelope-open"></i> fitfreak@gmail.com<br>
          <i class="fa fa-eye"></i> Explore <br>
          <i class="fa fa-star"></i> Try this club for free</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="vertical_line"></div>
</div>
<div id="section4_fas" class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="tryusone"><br>
            <h1>SEND US A MESSAGE</h1>
            <p>If you have any feedback or questions about our clubs, our website or our services in general, please contact us by filling out the form.</p>
            <p>All form fields are required unless otherwise indicated.</p>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
         <form action="contact_process.php" method="post">
             <div class="tryusone"><br>
           
             <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                              <label>City <span>*</span></label>
                           <input type="text" required="" name="concity" placeholder="e.g. Ballia" id="city" class="form-control">
                         </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Name <span>*</span></label>
                  <input type="text" name="conname" class="form-control" placeholder="e.g. Avinash">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Email Address <span>*</span></label>
                  <input type="text" name="conemail" class="form-control" placeholder="e.g. Avinash@gmail.com">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Contact Number <span>*</span></label>
                  <input type="text" name="conphone" class="form-control" placeholder="12548">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Date</label>
                  <input type="date" name="conterms" class="form-control">
                </div>
              </div>
               
            </div><br><br>

             <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <button class="btn btn-success btn-block" type="Submit" name="btn-save" style="font-family: Chicle;letter-spacing: 3px;">Submit</button>
                </div>
              </div>
            </div>
<br>            
          </div>
        </form>
      </div>
      <div class="col-lg-3"></div>
    </div>
  </div>
</div>
<div id="section11" class="container-fluid">
       <div class="row">
         <div class="col-lg-4" style="background-color:;">
           <div class="row">
             <div class="col-lg-9 col-xs-9">
               <h2>Fit Freak</h2>
             </div>
             <div class="col-lg-3 col-xs-3">
               <img src="image/0025.png" alt="" width="100%">
             </div>
           </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="footer_list">
                 <h4>About Us</h4>
                 <ul>
                   <li><a href="aboutus.html"> Company Background</a></li>
                   <li><a href="careers.php">Careers</a></li>
                   <li><a href="press_room.html">Press Room</a></li>
                   <li><a href="reviews_and_test.html">Reviews & Testimonials</a></li>
                   <li><a href="complaincedoc.html">Compliance Documents</a></li>
                 </ul>
               </div>
            </div>
            <div class="col-lg-6">
              <div class="footer_list">
                 <h4>Membership</h4>
                 <ul>
                   <li><a href="membership_benefit.html">Memebership Benefit</a></li>
                   <li><a href="faq.html">Frequently Asked </a></li>
                    <li><a href="corporate_membership.php">Corporate Membership</a></li>
                    <li><a href="membertandc.html">Terms & Conditions</a></li>
                    <li><a href="blog.html">Blog</a></li>
                 </ul>
               </div>
            </div>
          </div>
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
             <h2>Follow Us On</h2>
            <br>
                <div class="social"> 
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                    <a href="#"><i class="fa fa-google"></i></a> 
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a> 
                    <a href="#"><i class="fa fa-twitter"></i></a>

                </div>
                  <div class="web_counter">
                    <div id="sfcldugw3zkryhy9ylalawa93arzdhte8b7"></div>
                    <script type="text/javascript" src="https://counter9.wheredoyoucomefrom.ovh/private/counter.js?c=ldugw3zkryhy9ylalawa93arzdhte8b7&down=async" async></script>
                    <noscript><a href="#" title="web counter" dissabled><img src="https://counter9.wheredoyoucomefrom.ovh/private/freecounterstat.php?c=ldugw3zkryhy9ylalawa93arzdhte8b7" border="0" title="web counter" alt="web counter"></a></noscript>
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
