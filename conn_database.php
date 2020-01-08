
<?php 

                      $host = "localhost";
                      $dbusername = "root";
                      $dbpassword = "";
                      $dbname = "fitfreak";
                      $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
                if (mysqli_connect_error()) 
                {
                  die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
                }
                
?>


  

 
