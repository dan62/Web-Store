<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- Website title -->
  <title>Shopping Cart</title>
  
  <!-- Bootstrap css imported -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!-- Custom css -->
  <link rel="stylesheet" href="css/product.css" />
  
  <!-- Defining some extra styles to be using on this page -->
  <style type="text/css">
   #product-info {
	 position: absolute;
	 left: 45%;
	 top: 111px;
	 width: 523px;
	 height: 365px;
	 z-index: 1;
    }
</style>
<?php include 'headers/product_header.php';?>
</head>
<script src="js/shopping_cart.js"></script>
<body>

<!-- Bootstrap navigation bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid"style="padding:6px;" >
    <div class="navbar-header" >
      <img src="images/logo.png" height="40px" width="40px" class="pull-left" style="padding-left:10px;">&nbsp;<a class="navbar-brand" href="#" style="padding-left:20px;">Next-Store</a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="<?php echo $cart_link; ?>"><?php echo $cart; ?></a></li>
      <li><a href="<?php echo $uname_link; ?>"><?php echo $u_name ?></a></li>
     <!-- <li class="active"><a href="cart.php"><span class="badge pull-right"id="cart">0</span><i class="glyphicon glyphicon-shopping-cart"></i></a></li> -->
    </ul>
  </div>
</nav>

<!-- Displaying product info -->
<div id="product-info">
  <div class="product-title"><?php echo $product_title; ?></div>
  <div class="product-desc"><?php echo $description; ?></div>
  <span class="product-price"><?php echo $price; ?> Baht</span>
  <span class="product-stock">In Stock</span>
  <br /><br />
  <div class="btn-group cart">
    <button type="button" class="btn btn-success" onClick="increment_cart()"> Add to cart </button>
   
      <div class="btn-group wishlist" style="margin-left:10px;">
       <button type="button" class="btn btn-danger" onClick="wishlist()"> Add to wishlist </button><p id=wishlist></p>
    </div>
  </div>
  <hr />
</div>
<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-12">
					<div class="product col-md-3 service-image-left">
                    
						<center>
							<img id="item-display" src="images/<?php echo $image; ?>" alt=""></img>
						</center>
					</div>
					
					<div class="container service1-items col-sm-2 col-md-2 pull-left">
						<center>
							<a id="item-1" class="service1-item">
								<img src="images/<?php echo $image; ?>" alt=""></img>
							</a>
							<a id="item-2" class="service1-item">
								<img src="images/<?php echo $image; ?>" alt=""></img>
							</a>
							<a id="item-3" class="service1-item">
								<img src="images/<?php echo $image; ?>" alt=""></img>
							</a>
						</center>
					</div>
				</div>
					
				<div class="col-md-7">
					<div class="product-title"></div>
                    <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<div class="product-price"></div>
					<div class="product-stock"></div>
				</div>
			</div> 
		</div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<!-- Different tab options -->
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
						<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>
						
					</ul>
				
				<!-- Creating multiple tabs -->
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
						    <!-- Detailed information about product -->
							<section class="container product-info">
								A special take on the original, the Nike Air VaporMax Flyknit SE Unisex Running Shoe keeps delivering the lightweight, bouncy ride of our most innovative cushioning system to date. The laces are left behind for a simplified, sleek design.

								<h3>Nike Sports Shoes Features:</h3>
								<li>Ultra thick rubber base for fast reflexes</li>
								<li>Trendy design keeping up with latest trends in society</li>
								<li>Black in color dirt resistant</li>
								<li>Washable with our special shoes spray</li>
								<li>A three year warranty and lifetime access to Nike's legendary technical support and customer service</li>
								<li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
								<li>MTBF: 100,000 hours</li>
								<li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC, C-tick</li>
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
								
						</section>
						
					</div>
					<div class="tab-pane fade" id="service-three">
												
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
<br/>

<!-- footer of website -->
<footer class="navbar navbar-inverse" style="margin-bottom:0px;">
        <p class="text-center" style="color:#FFF; padding-top:8px;">Copyright &copy; Next-Store <script>document.write(new Date().getFullYear())</script></p>
    </footer>
	<!-- Javascript imported Bootstrap and some custom js -->
  <script src="js/custom.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
