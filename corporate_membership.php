<?php
include_once 'conn_database.php';
$result = mysqli_query($conn,"SELECT * FROM corporate");
?>


<!DOCTYPE html>
<html>
<title>Fit Freak - Corporate Membership</title>
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
   #section1_fas{height:100%;padding-top: 130px;padding-bottom: 30px;background-image: url(image/abf_banner.jpg);background-repeat: no-repeat;
     background-size: cover;background-position: center;}
 </style>
<div id="section1_above" class="container-fluid">
  
</div>
<div id="section1_fas" class="container-fluid">
    <div class="container">
      <div class="row">
       
        <div class="col-lg-6" style="background-color:;">
          <h1 style="margin-top: 60px;">CORPORATE MEMBERSHIP</h1>
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
        <div class="col-lg-2"></div>
             <div class="col-lg-8" style="background-color:#abb2b9;">
          <form action="corporate_process.php" method="post">
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
                   <label>Date<span>*</span></label>
                  <input type="date" id="box" name="terms" required="" class="form-control"> 
                </div>
              </div>
               
            </div> 
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Company Name<span>*</span></label>
                  <input type="text" class="form-control" placeholder="e.g ....Ltd" name="company" id="number" required="">
                </div>
              </div>
            </div>

            <div class="row">
                           
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
            <div class="col-lg-2"></div>
      </div>
<div class="row">
   <div class="col-lg-2"></div>
 <script>
        $(document).ready(function(){
          $("#button_action").click(function(){
            $(".termscon").toggle();
          });
        });
      </script>
       <div class="col-lg-8" style="background-color:">
        <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  
                  <button class="btn btn-info btn-block" id="button_action" type="Submit"  style="font-family: Chicle;letter-spacing: 3px;">Terms & Conditions</button>
                </div>
              </div>
            </div>
         <div class="termscon" style="display: none;">

            <div class="row">
              
              <div class="col-lg-12">
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
        <div class="col-lg-2"></div>
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
 <div id="section3_fas" class="container-fluid">
   <div class="container">
     <div class="row">
      <div class="tryusone">
        <h1>WHAT DOES FITNESS MEAN FOR YOUR WORKFORCE?</h1>
        <div class="col-lg-3" style="background-color:;">
          <div class="well">
            <img src="image/108.jpg" width="100%" alt="">
          </div>
           <p>Healthy people perform better at work</p>
        </div>
        <div class="col-lg-3" style="background-color:;">
          <div class="well">
            <img src="image/105.jpg" width="100%" alt="">
          </div>
           <p>Improved fitness builds focus and confidence</p>
        </div>
        <div class="col-lg-3" style="background-color:;">
          <div class="well">
            <img src="image/106.jpg" width="100%" alt="">
          </div>
           <p>Staying in shape reduces health problems </p>
        </div>
        <div class="col-lg-3" style="background-color:;">
          <div class="well">
            <img src="image/107.jpg" width="100%" alt="">
          </div>
           <p>Regular exercise improves concentration</p>
        </div>
        <br>
        <br><br>
        <p>From improved mental health to sharper decision-making, a fitter workforce can make a big difference to your business. Our experience is in keeping members motivated and feeling fit – let us help your employees do the same.</p><br>
        <p>If you're looking for a wellness programme for your company, contact us, we will be happy to explore a host of value-added activities that we can provide including wellness programmes, fitness talks, health checks, fitness assessments, exercise and preview classes at your company’s premises or at our clubs. We can even support your company's events such as sports day, staff retreat or team-building events.</p>
      </div>
     </div>
   </div>
 </div>
 <style>
   #section3_fas{height:100%;background-color: #1c2833;}
     .tryusone p{text-align:center;font-family:'Bigshot One';color:white;line-height: 30px;font-size: 20px;}
     .tryusone .well{border-bottom-right-radius: 20px;border-top-left-radius: 20px;border:2px solid #1c2833;padding: 0px;overflow: hidden;cursor: pointer;}
      .tryusone .well img:hover{transition: .6s;transform: scale(1.2);}
  .tryusone h1{font-family: Baloo Bhai;letter-spacing: 2px;text-align: center;color: white;}
  .tryusone h2{font-family: Baloo Bhai;letter-spacing: 2px;text-align: center;font-size: 20px;}
 </style>

  <div id="section4_fas" class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="tryustwo">
          <h1>MEMBERSHIP BENEFITS</h1>
          <h2>FOR YOUR COMPANY</h2>
          <p>- Improve team performance</p>
          <p>- Grow employee confidence and morale</p>
          <p>- Create a happier working environment</p>
          <p>- Support a healthier workforce</p>
          <p>- Attract new recruits and increase retention</p><br>
          <h2>FOR YOUR EMPLOYEES</h2>
          <p>- Access innovative classes, fitness programmes and training facilities</p>
          <p>- Workout with your colleagues and motivate each other</p>
          <p>- Explore new workout ideas and techniques. Train your own way</p>
          <p>- Find out how to keep fit even when you’re not in the club</p>
          <p>- Work with our experts to get the most from your membership</p>
           <br>
           <h1>BLOG</h1>
            <div class="tryusone">
               <div class="row">
                 <div class="col-lg-4">
                   <div class="well">
                      <img src="image/105.jpg" width="100%" alt="">
                    </div>
                     <p style="color: #1c2833;">Bring Fitness into your Business Agenda
                      Everyone's read the research. Everyone's heard the experts. Having a fit workforce means better....</p>
                        <button class="btn btn-info btn-block" type="button"><a href="blog.html"> Read more</a></button>
                      <div class="vertical_line"></div>
                 </div>
                <div class="col-lg-4">
                   <div class="well">
                      <img src="image/106.jpg" width="100%" alt="">
                    </div>
                    <p style="color: #1c2833;">Bring Fitness into your Business Agenda
                      Everyone's read the research. Everyone's heard the experts. Having a fit workforce means better....
                    </p> <button class="btn btn-info btn-block" type="button"><a href="blog.html"> Read more</a></button>
                      <div class="vertical_line"></div>
                 </div>
                 <div class="col-lg-4">
                   <div class="well">
                      <img src="image/107.jpg" width="100%" alt="">
                    </div>
                     <p style="color: #1c2833;">Bring Fitness into your Business Agenda
                      Everyone's read the research. Everyone's heard the experts. Having a fit workforce means better....</p>
                       <button class="btn btn-info btn-block" type="button"><a href="blog.html"> Read more</a></button>
                      <div class="vertical_line"></div>
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
                   <li><a href="careers.html">Careers</a></li>
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
                    <li><a href="corporate_membership.html">Corporate Membership</a></li>
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
