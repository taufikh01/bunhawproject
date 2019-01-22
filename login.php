<?php
include "koneksi.php";
// memulai session
session_start();
if (isset($_SESSION['typeuser']))
{
 // jika level admin
 if ($_SESSION['typeuser'] == "Admin")
   {   
    header('location:pages/admin/index.php');
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['typeuser'] == "Petugas")
   {
       header('location:pages/petugas/index.php');
   }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login | ThRentCar</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">
    <div class="container">
      <form class="login-form" method="POST" action="proses_login.php">        
        <div class="modal" id="panduan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Buku Panduan Untuk Login</h4>
                    </div>
                    <div class="modal-body">
                        <pre><center></center>
            
                         1.Aplikasi ini hanya bisa digunakan oleh user yg telah 
                            mempunyai username dan password.
                         2.Untuk Memakai Aplikasi ini ,User diharuskan untuk
                            login terlebih dahulu.
                         3.Aplikasi ini Mempunyai 2 type user yaitu petugas dan admin/pemilik.
                         3.Jika Username dan password yg dimasukan bertipe user "Petugas",
                            maka user akan diarahkan ke halaman petugas.
                         4.Dan Jika Username dan password yg dimasukan bertipe user "Admin",
                            maka user akan diarahkan ke halaman Admin.
                         </pre>
                            
                       </div>
                    
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dalog -->
        </div><!-- /.modal -->
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"><a title="Add Widget" data-toggle="modal" href="#panduan">Panduan Login</a></span>
            </label><?php
             
                                include "koneksi.php";
                                $sql="select * from login";
                                $query=mysql_query($sql);
                               $array=mysql_fetch_array($query);
            echo "<button class='btn btn-primary btn-lg btn-block' type='submit'  href='index.php?username=$array[username]';>"?>Login</button>
            <button class="btn btn-info btn-lg btn-block" type="reset">Reset</button>
        </div>
      </form>

    </div>


  </body>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    
      
</html>
