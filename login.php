<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/custom-styles.css" rel="stylesheet" type="text/css">
	<link href="css/login_styles.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	#chrismas {
	position: absolute;
	left: 81px;
	top: 98px;
	width: 346px;
	height: 345px;
	z-index: 1;
}
    #present {
	position: absolute;
	left: 971px;
	top: 238px;
	width: 382px;
	height: 274px;
	z-index: 2;
}
    </style>
    <?php include 'headers/login_header.php';?>
  </head>
  <body>
   
  
    <div id="chrismas"><img src="images/chris.jpeg" width="350" height="520" alt="chris"></div>
    <div id="present"><img src="images/present.png" width="393" height="272" alt="present"></div>
    
    <!-- Navigation Bar using Bootstrap-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="images/logo.png" height="40px" width="40px"><a class="navbar-brand" href="#">&nbsp;Next-Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
              <span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sign-up.html">Sign Up</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Signin header -->
    <h2 class="active"> Sign In </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form name="Form1" method="post" action="login_check.php">
      <p id=error style="color:red;"></p>
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email" onblur="emailValidation()" >
      <input type="text" id="password1" class="fadeIn third" name="password1" placeholder="Password" onblur="ordinaryValidation3()">
      <input type="submit" class="fadeIn fourth" value="Log In" id="submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="Admin_Pannel/page-login.html">Admin Login?</a>
    </div>

  </div>
</div>
	
 
    <!-- Bootstrap core JavaScript and custom js-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
    
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/register_validation.js"></script>
    
    
	
 
</body>

</html>
