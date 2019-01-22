<?php 
session_start();
if($_SESSION['typeuser']=="Petugas"){
 header('location:../../login.php'); 
}
if(empty($_SESSION['typeuser'])){
 header('location:../../login.php'); 
}  
?>
            <?php
            include "../../koneksi.php";
                    $username=$_SESSION['username'];
                    $sql="select * from login where username='$username'";
                    $query=mysql_query($sql);
                    $tampil=mysql_fetch_array($query)or die (mysql_error());
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

    <title>ThRentCar | Admin</title>

    <!-- Bootstrap CSS -->    
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../../css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../../css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="../../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="../../assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="../../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="../../css/owl.carousel.css" type="text/css">
	<link href="../../css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="../../css/fullcalendar.css">
	<link href="../../css/widgets.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/style-responsive.css" rel="stylesheet" />
	<link href="../../css/xcharts.min.css" rel=" stylesheet">	
	<link href="../../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/js/jquery-ui.css" />
    <link rel="stylesheet" href="../../assets/js/jquery.dataTables.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-theme.min.css">
		        
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
             <a href="index.html" class="logo">TH<span class="lite">RentCar</span></a>
            <!--logo end-->
            <?php
            include "../../koneksi.php";
                    $username=$_SESSION['username'];
                    $sql="select * from login where username='$username'";
                    $query=mysql_query($sql);
                    $array=mysql_fetch_array($query)or die (mysql_error());
             ?>
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                           
                                                    <img alt="" src="../../img/<?php echo $array['foto']; ?>" width="30">
                            </span>
                            <span class="username"><?php echo $array['nama']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                 <a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li class="eborder-top">
                                <a href="../../logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->


      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="user.php">User</a></li>
                          <li><a class="" href="supir.php">Supir</a></li>
                          <li><a class="" href="mobil.php">Mobil</a></li>
                          <li><a class="" href="pemilik.php">Pemilik Mobil</a></li>
                          <li><a class="" href="typemobil.php">Tipe Mobil</a></li>
                          <li><a class="" href="merkmobil.php">Merk Mobil</a></li>
                          <li><a class="" href="setoran.php">Setoran</a></li>
			              <li><a class="" href="service.php">Service</a></li>		
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Laporan</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="transaksi.php">Transaksi</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->      
