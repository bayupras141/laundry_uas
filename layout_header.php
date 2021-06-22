<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laundry</title>
    <!-- Bootstrap Core CSS -->
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
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <?php if($title=='dashboard'){?>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <?php }?>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="#">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b style="color:black">
                            LAUNDRY
                        </b>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <b class="hidden-xs"></b> <?php echo $_SESSION['nama_user']; ?>  </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                    </li>
                    <li>
                        <a href="pelanggan_index.php" class="waves-effect <?php if($title=='pelanggan'){echo 'active';}?>"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Pelanggan</a>
                    </li>
                    
                    <li>
                        <a href="paket_index.php" class="waves-effect <?php if($title=='paket'){echo 'active';} ?>"><i class="fa fa-archive fa-fw" aria-hidden="true"></i> Paket</a>
                    </li>
                    
                    <li>
                        <a href="transaksi_index.php" class="waves-effect"><i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i> Transaksi</a>
                    </li>
                    
                </ul>
                <div class="center p-20">
                     <a href="logout.php" class="btn btn-info btn-block waves-effect waves-light" onclick="return confirm('Apakah anda yakin ingin logout? ? ');">Logout</a>
                 </div>
            </div>
            
        </div>
        <div id="page-wrapper">