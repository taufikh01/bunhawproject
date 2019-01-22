<?php include "header.php"?>
  
<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Table</li>
						<li><i class="icon_table"></i>Type Mobil</li>
                        <li><i class="fa fa-file-text-o"></i>Edit Type Mobil</li>
					</ol>
				</div>
			</div>
              
              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Edit Type Mobil
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                <form class="form-validate form-horizontal " method="post" action="action/proses_edit_service.php">
				         		<?php
						        include "../../koneksi.php";
						        $id=$_GET['id'];
						        $sql="SELECT * FROM service where id_service='$id'";
						        $query=mysql_query($sql);
						        $array=mysql_fetch_array($query)or die(mysql_error());
						        ?>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">ID Type </label>
		                            <div class="col-lg-10">
		                                <input type="text" name="id" value="<?php echo $array['id_service'] ?>" readonly="" class="form-control">
		                            </div>
		                        </div>
				         		<div class="form-group">
		                            <label class="control-label col-lg-2">No Plat</label>
		                            <div class="col-lg-10">
		                               <select class="form-control" name='id_mobil' id='id_mobil'>
                                    <?php
                                    $sq2 = "select * from kendaraan";
                                    $q = mysql_query($sq2);
                                    while ($rs = mysql_fetch_array($q)) {
                                        echo "<option value='$rs[id_mobil]'>$rs[no_plat]</option>";
                                    }
                                    ?>
                
                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">Tanggal Service</label>
		                            <div class="col-lg-10">
		                                <input type="date" name="tgl" value="<?php echo $array['tgl_service']?>" class="form-control">
		                            </div>
		                        </div>
                                <div class="form-group">
		                            <label class="control-label col-lg-2">Total Biaya</label>
		                            <div class="col-lg-10">
		                                <input type="input" name="total" value="<?php echo $array['total_biaya']?>" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
				         	</form>
				         </div>
		         </div>
		      </div>
<?php include "footer.php"?>