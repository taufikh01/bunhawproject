<?php include "header.php" ?>
<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Table</li>
						<li><i class="icon_table"></i>Penyewa</li>
                        <li><i class="fa fa-file-text-o"></i>Edit Penyewa</li>
					</ol>
				</div>
			</div>
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Edit Data Penyewa
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form method="POST" action="action/proses_edit_penyewa.php" class="form-validate form-horizontal ">
                                      <?php
        						        include "../../koneksi.php";
        						        $no=$_GET['no'];
        						        $sql="SELECT * FROM penyewa where no='$no'";
        						        $query=mysql_query($sql);
        						        $array=mysql_fetch_array($query)or die(mysql_error());
        						        ?>
                                        <input type="hidden" class=" form-control" name="no" value="<?php echo $array['no'];?>" />
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">No KTP <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="text" class=" form-control" name="no_ktp" value="<?php echo $array['no_ktp'];?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Nama <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="text" class=" form-control" name="nama" value="<?php echo $array['nama_penyewa'];?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Alamat <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <textarea class=" form-control" name="alamat"><?php echo $array['alamat'];?></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">NO Telp/HP <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="text" class=" form-control" name="telp" value="<?php echo $array['tlp'];?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">File KTP<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="file" name="file_ktp">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
<?php include "footer.php";?>