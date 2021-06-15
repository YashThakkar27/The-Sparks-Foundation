<?php
$server = "localhost";
$username = "root";
$password = "";
$databse = "bankingsystem";

$conn = mysqli_connect($server, $username, $password, $databse);

if (!$conn) {
	die("Databse Error");
}
