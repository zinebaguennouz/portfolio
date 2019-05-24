<?php
    session_start();
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName="zineb";
    $db =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and password sent from form    
      $myemail =(strtolower($_POST["email"]));
      $mypassword =($_POST['password']);      
      $sql = "SELECT id FROM zineb-login WHERE email = '$myemail' and password= '$mypassword'";
      $result = mysqli_query($db,$sql);  
      $count = mysqli_num_rows($result);     
      // If result matched $myemail and $mypassword, table row must be 1 row	
      if($count = true) {   
//         $_SESSION['login_user'] = $myemail;     
         header("location: docs/index.html");
      }else{
          echo "no";
//        header("location:log-in.php");
//        die();    
     }
   }  
?>