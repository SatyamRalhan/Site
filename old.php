<?php

$dbhost='localhost';
$dbuser='satyam';
$dbpass='applemango';
$dbname='satyam';


$conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
}

$sql="insert into student values ('Kishan','19','No')";

if ($conn->query($sql)===TRUE) {
	echo ("New record created successfully");
}