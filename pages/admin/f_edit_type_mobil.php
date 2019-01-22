<?php
    session_start();
    if(isset($_SESSION['type'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ganteng</title>

    <!-- Bootstrap -->
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../../assets/js/jquery-ui.css" />
    <link rel="stylesheet" href="../../../assets/js/jquery.dataTables.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="container-fluid">
  		<div class="page-header">
		    <h1>RenMo <small><?php echo $_SESSION['type']; ?></small></h1>
		</div>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">Dashboard</a>
		    </div>

		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav navbar-right">
			      <li><a href="#"> <img src="../../../assets/images/user.jpg" class="img-circle" height="50px" width="50px"> <?php echo $_SESSION['nama']; ?></a></li>
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-top:15px"> <span class="glyphicon glyphicon-asterisk"></span><b class="caret"></b></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Akun</a></li>
			          <li><a href="#">Setting</a></li>
			          <li><a href="#">Profil</a></li>
			          <li class="divider"></li>
			          <li><a href="../../logout.php">Logout</a></li>
			        </ul>
			      </li>
			   </div>
		      </ul>
		  </div>
		</nav>

		<div class="row">
		   <div class="col-md-3">
		    <div class="panel panel-default">
		    <div class="panel-heading">
		      <h3 class="panel-title">Menu</h3>
		    </div>
		    <div class="panel-body">
		      <p>Selamat Datang User Ganteng</p>
		       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Dashboard
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				        <div class="list-group">
					     <a href="index.php" class="list-group-item">Home</a>
					   </div>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingTwo">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Data
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="panel-body">
				        <div class="list-group">
					     <a href="../kendaraan.php" class="list-group-item">Kendaraan</a>
					     <a href="../supir.php" class="list-group-item">Supir</a>
					     <a href="../user.php" class="list-group-item">User</a>
					     <a href="../type_mobil.php" class="list-group-item">Tipe Mobil</a>
					     <a href="../merk_mobil.php" class="list-group-item">Merk Mobil</a>
					     <a href="../penyewa.php" class="list-group-item">Penyewa</a>
					   </div>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Proses
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				        <div class="list-group">
					     <a href="../transaksi.php" class="list-group-item">Transaksi</a>
					     <a href="../service.php" class="list-group-item">Service</a>
					     <a href="../setoran.php" class="list-group-item">Setoran</a>
					   </div>
				      </div>
				    </div>
				  </div>
				</div>
       		</div>
  			</div>
   		   </div>
   		   <div class="row">
		   <div class="col-md-8">
		    <div class="panel panel-default">
		      <div class="panel-heading">
		        <h3 class="panel-title">Dashboard</h3>
		      </div>
		      <div class="panel-body">
		         <div class="col-md-12">
						<div class="well">
				         	<form class="form-horizontal form-label-left" method="post" action="edit_type_mobil.php">
				         		<?php
						        include "../../../koneksi.php";
						        $id=$_GET['id'];
						        $sql="SELECT a.*,b.* FROM type_mobil a,merk b where a.id_merk=b.id_merk and id_type='$id'";
						        $query=mysql_query($sql);
						        $array=mysql_fetch_array($query);
						        ?>
		                        <div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Type</label>
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <input type="text" name="id_type" value="<?php echo $array['id_type'] ?>" readonly="" class="form-control">
		                            </div>
		                        </div>
				         		<div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Merk</label>
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <input type="text" name="merk" value="<?php echo $array['id_merk'].' - '.$array['nama_merk'] ?>" id="merk" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Type</label>
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <input type="text" name="nama" value="<?php echo $array['nama_type'] ?>" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <input type="submit" class="btn btn-primary" class="form-control">
		                            </div>
		                        </div>
				         	</form>
				         </div>
		         </div>
		      </div>
		    </div>
		   </div>
		   </div>
  	</div>

	 <div class="navbar navbar-inverse navbar-bottom">
      <p class="navbar-text pull-left">&#169; Copyright by RenMo 2019</p>
	 </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../../assets/js/jquery.min.js"></script>
    <script src="../../../assets/js/jquery-ui.js"></script>
    <script src="../../../assets/js/jquery.dataTables.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../assets/js/bootstrap.min.js"></script>
  </body>

  <script>
/*autocomplete muncul setelah user mengetikan minimal2 karakter */
    $(function() {
        $( "#merk" ).autocomplete({
         source: "auto_data_merk.php",  
           minLength:1,
        });
    });
    </script>
    <script>
		$(document).ready(function() {
		    $('#tabel').dataTable(); // Menjalankan plugin DataTables pada id contoh. id contoh merupakan tabel yang kita gunakan untuk menampilkan data
		} );
  	</script>
</html>
<?php
  }
  else{
    echo"
    
    <script>window.location='../../index.php'</script>";
  }
?>