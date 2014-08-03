
<?php
include('config.php');
/*
// define database credentials
$host='127.0.0.1';
$user='root';
$password='';
$database='ulacbackend';

// create db connection
$conn = mysql_connect($host,$user,$password) or die('Error: could not connect to database'.mysql_error());

mysql_select_db($database,$conn) or die('Error in selecting db.'.mysql_error());
*/

// restore from info to variables
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
$password = $_POST['password'];
$lockModel = $_POST['lockModel'];
$key_combination = $_POST['key_combination'];

// user front-end to validate data.

// insert to db
$sql = "INSERT INTO tbl_key (id, name, phone, email, city, address, password, lockModel, key_combination)
		VALUES (NULL,'$name', '$phone', '$email', '$city', '$address', '$password','$lockModel','$key_combination')";

if(mysql_query($sql))
{
    echo 'information saved successfully.';
}else
{
    echo 'Error: We encountered an error while inserting the new record.'.mysql_error();
}
mysql_close($mysqli);

?>