<?php
session_start();
require 'connection_details.php';

$conn    = Connect();
$first_name    = $conn->real_escape_string($_POST['fname']);
$last_name    = $conn->real_escape_string($_POST['lname']);
$email   = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password1']);
$mobile = "000000";
$address1 = "0000";
$address2 = "0";

$query   = "INSERT into user_info (first_name,last_name,email,password,mobile,street_address,post_code_id) VALUES('" . $first_name . "','" . $last_name . "','" . $email . "','" . md5($password) . "','" . $mobile . "','" . $address1 . "','" . $address2 . "')";

$_SESSION["uid"] = mysqli_insert_id($conn);
		$_SESSION["name"] = $first_name;
		$ip_add = getenv("REMOTE_ADDR");
		
$query_update   = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";

$success = $conn->query($query);
$success2 = $conn->query($query_update);

if (!$success || !$success2) {
    die("Couldn't enter data: ".$conn->error);

}

header('Location: profile.php');

$conn->close();

?>