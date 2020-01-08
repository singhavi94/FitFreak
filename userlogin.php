<!DOCTYPE html>
<html>
<title>Login - Fit Freak</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="image/0025.png" height="10px">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Chicle' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
 
  <link rel="stylesheet" type="text/css" href="authen.css">
</head>
<body onload="myFunction()" style="margin:0;">
  
         <div id="loader"><img src="image/New GIF/01.gif"></div>
  
     <div style="display:none;" id="myDiv" class="animate-bottom"> 
  <div class="section_login">
    <div class="container">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <style>
            .section_login{background-image: url(image/58.jpg);background-repeat: no-repeat;background-size: cover; height: 625px;}
            .user_login_well .well{background-color:transparent; border-radius: 0px;padding: 0px;border:none;margin-top: 100px;}
          </style>
          <div class="user_login_well">
            <div class="well" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                <div class="row">
                  <div class="col-lg-6" style="background-color: white;border-top-right-radius: 80px;border-bottom-left-radius: 20px;">
                    <div class="whole_image">
                      <img src="image/giphy.gif" width="100%">
                   
                    <h2 style="color:#1c2833;">Whatever your goal - We'll get you there.</h2>
                     </div>

                  </div>

                  <div class="col-lg-6" style="background-color:transparent;padding-bottom: 22px;border-top-right-radius: 20px;border-bottom-right-radius: 40px;" >
                     <div class="login_theme">
                    <h2>Login</h2>
                    <p>Don't have Account ? <span><a href="userregis.php"> Create Your Account</a></span></p>
                   
                    <div class="row">
                      <div class="col-lg-1"></div>
                      <div class="col-lg-10">
                        <form action="admin_dashboard.php" method="post">
                      <div class="form-group">
                        <label>Email/Username</label>
                        <input type="text" class="form-control" placeholder="Username" required="" name="uname">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" required="" name="pwd">
                      </div>
                      <p id="worng_cred" style="color: orange;font-family: times new roman"></p>

                     <br>
                       
                     <div class="row">
                       <div class="col-lg-6">
                         <button class="btn btn-info btn-block" name="login" type="submit" onclick="valid();">Login</button>
                       </div>
                       <div class="col-lg-6"> 
                        <button class="btn btn-danger btn-block" type="reset">Reset</button>
                       </div>
                     </div>

                    </form>
                      </div>
                      <div class="col-lg-1"></div>
                    </div>
                  <div class="row">
                      
                  </div>
 


                  </div>
                  </div>
                </div>
            </div>
          </div>
          
        </div>
        <div class="col-lg-2"></div>
      </div>
  </div>
</div>

</div>
 <script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>
