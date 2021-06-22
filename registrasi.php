<?php
$conn = mysqli_connect('localhost','root','','uas_laundry');

function bisa($conn,$query){
    $db = mysqli_query($conn,$query);

    if($db){
        return 1;
    }else{
        return 0;
    }
}

if(isset($_POST['submit'])){
    $nama     = $_POST['nama'];
    $username     = $_POST['username'];
    $password = MD5($_POST['password']);
    $query = "INSERT INTO user (nama_user,username,password) values ('$nama','$username','$password')";
        
    $execute = bisa($conn,$query);
    if($execute == 1){
        $success = 'true';
        $title = 'Berhasil';
        $message = 'Berhasil menambahkan data baru';
        $type = 'success';
        header('location: login.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
    }else{
        echo "Gagal Tambah Data";
    }
}
?>
<!DOCTYPE html>
<HTML lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Registrasi</title>
        <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- toast CSS -->
        <link href="assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
        <!-- morris CSS -->
        <link href="assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="assets/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <!-- animation CSS -->
        <link href="assets/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- color CSS -->
        <link href="assets/css/colors/default.css" id="theme" rel="stylesheet">
        <!-- DataTables -->
        <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="assets/css/styleRegistrasi.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="title">Registrasi</div>
            <form action="" method="POST"> 
                <div class="user-detail">
                    <div class="input-box">
                        <span class="detail">Nama</span>
                        <input name="nama" type="text" placeholder="Masukan nama" required>
                    </div>
                    <div class="input-box">
                        <span class="detail">Username</span>
                        <input name="username" type="text" placeholder="Masukan username" required>
                    </div>
                    <div class="input-box">
                        <span class="detail">Password</span>
                        <input name="password" type="password" placeholder="Masukan password" required>
                    </div> 
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="registrasi">
                </div>
            </form>
        </div>
    </body>
</HTML>