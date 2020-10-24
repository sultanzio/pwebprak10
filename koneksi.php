<?php 
$server="localhost";
$username="root";
$password="";
$db="member";

$konek=mysqli_connect($server, $username, $password);
$select_db = mysqli_select_db($konek, $db);


?>