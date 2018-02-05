<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_updated";

$conni = new mysqli($servername, $username, $password, $dbname);
$cat_id    = $conni->real_escape_string($_POST['pCategory']);
$product_name = $conni->real_escape_string($_POST['pTitle']) ;
$price =$conni->real_escape_string($_POST['pPrice']); 
$keywords = $conni->real_escape_string($_POST['keywords']);
$description = $conni->real_escape_string($_POST['pDescription']);
$product_id = $conni->real_escape_string($_POST['pID']);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE products SET product_title='$product_name' , product_price='$price' , product_keywords='$keywords' , product_desc='$description' , product_cat ='$cat_id'  WHERE product_id='$product_id'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
	$message = "Product Updated";
    echo "<script type='text/javascript'>alert('$message');</script>";
	header('Location: products.php');
	
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>