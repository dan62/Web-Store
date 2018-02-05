
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Next Store</title>
		<!--<link rel="stylesheet" href="css/bootstrap.min.css"/>  -->
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
        
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/custom-styles.css" rel="stylesheet" type="text/css">
  
  <script src="js/jquery2.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
        <?php include 'headers/profile_header.php';?>
	</head>
<body>
<script src="main.js"></script>

<!-- Light color Navigation bar for refined searching using bootstrap and a few inline styles that i defined-->
  <nav class="navbar navbar-expand-sm bg-light navbar-light">
   <ul class="navbar-nav">
    <div style="padding-right:540px;"></div>
    <div class="divider-vertical"></div>
    <li class="nav-item">
      <a class="nav-link" href="#">Product Order</a>
        <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Accending
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Assending</a></li>
      <li><a href="#">Decending</a></li>
    </ul>
  </div>
</div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Product Category</a>
      <div class="dropdown" style="padding-left:10px;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Category
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="electronics.html">Electronics</a></li>
      <li><a href="#">Mens Fashion</a></li>
      <li><a href="#">Womens Fashion</a></li>
      <li><a href="#">Home & Living</a></li>
      <li><a href="#">Toys</a></li>
      <li><a href="#">Sports</a></li>
      <li><a href="#">Other</a></li>
    </ul>
  </div>
    </li>
    <li class="nav-item">
        <label for="price-min" class="nav-link">Price Filter:</label>
        <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
      </li>
  </ul>
  <!-- Bootstrap divider "|" -->
  <div class="divider-vertical"></div>
</nav>

    <!--Dark main Navigation bar where menu names are located on and website options-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      
	  <!-- bootstrap container to place menu items-->
	  <div class="container">
	    <!-- logo of the website -->
        <img src="images/logo.png" height="40px" width="40px"><a class="navbar-brand" href="#">&nbsp;Next-Store</a>
		
		<!-- Bootstrap toggle button incase window is rezized menu items go to a toggle menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
		<!-- Menu items -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
          </ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.php" id="cart_container" class="nav-link" ><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">Sl.No</div>
									<div class="col-md-3 col-xs-3">Product Image</div>
									<div class="col-md-3 col-xs-3">Product Name</div>
									<div class="col-md-3 col-xs-3">Price in Baht.</div>
								</div>
							</div><br> 
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:blue;">Orders</a></li>
						<li class="divider"></li>
						<li><a href="" style="text-decoration:none; color:blue;">Change Password</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
        </div>
      </div>
    </nav>
	 <!-- Page Content -->
    <div class="container">

      <div class="row">
        
		<!-- side bar with product categories -->
        <div class="col-lg-3">
         
          <h3 class="my-4">Product Categories</h3>
          <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Search Products"  id="search"/>
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit" id="search_btn">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
            <br>
            <div  class="list-group" id="get_category">
           <!-- <a href="electronics.html" class="list-group-item">Electronics</a>
            <a href="#" class="list-group-item">Mens Fashion</a>
            <a href="#" class="list-group-item">Womens Fashion</a>
            <a href="#" class="list-group-item">Home & Living</a>
            <a href="#" class="list-group-item">Toys</a>
            <a href="#" class="list-group-item">Sports</a>
            <a href="#" class="list-group-item">Other</a> -->
          </div>
        </div>
        
        <!-- New column where products are to be listed -->
        <div class="col-lg-9">
          
		  <!-- Slideshow using bootstrap -->
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

		  <!-- Product Data displayed in columns row by row -->
          <div class="row">
           <div id="get_product">
		   </div>
           </div>
           </div>
        </div>
        </div>
    <!-- Footer using bootstrap -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Next-Store <script>document.write(new Date().getFullYear())</script></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript and custome javascript that i wrote (index-js) -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>
















































