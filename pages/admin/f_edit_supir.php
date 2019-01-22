<?php include "header.php"?>
  
<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Table</li>
						<li><i class="icon_table"></i>Supir</li>
                        <li><i class="fa fa-file-text-o"></i>Edit Supir</li>
					</ol>
				</div>
			</div>
              
              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Edit Supir
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                <form class="form-validate form-horizontal " method="post" action="action/proses_edit_supir.php" enctype="multipart/form-data">
				         		<?php
						        include "../../koneksi.php";
						        $id=$_GET['id'];
						        $sql="SELECT * FROM supir where id_supir='$id'";
						        $query=mysql_query($sql);
						        $array=mysql_fetch_array($query)or die(mysql_error());
						        ?>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">ID Supir </label>
		                            <div class="col-lg-10">
		                                <input type="text" name="id" value="<?php echo $array['id_supir'] ?>" readonly="" class="form-control">
		                            </div>
		                        </div>
				         		<div class="form-group">
		                            <label class="control-label col-lg-2">Nama</label>
		                            <div class="col-lg-10">
		                               <input type="text" name="nama" value="<?php echo $array['nama_supir'] ?>" class="form-control" required="">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">Alamat</label>
		                            <div class="col-lg-10">
		                                <input type="text" name="alamat" value="<?php echo $array['alamat'] ?>" class="form-control" required="">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">Tlp</label>
		                            <div class="col-lg-10">
		                                <input type="text" name="telp" value="<?php echo $array['tlp'] ?>" class="form-control" required="">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">No KTP</label>
		                            <div class="col-lg-10">
		                                <input type="text" name="no_ktp" value="<?php echo $array['no_ktp'] ?>" class="form-control" required="">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">No SIM</label>
		                            <div class="col-lg-10">
		                                <input type="text" name="no_sim" value="<?php echo $array['no_sim'] ?>" class="form-control" required="">
		                            </div>
		                        </div>
                                <div class="form-group">
		                            <label class="control-label col-lg-2">File SIM</label>
		                            <div class="col-lg-10">
		                                <input type="file" name="file_sim" value="<?php echo $array['file_sim'] ?>">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">Tarif Per Jam</label>
		                            <div class="col-lg-10">
		                                <input type="text" name="tarif" value="<?php echo $array['tarif_perjam'] ?>" class="form-control" required="">
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