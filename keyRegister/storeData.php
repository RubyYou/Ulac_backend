
<?php
include('config.php');

// restore form info to variables
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
$password = $_POST['password'];
$lockModel = $_POST['lockModel'];
$key_combination = $_POST['key_combination'];

$mysqli_in = $mysqli->prepare("INSERT INTO tbl_key (id, name, phone, email, city, address, password, lockModel, key_combination)
		VALUES (NULL,'$name', '$phone', '$email', '$city', '$address', '$password','$lockModel','$key_combination')");

$mysqli_in->execute(); 


	if($mysqli_in)
	{
	    echo 'information saved successfully.';
	}else
	{
	    echo 'Error: We encountered an error while inserting the new record.'.mysql_error();
	}
$mysqli_in->close();

?>