<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop_updated";

$conni = new mysqli($servername, $username, $password, $dbname);
$cat_id    = $conni->real_escape_string($_POST['cID']);
$cat_name    = $conni->real_escape_string($_POST['cName']);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE categories SET cat_title='$cat_name' WHERE cat_id='$cat_id'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " Category UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>