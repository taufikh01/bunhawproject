<?php include "header.php" ?>
<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Table</li>
						<li><i class="icon_table"></i>Transaksi</li>
                        <li><i class="fa fa-file-text-o"></i>Pengembalian Transaksi</li>
					</ol>
				</div>
			</div>
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Input Pengembalian Transaksi
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form method="POST" action="action/insert_pengembalian.php" class="form-validate form-horizontal ">
                                      <?php
                                        include "../../koneksi.php";
                                        $id=$_GET['id_detail'];
                                        $sql="select a.*,b.*,c.* from detail_transaksi a,kendaraan b,transaksi c where b.id_mobil=c.id_mobil and a.id_transaksi=c.id_transaksi  and a.id_detail='$id'";
                                        $query=mysql_query($sql);
                                        $array=mysql_fetch_array($query);
                                        ?>
                                        <input type="hidden" class=" form-control" name="id_detail" value="<?php echo $id;?>" />
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">ID Transaksi <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="text" class=" form-control" name="id_transaksi" readonly="" value="<?php echo $array['id_transaksi'];?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">No Plat <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="text" readonly="" class="form-control" name="id_mobil" required="" value="<?php echo $array['no_plat']?>">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Tanggal Pinjam <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="date" name="tgl_pinjam" class="form-control" required="" readonly="" value="<?php echo $array['tgl_pinjam']?>">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Jam Pinjam <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="time" name="jam_pinjam" required="" readonly="" class="form-control" value="<?php echo $array['jam_pinjam']?>">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Tanggal Kembali<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="date" name="tgl_kembali" class="form-control" required="">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Jam Kembali<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="time" name="jam_kembali" required="" class="form-control">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Kilometer Kembali<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="number" name="km_kembali" required="" class="form-control">
                                          </div>
                                      </div><div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Kondisi Mobil Kembali<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select name="kondisi_kembali" class="form-control" required="">
		                                	     <option value="baik">Baik</option>
		                                	     <option value="rusak">Rusak</option>
		                                </select>
                                          </div>
                                      </div><div class="form-group ">
                                          <label for="" class="control-label col-lg-2">BBM Kembali<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="number" name="bbm_kembali" required="" class="form-control">
                                          </div>
                                      </div><div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Kerusakan<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="text" name="kerusakan" required="" class="form-control">
                                          </div>
                                      </div><div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Biaya Kerusakan<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="number" name="biaya_kerusakan" required="" class="form-control" >
                                          </div>
                                      </div><div class="form-group ">
                                          <label for="" class="control-label col-lg-2">Biaya BBM<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input type="number" name="biaya_bbm" required="" class="form-control">
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