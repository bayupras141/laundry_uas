<?php
session_start();
$conn = mysqli_connect('localhost','root','','uas_laundry');

$username = stripslashes($_POST['username']);
$password = md5($_POST['password']);
$query = "SELECT * FROM user where username='$username' AND password = '$password'";
$row = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($row);
$cek = mysqli_num_rows($row);


if($cek > 0){ 
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $username;
    $_SESSION['nama_user'] = $data['nama_user'];
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
    $msg = 'Username Atau Password Salah';
    header('location:index.php?msg='.$msg);
}
