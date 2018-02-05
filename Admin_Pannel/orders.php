<!doctype html>
<html lang="en">

<head>
	<title>Next-Shop || Admin Area</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
<?php include 'headers/orders_header.php';?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">3</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Chaky Samir has ordered a new product!</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>Delivery for order 10927 is overdue</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Congratulations on reaching the milestone of 100 sales this month :-)</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Daniel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="products.php" class=""><i class="lnr lnr-cart"></i> <span>Products</span></a></li>
						<li><a href="categories.php" class=""><i class="lnr lnr-inbox"></i> <span>Categories</span></a></li>
						<li><a href="sales.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Sales</span></a></li>
						<li><a href="orders.php" class="active"><i class="lnr lnr-alarm"></i> <span>Pending Orders</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="col-md-6" style="left:30%; top:130px;">
       <button type="button" class="btn btn-success" style="margin-left:15%;" onclick="approveOrder();">Approve Order</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary" onclick="updateOrder();">Update Order</button>&nbsp;&nbsp;<button type="button" class="btn btn-danger"onclick="deleteOrder();" >Delete Order</button>
                            <br>
                            <div id="products-entry"></div><br>
							<br><br> 
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Pending Orders awaiting confirmation</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Order ID</th>
												<th>Cutomer ID</th>
                                                <th>Product Title</th>
                                                <th>Quantity</th>
                                                <th>Transaction ID</th>
                                                <th>Total Baht</th>
                                                <th>Status</th>
											</tr>
										</thead>
										<tbody>
										
											<?php
                                               while ($row = mysql_fetch_array($query)) {
												   $quantity = $row['quantity'];
                                               echo "<tr>";
                                               echo "<td>".$row['order_id']."</td>";
                                               echo "<td>".$row['user_id']."</td>";
                                               echo "<td>".$row['product_title']."</td>";
                                               echo "<td>".$row['quantity']."</td>";
                                               echo "<td>".$row['trx_id']."</td>";
											   echo "<td>".($row['SumOfproduct_price'] * $quantity)."</td>";
                                               echo "<td>".$row['p_status']."</td>";
											   
                                               echo "</tr>";
                                               }

                                            ?>
											<!--<tr>
												<td>product_id</td>
												<td>category_id</td>
												<td>product_title</td>
												<td>price</td>
												<td>description</td>
												<td>keywords</td>	</tr> -->
										
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 All Rights Reserved.</p>
			</div>
		</footer>
	</div>
    
    <script>
	function approveOrder() {
    var productText = "";
    var productsElement = document.getElementById("products-entry");
    var productsText = "";
	productsElement.innerHTML = productText; 
    productText ="<br><h3>Please enter the order id you would like to approve</h3><br><form id='contact-form' method='post' action='orders_approve' role='form'><div class='messages'></div><div class='controls'><div class='row'><div class='col-md-6'><div class='form-group'><label for='order_id'>Order ID</label><input id='oID' type='text' name='oID' class='form-control' placeholder='example: 2345' required='required' data-error='Order ID is required.'><div class='help-block with-errors'></div></div><button type='submit' class='btn btn-success' style='text-align:center'>Approve Order</button></div>";
	productsElement.innerHTML = productText; 
};

function updateOrder() {
    var productText = "";
    var productsElement = document.getElementById("products-entry");
   
    var productsText = "";
    productText = "<h3>Enter a order id to update your Order</h3><br><br><form id='contact-form' method='post' action='sales_update.php' role='form'><div class='messages'></div><div class='controls'><div class='row'><div class='col-md-6'><div class='form-group'><label for='order_id'>Order ID</label><input id='oID' type='text' name='oID' class='form-control' placeholder='example: 235' required='required' data-error='Order ID is required.'><div class='help-block with-errors'></div></div></div></div><hr><div class='row'><div class='col-md-6'><div class='form-group'><label for='customer_id'>Customer ID</label><input id='cID' type='text' name='cID' class='form-control' placeholder='example: 254' required='required' data-error='A Customer ID is required.'><div class='help-block with-errors'></div></div></div><div class='col-md-6'><div class='form-group'><label for='product_id'>Product ID</label><input id='pID' type='text' name='pID' class='form-control' placeholder='example: 26' required='required' data-error='Product ID is required.'><div class='help-block with-errors'></div></div></div></div><div class='row'><div class='col-md-6'><div class='form-group'><label for='quantity'>Product Quantity</label><input id='quantity' type='text' name='quantity' class='form-control' placeholder='example: 2' required='required' data-error='A quantity needs to be present.'><div class='help-block with-errors'></div></div></div><div class='col-md-6'><div class='form-group'><label for='trx_id'>Transaction ID</label><input id='trx_ID' type='text' name='trx_ID' class='form-control' placeholder='Enter the Transaction id used to purchase product'><div class='help-block with-errors'></div></div></div><div class='col-md-6'><div class='form-group'><label for='status'>Order Status</label><input id='oStatus' type='text' name='oStatus' class='form-control' placeholder='Enter Product Status'><div class='help-block with-errors'></div></div></div></div></div></div><button type='submit' class='btn btn-primary' style='margin-left:15%' id='submit'>Update Order</button></form>";
    productsElement.innerHTML = productText; 
};


	function deleteOrder() {
    var productText = "";
    var productsElement = document.getElementById("products-entry");
    var productsText = "";
	productsElement.innerHTML = productText; 
    productText ="<br><h3>Please enter the order id you would like to delete</h3><br><form id='contact-form' method='post' action='order_delete.php' role='form'><div class='messages'></div><div class='controls'><div class='row'><div class='col-md-6'><div class='form-group'><label for='order_id'>Order ID</label><input id='oID' type='text' name='oID' class='form-control' placeholder='example: 2345' required='required' data-error='Order ID is required.'><div class='help-block with-errors'></div></div><button type='submit' class='btn btn-danger' style='text-align:center'>Delete Order</button></div>";
	productsElement.innerHTML = productText; 
};
	</script>
    
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
