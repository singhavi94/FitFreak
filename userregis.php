<?php
include_once 'conn_database.php';
$result = mysqli_query($conn,"SELECT * FROM myusers");
?>
<!DOCTYPE html>
<html>
<title>Registration - Fit Freak</title>
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
          <div class="user_login_well">
            <style>
              .section_login{background-image: url(image/58.jpg);background-repeat: no-repeat;background-size: cover; height: 100%;padding-bottom: 20px;}
              .user_login_well .well{background-color:transparent; border-radius: 0px;padding: 0px;border:none;margin-top: -40px;}
            </style>
            <div class="well" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                 <div class="login_theme">
                    <h2>Club Membership Registration <a href="userlogin.php">Login</a></h2>
                    <p>Complete the form below to sign up for our membership services.</p>
                   <style>
                     .login_theme h2{text-align: center;}
                     .login_theme p{text-align: center;}
                   </style>
                    <div class="row">
                      <div class="col-lg-1"></div>
                      <div class="col-lg-10">
                        <form action="registration_process.php" method="post">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Firstname</label>
                              <input type="text" class="form-control" placeholder="Firstname" required="" name="firstname">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Lastname</label>
                              <input type="text" class="form-control" placeholder="Lastname" required="" name="lastname">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control" placeholder="Email" required="" name="email">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Number</label>
                              <input type="text" class="form-control" placeholder="Number" required="" name="number">
                            </div>
                          </div> 
                        </div>
                         <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Gender</label>
                                <div class="row">
                                  <div class="col-lg-12">
                                    <select class="form-control" required="" name="gender">
                                       <option>Select</option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                       <option value="Others">Others</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Date Of Birth</label>
                              <input type="date" class="form-control" placeholder="Date of Birth" required="" name="date">
                            </div>
                          </div> 
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>City</label>
                              <input type="text" class="form-control" placeholder="City" required="" name="city">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>State</label>
                           <select class="form-control" class="col-sm-4" id="sel1" required="" name="state" style="text-transform:;">
                                <option>Select</option>   
                             <option value="Andra Pradesh">Andra Pradesh</option>
                             <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                             <option value="Assam">Assam</option>
                             <option value="Bihar">Bihar</option>
                             <option value="Chhatisgarh">Chhatisgarh</option>
                             <option value="Goa">Goa</option>
                             <option value="Gujarat">Gujarat</option>
                             <option value="Haryana">Haryana</option>
                             <option value="Himachal Pradesh">Himachal Pradesh</option>
                             <option value="Jammu and kashmir">Jammu and Kashmir</option>
                             <option value="Jharkhand">Jharkhand</option>
                             <option value="Karnataka">Karnataka</option>
                             <option value="Kerala">Kerala</option>
                             <option value="Madhya Pradesh">Madhya Pradesh</option>
                             <option value="Maharashtra">Maharashtra</option>
                             <option value="Manipur">Manipur</option>
                             <option value="Meghalaya">Meghalaya</option>
                             <option value="Mizoram">Mizoram</option>
                             <option value="Nagaland">Nagaland</option>
                             <option value="Orissa">Orissa</option>
                             <option value="Punjab">Punjab</option>
                             <option value="Rajasthan">Rajasthan</option>
                             <option value="Sikkim">Sikkim</option>
                             <option value="Tamil Nadu">Tamil Nadu</option>
                             <option value="Telagana">Telagana</option>
                             <option value="Tripura">Tripura</option>
                             <option value="Uttranchal">Uttranchal</option>
                             <option value="Uttar Pradesh">Uttar Pradesh</option>
                             <option value="West Bengal">West Bengal</option>
                        </select>
                         </div>
                          </div> 
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Pin</label>
                              <input type="text" class="form-control" placeholder="Pin" required="" name="pin">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Membership Type</label>
                             <select class="form-control" class="col-sm-4" id="sel1" required="" name="membership" style="text-transform:;">
                                <option>Select</option>
                               <option value="Andra Pradesh">Andra Pradesh</option>
                               <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                               <option value="Assam">Assam</option>
                               <option value="Bihar">Bihar</option>
                            </select>
                            </div>
                          </div> 
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Permanent Address</label>
                              <input type="text" class="form-control" placeholder="Permannent Address" required="" name="paddress">
                            </div>
                          </div>
                           <div class="col-lg-6">
                            <div class="form-group">
                              <label>Communication Address</label>
                              <input type="text" class="form-control" placeholder="Communicatio Address" required="" name="caddress">
                            </div>
                          </div>
                        </div>
                   
                      <div class="row">
                       <div class="col-lg-6">
                         <button class="btn btn-info btn-block" type="submit" name="btn-save" onclick="valid();">Login</button>
                       </div>
                       <div class="col-lg-6"> 
                        <button class="btn btn-danger btn-block" type="reset">Reset</button>
                       </div>
                     </div>
                       <br>
                         <br>
                        </form>
                      </div>
                      <div class="col-lg-1"></div>
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
