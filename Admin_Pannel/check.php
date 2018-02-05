<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'shop_updated');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   
   //if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
    //  if(isset($_POST["email"])){
    //  $myemail = mysqli_real_escape_string($db,$_POST["email"]);
    //  $mypassword = mysqli_real_escape_string($db,$_POST["password"]); 
      
    //  $sql = "SELECT id FROM admin_users WHERE email = '$myemail' and password = '$mypassword'";
    //  $result = mysqli_query($db,$sql);
    //  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
    //  $count = mysqli_num_rows($result);
      
     
		
    //  if($count == 1) {
       //  session_register("myemail");
       //  $_SESSION['login_user'] = $myemail;
         
         header("location: index.php");
    //  }else {
    //     $error = "Your Login Name or Password is invalid";
    //  }
   //}

?>