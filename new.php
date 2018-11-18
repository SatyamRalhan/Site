<?php
$dbhost='localhost';
$dbname='satyam';
$dbuser='satyam';
$dbpassword='applemango';

$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if(!$conn)
{
	die("Connection Failed".mysqli_connect_error());

}

echo "Connection Successful";

$sql=



mysql_close($conn);
?>