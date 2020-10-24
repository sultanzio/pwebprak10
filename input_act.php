<?php
 include 'koneksi.php';

 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 $mysqli="INSERT INTO registrasi(Email, Username, Password, ID) values('$email', '$username', '$password', '')";
 $result= mysqli_query($konek, $mysqli);
 header("Location: pwebprak.php")

?>
