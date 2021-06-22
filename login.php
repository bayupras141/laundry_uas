<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="assets/css/styleLogin.css" >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
        <!-- Alert -->
        <script src="assets/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="assets/dist/sweetalert2.min.css">
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
            <script>
                var type = "<?php echo $_GET['type']?>"
                var title = "<?php echo $_GET['title']?>"
                var msg = "<?php echo $_GET['msg']?>"
                Swal.fire({
                    icon: type,
                    title: title,
                    text: msg,
                })
            </script>
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
        <script>

        </script>
        
    </body>
    
</html>