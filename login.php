<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
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
        <link rel="stylesheet" type="text/css" href="assets/css/styleLogin.css" >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    </head>
    <body>
        <form method="post" action="cek_login.php" class="login-form">
            <h1>Login</h1>

        <div class="txtb">
            <input type="text" name="username" required>
            <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
            <input type="password" name="password" required>
            <span data-placeholder="Password"></span>
        </div>
        <?php if (isset($_GET['msg'])): ?>
            <small class="text-danger"><?= $_GET['msg'];  ?></small>
        <?php endif ?>
        <input type="submit" class="logbtn" value="login">
        
        <div class="bottom-text">Belum Daftar?
            <a href="registrasi.php">Daftar Sekarang</a>
        </div>
        </form>
    
        <script type="text/javascript">
            $(".txtb input").on("focus", function()
            {
                $(this).addClass("focus");
            });

            $(".txtb input").on("blur", function()
            {
                if ($(this).val()=="")
                $(this).removeClass("focus");
            });
        </script>
        
    </body>
    
</html>