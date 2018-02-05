<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_updated";

//$conn = new mysqli($servername, $username, $password, $dbname) or die($conn->connect_error);
$conn = new PDO('mysql:host=localhost; dbname=shop_updated','root', '');

//$product_image = $conn->real_escape_string($_POST['pImage']);

 
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"assets/".$file_name);
         echo "Success";
		 
		 
      }else{
         print_r($errors);
      }
   }
       if(isset($_FILES['image'])){
         $location=addslashes($_FILES['image']['name']);
	   }else{
		   $location = "placeholder.jpg";
	   }
         $product_title    = $_POST['pTitle'];
         $product_price   = $_POST['product_price'];
         $product_keywords    = $_POST['pKeywords'];
         $product_description = $_POST['description'];
         $product_category = $_POST['category'];

         $brand ="2";
		 $id = "3";
 
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO products (product_id,product_cat, product_brand, product_title, product_price, product_desc,        product_keywords,product_image)VALUES ('$id','$product_category', '$brand','$product_title', '$product_price', '$product_description', '$product_keywords','$location')";
 
$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='index.php'</script>";

?>