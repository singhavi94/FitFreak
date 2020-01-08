<?php
include_once 'conn_database.php';
$result = mysqli_query($conn,"SELECT * FROM career");
?>
 
<!DOCTYPE html>
<html>
<title>Fit Freak - Careers</title>
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
        <li><a href="clubfinder.html"><b>Club Finder</b></a></li>
        <li><a href="membership.html"><b>Membership</b></a></li>
        <li><a href="facilities.html"><b>Facilities</b></a></li>
        <li><a href="tryus.php"><b>Try Us</b></a></li>
        <li><a href="membership.html"><b>Buy Now</b></a></li>
      </ul>
    </div>
</nav>
 <style>
   #section1_fas{height:100%;padding-top: 130px;padding-bottom: 30px;background-image: url(image/40.jpg);background-repeat: no-repeat;
     background-size: cover;background-position: center;}
 </style>
<div id="section1_above" class="container-fluid">
  
</div>
<div id="section1_fas" class="container-fluid">
    <div class="container">
      <div class="row">
       
        <div class="col-lg-6" style="background-color:;">
          <h1 style="padding-bottom: 40px;">CAREER WITH US</h1>
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
          <div class="tryusone">
             <h1>STEP UP TO A FITTER CAREER</h1>
              <p>In Asia, we have over 2 clubs in 1 countrie with over 2,100 members. We have 3 clubs in India and over 50 employees here, many of whom have grown with us since we started in India.</p><br>

              <p>This growth has been built through the quality of our staff. Our successful mix of recruitment, training, future development and career opportunities enables us to continually exceed our employees’ expectations.</p><br>

              <p>We seek dynamic and passionate personnel to meet our rapid expansion needs. The opportunities for growth are tremendous, with more clubs opening. </p>
          </div>
        </div>  
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="background-color:;">
          <div class="tryustwo">
            <style>
              .tryustwo h1{font-family: Baloo Bhai;letter-spacing: 2px;text-align:left;}
              .tryustwo h2{font-family: Baloo Bhai;letter-spacing: 2px;text-align:left;font-size: 20px;}
              .tryustwo p{text-align:left;font-family:'Bigshot One';line-height: 30px;font-size: 20px;}
            </style>
          <h1>WORLD-CLASS FACILITIES</h1>
             <p>&nbsp &nbsp &nbsp Across our clubs, because members enjoy Fitness First like their second home, we strive to keep consistency in the look and feel of all our clubs by maintaining the world-class facilities we offer and the high standard of service.</p>
          <h2>Gym</h2>
            <p>&nbsp &nbsp &nbsp Fit Freak specialises in safe cardiovascular exercise programmes to enable you to improve your lifestyle, health and general wellbeing. Exercise is great for weight loss, shaping and toning and is in fact the only way to lose weight in the right places and keep it off! Our spacious, air-conditioned gymnasiums are fully equipped with a comprehensive range of cardio equipment such as treadmills, steppers and ellipticals. At your disposal is also 3 tons of free weights & machine equipment along with a stretch area. Besides this, we offer a ton of encouragement you need to achieve your goals.</p>
          <h2>Studio</h2>
            <p>&nbsp &nbsp &nbsp Group exercise is a very important part of a cardiovascular workout - Our studio programs offer an exciting range of classes including world-renowned Les Mills programs such as BODYCOMBAT™, BODYPUMP™, BODYBALANCE™, BODYVIVE™, RPM™, Yoga, Tai Chi and everything in-between. The studio is built on a fully sprung floor for your safety and the programs have been designed specifically to cater to the needs of all ages and abilities.</p>
          <h2>Personal Training Counter</h2>
            <p>Personal Training is not just for movie stars! Now you can get affordable personal training to help you achieve your fitness goals. Maximize results with minimum time! For more information on how we can help you achieve your goals, please speak to our Fitness Manager or any of our Personal Trainers.</p>
          <h2>Cardio Theater</h2>
            <p>Exercise is more fun with personalised audio-visual entertainment. Whether you enjoy watching music videos, news or the latest sporting event, the cardio theatre will make that 5 mile run just fly by. Exercise no longer need to be boring with cardio theatre giving you a choice of 5 to 6 Astro channels to keep you entertained whilst you are exercising.</p>
          <h2>Cycling Studio</h2>
            <p>After receiving great feedback, we now have dedicated Cycling studios in many of our clubs. Spinning is a fun and exciting-bike based aerobic workout ideal for all fitness levels. You can burn up to 500 – 600 calories in a class!</p>
          <h2>Member's Lounge</h2>
            <p>After spending an hour or two sweating it out in the gym, the member's lounge is the perfect place to unwind. Relax, read the paper, chat with other members and friends as well as enjoy complimentary tea and coffee in the members’ lounge.</p>
          <h2>Luxurious changing Room</h2>
            <p>With relaxation being an important part of a complete exercise programme, treat yourself to the luxurious changing room with shower facilities and complimentary toiletry, hairdryers, restrooms & personalised lockers.</p>
          </div>
        </div>  
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="background-color:;">
          <div class="tryustwo">
             <h1>OUR ROLES</h1>
             <p>The various career opportunities or positions available include the following:</p>
               <h2>Sales Executive</h2>
               <h2>Sales Manager</h2>
               <h2>Club Manager</h2>
               <h2>General Manager</h2>
               <h2>Personal Trainer</h2>
               <h2>Floor Trainer</h2>
               <h2>Fitness Manager</h2>
               <h2>Customer Care Executive</h2>
               <h2>Nutitionist/Dietician</h2><br><br><br>               <hr />
               <h2 style="text-align: center;">For current job positions you can submit your resume stating the position <br>that you are interested in to:</h2>

<p style="font-style: bold; text-align: center;">The Human Resources Department</p>

<p style="font-style: bold; text-align: center;">  Email: careersfitfreak@gmail.com</p>
          </div>
          
        </div>  
      </div>
    </div>
        <div class="tryusone"><br>
            <h1>APPLY NOW</h1>
            <p>Give your Career the right work out with us !</p>
            <p>All form fields are required unless otherwise indicated.</p>
          </div>
        <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
         <form action="careers_process.php" method="post" enctype="multipart/form-data">
             <div class="tryusone"><br>
           
             <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                          <label>Applying Designation <span>*</span></label>
                          <select class="form-control" name="careerdesi">
                            <option value="Sales Executive">Sales Executive</option>
                            <option value="Sales Manager">Sales Manager</option>
                            <option value="Club Manager">Club Manager</option>
                            <option value="General Manager">General Manager</option>
                            <option value="Personal Trainer">Personal Trainer</option>
                            <option value="Floor Trainer">Floor Trainer</option>
                            <option value="Floor Trainer">Floor Trainer</option>
                            <option value="Fitness Manager">Fitness Manager</option>
                            <option value="Customer Care Executive">Customer Care Executive</option>
                            <option value="Nutitionist/Dietician">Nutitionist/Dietician</option>
                          </select>
                         </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Name <span>*</span></label>
                  <input type="text" name="careername" class="form-control" placeholder="e.g. Avinash">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Email Address <span>*</span></label>
                  <input type="email" name="careeremail" class="form-control" placeholder="e.g. Avinash@gmail.com">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Contact Number <span>*</span></label>
                  <input type="text" name="careerphone" class="form-control" placeholder="12548">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Awards & Certifications <span>*</span></label>
                  <input type="text" name="careercerti" class="form-control" placeholder="e.g. National...">
                </div>
              </div>
            </div>
             <!--<div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="file" name="image"/ class="form-control">
                  <button type="submit">Upload</button>
                </div>
              </div>
            </div>-->

            
            <!--<div class="row">
              <div class="col-lg-12">
                <label>Below Are The Uploaded Documents</label>
                 <div class="image_well">
                   <div class="well"> </div>
                 </div>
              </div>
            </div>-->
            <style>
              .image_well .well{background-color: white;border-radius: 0px;border:1px solid #1c2833;}
            </style>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Applying On Date</label>
                  <input type="date" name="careerterms" class="form-control">
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
