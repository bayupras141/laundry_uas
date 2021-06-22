<?php 
require 'functions.php';
$sql = "DELETE FROM member WHERE id_member = " . $_GET['id'];
$exe = mysqli_query($conn,$sql);

if($exe){
	$success = 'true';
    $title = 'Berhasil';
    $message = 'Menghapus Data';
    $type = 'success'; 
    header('location: pelanggan_index.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
}
 ?>

