
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Next-Store Online</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/custom-styles.css" rel="stylesheet" type="text/css">
    <link href="css/about_custom.css" rel="stylesheet">
    
    <?php include 'headers/about_header.php';?>
  </head>

  <body>
   
  <!--Main Navigation Bar using bootsttrap-->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
	  
	  <!-- Website logo-->
        <img src="images/logo.png" height="40px" width="40px"><a class="navbar-brand" href="#">&nbsp;Next-Store</a>
        
		<!-- Bootstrap toggle button incase window is rezized menu items go to a toggle menu -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
	    <!-- Menu items -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $cart_link; ?>"><?php echo $cart; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $user_link; ?>"><?php echo $user; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	<!-- Website div blocks defined by custom css used to display images and text -->
    <div id="pay-easy">
      <h1>Effortless Payments</h1>
      <br>
      What makes us different is our ability to make transactions quickly we have incoorperated some of the most secure and quick premium payment plaforms on the market enabling you to make transactions quickly. <br>
      <br>
      You shall never never need to wait for long tedious hours jsut to purchase a product, choose us today and get it quick!</div>
    
	<!-- Website div blocks defined by custom css used to display images and text -->
	<div id="payment-image">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><img src="images/payment.png" width="500" height="133" alt="pay"></p>
    </div>
	
	<!-- Website div blocks defined by custom css used to display images and text -->
    <div id="about-image"><img src="images/about-image.jpg" alt="about" width="697" height="449" id="Aimage"></div>
    
	<!-- Website div blocks defined by custom css used to display images and text -->
    <div id="about-text"><h1>About Us</h1><br>Next E-commerce platform is an online service where retailers can meet with customers and make digital product exchanges, We are not only the most popular online store in Thailand we are also the most economical with the most affordable delivery costs in the market. <br><br> We provide the best deals and products at your finger tips. Sign-up today to receive notifications of host products</div>

  <!-- Footer using Bootstrap-->
  <div class="footer">
   <p>Copyright &copy; Next-Store <script>document.write(new Date().getFullYear())</script></p>
  </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="js/index-js.js"></script>
</body>
</html>
