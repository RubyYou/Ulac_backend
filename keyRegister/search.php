<?php 
// This page do:
// output all data in this page and then integrate search


$db_host="127.0.0.1";
$db_name="ulacbackend";
$username="root";
$password="";
$db_con=mysql_connect($db_host,$username,$password);
$connection_string=mysql_select_db($db_name);
// connection

mysql_connect($db_host,$username,$password);
// make sure database is the active one
mysql_select_db($db_name) or die("not found the db".mysql_error());



// =================== Fetch news output / Success !===================================================

$query =sprintf("SELECT * From tbl_key ORDER BY id ");
	$result = mysql_query($query) or die(mysql_error());

?>

	<label for="search"> Search for something.... </label><input/>

	<table >
		<thead>
			<tr background='grey'>
				<td>Name</td>
				<td>Phone</td>
				<td>Email</td>
				<td>City</td>
				<td>Address</td>
				<td>LockModel</td>
				<td>Key# and Combinations</td>
			</tr>
		</thead>
		<tbody>
<?php 
	while($row = mysql_fetch_array($result)){
?>
			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['city']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['lockModel']; ?></td>
				<td><?php echo $row['key_combination']; ?></td>
			</tr>
<?php 
	}
?>

		</tbody>
	</table>


<style>
table{
	border: 1px solid black;
}
thead{
	background: #ccc;
}
td{
	padding:7px;
}
</style>