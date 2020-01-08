<?php
include_once 'conn_database.php';
$result = mysqli_query($conn,"SELECT * FROM tryus");
?>

<!DOCTYPE html>
<html>
<title>Fit Freak - Try Us</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="image/0025.png" height="10px">
  <!--<meta http-equiv="refresh" content="5">-->
  <!--“Why go to the multiple platforms for all these solutions when there is one unified platform for the Fitness Solutions”-->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Chicle' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="WOW Slider, HTML Slideshow, Slideshow HTML" />
 
  <!-- Start WOWSlider.com HEAD section -->
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>
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
       <a class="navbar-brand" href="#section1">Fit Freak</a>
       <img src="image/0024.png" height="70px" width="70px;">
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
  #section1_above{background-color: blue;height: 77px;}
  #section1_fas{height: 400px;padding-top: 0px;padding-bottom: 30px;background-image: url(image/71.jpg);background-repeat: no-repeat;background-position: center;background-size: cover;}
  #section1_fas h1{text-align: center;color: white;letter-spacing: 2px;font-family: Aladin;padding-top: 80px;font-size:4em;}
  #section1_fas h3{text-align: center;color: white;letter-spacing: 2px;font-family: Aladin;}
  #section1_fas .down_well .well{border-radius: 0px;margin-top: 100px;height:100%;background-color:white;border:none;}
   .down_well .well h4{text-align: center;font-family: Chicle; letter-spacing: 1px;line-height: 40px;font-size: 24px;}
  
  #section2_fas{background-color:;height:100%;padding-top: 30px;padding-bottom: 30px;}
  #section2_fas p{text-align: center;font-family:times new roman;font-weight:bold;line-height: 30px;font-size: 20px;}

  
</style>
<div id="section1_above" class="container-fluid">
  
</div>
<div id="section1_fas" class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-3" style="background-color:;"></div>
        <div class="col-lg-6" style="background-color:;">
          <h1>Fit Freak Premier</h1>
          <h3>Kashipur, Ballia</h3>
        </div>
        <div class="col-lg-3" style="background-color:;"></div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-1" style="background-color:;"></div>
        <div class="col-lg-10" style="background-color:;">
          <div class="down_well">
            <div class="well">
              <h4>Fitness First feature progressive programs with world class fitness equipment, trainers and nutrition counselors to help you your fitness further. We have the widest range of group fitness classes such Yoga, Aerobics, Zumba, Les Mills favorites & much more.</h4>
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
        <div class="col-lg-6" style="background-color:;">
          <div class="tryusone"><br>
          <h1>TRY US</h1><br>
            <div class="row">
              <div class="col-lg-6" style="background-color:;">
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/93.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                        <h4>Group Exercise</h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/91.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                        <h4>Gym Floor</h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/86.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                       
                        <h4>Cycle Studio</h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/84.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                       <h4>Free Weights</h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/81.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                        <h4>Cardio Area</h4>
                      </div>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/92.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                         <h4>Yoga</h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/82.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                       <h4>F&B</h4>
                      </div>
                    </div>
                  </div>

              </div>
              <div class="col-lg-6" style="background-color:;">
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/94.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                       <h4>Internet Station</h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/85.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                        <h4>Steam Room</h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/83.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                        <h4>freestyle</h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/88.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                        <h4>Shower Area</h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/87.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                       <h4>Personal Training</h4>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/89.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                       <h4>Strength Area</h4>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-lg-4" style="background-color:;">
                     <img src="image/90.png" width="100%">
                    </div>
                    <div class="col-lg-8" style="background-color:;">
                      <div class="club_fas">
                        <h4>Members Lounge</h4>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
      </div>
        </div>
        <div class="col-lg-6" style="background-color:#abb2b9;">
          <form action="membership_process.php" method="post">
            <div class="tryusone"><br>
              <h1>GET SPECIAL MEMBERSHIP OFFER*</h1><br>
                     
             <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                              <label>City <span>*</span></label>
                           <input type="text" required="" name="city" placeholder="e.g. Ballia" id="city" class="form-control">
                         </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Name <span>*</span></label>
                  <input type="text" class="form-control" placeholder="e.g. Avinash" name="name" id="name" required="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Email Address <span>*</span></label>
                  <input type="email" class="form-control" placeholder="e.g. Avinash@gmail.com" name="email" id="email" required="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Contact Number <span>*</span></label>
                  <input type="text" class="form-control" placeholder="12548" name="phone" id="number" required="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Date <span>*</span></label>
                  <input type="date" class="form-control" name="terms" id="number" required="">
                </div>
              </div>
               
            </div> <div class="row">
                           
                          <div class="col-lg-12">
                            <div id="alert_coment_error"></div><br>
                             <div id="alert_coment_sucess"></div>
                          </div>
                           
                    </div>

             <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <button class="btn btn-success btn-block" type="submit" onclick="validate_comment()" name="btn-save" style="font-family: Chicle;letter-spacing: 3px;">Submit</button>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <button class="btn btn-success btn-block" type="reset" style="font-family: Chicle;letter-spacing: 3px;">Reset</button>
                </div>
              </div>
            </div>
<br>            
          </div>
        </form>

        </div>
         
      </div>
           
    </div>
</div>
 <script>
  function validate_comment() {
        var city= document.getElementById("city").value;
     var name= document.getElementById("name").value;
     var email= document.getElementById("email").value;
     var number= document.getElementById("number").value;
       
        
    
    if(city.length==0 && name.length==0 && email.length==0 && number.length==0)
      {
      document.getElementById("alert_coment_error").innerHTML='<div class="alert alert-danger alert-dismissible" style="color:white;font-weight:bold;font-family:Arial;text-align:center; border-radius0px;background-color:#CA656D ;"><a href="#" class="close"data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Some required information is missing or incomplete.</div>'
      ;
    }
    else{
      document.getElementById("alert_coment_sucess").innerHTML='<div class="alert alert-success alert-dismissible" style="color:white;font-weight:bold;font-family:Arial;text-align:center; border-radius0px;background-color:#2C37A0;"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Indicates a successful or positive action.</div>'
  ;}
  }  
</script>
 

<style>
  .club_fas h4{text-align: center;font-family:Chicle;letter-spacing: 2px;font-size: 15px; padding-top: 15px;margin-bottom: -10px;}
  .tryusone p{text-align:left;font-family:times new roman;font-weight:bold;line-height: 30px;font-size: 20px;}
  .tryusone h1{font-family: Chicle;letter-spacing: 2px;}
  .tryusone input{border-radius: 0px;height: 40px; border:1px solid #1c2833;font-family: Chicle;letter-spacing: 3px;}
   .tryusone select{border-radius:0px;height: 40px;border:1px solid #1c2833;font-family: Chicle;letter-spacing: 3px;}
  .tryusone label{letter-spacing: 3px;font-family: Chicle;font-size: 14px;}
  .tryusone span{color: red;}
  .tryusone .btn-success{border-radius: 0px;background-color:#1c2833;border:none; }
    .tryusone .btn-success:hover{background-color:#1c2833;border:none;transition: 0.7s;border-radius: 30px; }
    .tryusone h4{text-align:left;font-family:times new roman;line-height: 30px;font-size: 20px;}
    
     
</style>
 <div id="section3_fas" class="container-fluid">
   <div class="container">
     <div class="row">
       <div class="col-lg-6" style="background-color:;">
          <div class="tryusone">
            <h1>TRY FREESTYLE™</h1><br>
            <h4>Our dedicated Freestyle™ areas and fitness experts can help you discover new training techniques and exercises that offer a dynamic and efficient full-body workout.</h4>
            <br><br><br>
            <h1>TRY A CLASS</h1><br>
            <h4>Come into any of your club and see how our range of group exercise classes can take your fitness further. Why not sample yoga, spinning or circuit training.</h4>
          </div>
       </div>
       <script>
        $(document).ready(function(){
          $("#button_action").click(function(){
            $(".termscon").toggle();
          });
        });
      </script>
       <div class="col-lg-6" style="background-color:">
        <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  
                  <button class="btn btn-info btn-block" id="button_action" type="Submit"  style="font-family: Chicle;letter-spacing: 3px;">Terms & Conditions</button>
                </div>
              </div>
            </div>
         <div class="termscon" style="display: none;">

            <div class="row">
               <div class="col-lg-1"></div>
              
              <div class="col-lg-10">
                <p>1. &nbsp &nbsp Subject to Fitness First India terms and conditions of entry (available in club).</p>
            <p>2. &nbsp &nbsp Valid for first time visitors aged 16 years and above only. </p>
            <p>3. &nbsp &nbsp Valid for local residents or expatriates residing in India only.</p>
            <p>4. &nbsp &nbsp An appointment must be made in advance for the first visit which must be accompanied by a Fitness First India Consultant.</p>
            <p>5. &nbsp &nbsp Trial pass is for one-time use only and cannot be accumulated. Must be used within 30 days.</p>
            <p>6. &nbsp &nbsp Not valid with any other offer. Other terms and conditions may apply.</p>
            <p>7.&nbsp &nbsp By clicking on submit you authorize Fitness First India or its representative to contact you via phone, email or SMS overriding your NDNC registration.</p>
              </div>
            </div>
            
         </div>
       </div>
     </div>
   </div>
 </div>
 <style>
   #section3_fas{background-color:;height:100%;padding-top: 30px;padding-bottom: 30px;}
  #section3_fas p{text-align:left;font-family:times new roman;font-size: 16px;}
  #section3_fas .btn-info{border-radius: 0px;background-color:#1c2833;border:none; }
    #section3_fas .btn-info:hover{background-color:#1c2833;border:none; }
 </style>
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
