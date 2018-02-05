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
    <?php include 'headers/categories_header.php';?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
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
						<li><a href="categories.php" class="active"><i class="lnr lnr-inbox"></i> <span>Categories</span></a></li>
						<li><a href="sales.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Sales</span></a></li>
						<li><a href="orders.php" class=""><i class="lnr lnr-alarm"></i> <span>Pending Orders</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		
		<div class="col-md-6" style="left:30%; top:130px;">
        <button type="button" class="btn btn-success" style="margin-left:15%;" onclick="insertCategory();">Insert A Category</button>&nbsp;&nbsp;<button type="button" class="btn btn-primary" onclick="updateCategory();">Update A Category</button>&nbsp;&nbsp;<button type="button" class="btn btn-danger" onclick="deleteCategory();" >Delete A Category</button>
        <div id="category-entry"></div>
							<br><br>
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Product Categories</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Category ID</th>
												<th>Category Title</th>
											</tr>
										</thead>
										<tbody>
										
											<?php
                                               while ($row = mysql_fetch_array($query)) {
                                               echo "<tr>";
                                               echo "<td>".$row['cat_id']."</td>";
                                               echo "<td>".$row['cat_title']."</td>";
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
				<p class="copyright">&copy; 2018</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
    <script>
		function insertCategory() {
    var categoryText = "";
    var categoryElement = document.getElementById("category-entry");
    var categoryText = "";
	categoryElement.innerHTML = categoryText; 
    categoryText ="<br><h3>Please enter category details below</h3><br><form id='category_insert' method='post' action='category_add.php' role='form'><div class='messages'></div><div class='controls'><div class='row'><div class='col-md-6'><div class='form-group'><label for='category_id'>Category ID</label><input id='form_name' type='text' name='cID' class='form-control' placeholder='example: 231' required='required' data-error='Category ID is required.'><div class='help-block with-errors'></div><div> <class='col-md-6'><div class='form-group'><label for='category_name'>Category Name</label><input id='cName' type='text' name='cName' class='form-control' placeholder='example: Shoes' required='required' data-error='Category Name is required is required.'><div class='help-block with-errors'></div><button type='submit' class='btn btn-success' style='margin-left:0%;'>Insert A Category</button></div></div></form>";
	categoryElement.innerHTML = categoryText; 
};


function updateCategory() {
    var categoryText = "";
    var categoryElement = document.getElementById("category-entry");
    var categoryText = "";
	categoryElement.innerHTML = categoryText; 
    categoryText ="<br><h3>Please enter category id to update data</h3><br><form id='category_update' method='post' action='categories_update.php' role='form'><div class='messages'></div><div class='controls'><div class='row'><div class='col-md-6'><div class='form-group'><label for='category_id'>Category ID</label><input id='form_name' type='text' name='cID' class='form-control' placeholder='example: existing id like '1'' required='required' data-error='Category ID is required.'><div class='help-block with-errors'></div><div> <class='col-md-6'><div class='form-group'><label for='category_name'>Category Name</label><input id='cName' type='text' name='cName' class='form-control' placeholder='example: Type new title' required='required' data-error='Category Name is required is required.'><div class='help-block with-errors'></div><button type='submit' class='btn btn-primary' style='margin-left:0%;'>Update Category</button></div></div></form>";
	categoryElement.innerHTML = categoryText; 
};

	
	function deleteCategory() {
    var categoryText = "";
    var categoryElement = document.getElementById("category-entry");
    var categoryText = "";
	categoryElement.innerHTML = categoryText; 
    categoryText ="<br><h3>Please enter category id of the category you want to delete</h3><br><form id='contact-form' method='post' action='category_delete.php' role='form'><div class='messages'></div><div class='controls'><div class='row'><div class='col-md-6'><div class='form-group'><label for='category_id'>Category ID</label><input id='form_name' type='text' name='cID' class='form-control' placeholder='example: 1325' required='required' data-error='Category ID is required.'><div class='help-block with-errors'></div></div><button type='submit' class='btn btn-danger' style='text-align:center'>Delete</button></div>";
	categoryElement.innerHTML = categoryText; 
};
</script>
</body>

</html>
