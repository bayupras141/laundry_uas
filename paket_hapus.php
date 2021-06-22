<?php 
require 'functions.php';
$sql = "DELETE FROM paket WHERE id_paket = " . stripslashes($_GET['id']);
$exe = mysqli_query($conn,$sql);

if($exe){
    $success = 'true';
    $title = 'Berhasil';
    $message = 'Menghapus Data';
    $type = 'success';
    header('location: paket_index.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
} else {
    $success = 'true';
    $title = 'Gagal';
    $message = 'Menghapus Data';
    $type = 'failed';
    header('location: paket_index.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
}
