<?php
$link = mysqli_connect("localhost", "root", "", "shop_updated");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$category_id = mysqli_real_escape_string($link, $_REQUEST['cID']);
$category_title = mysqli_real_escape_string($link, $_REQUEST['cName']);
 
// attempt insert query execution
$sql = "INSERT INTO categories (cat_id, cat_title) VALUES ('$category_id', '$category_title')";
if(mysqli_query($link, $sql)){
    echo "Category added successfully!";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>