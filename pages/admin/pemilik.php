<?php include "header.php"; ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Table Pemilik Mobil</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Tables</li>
                        <li><i class="icon_table"></i>Pemilik</li>								  	
					</ol>
				</div>
			</div>
          <!-- Today status end -->
<div class="well">
<div class="panel-body">
			         <div class="col-md-12">
			         	<div class="row">
                            <a title="Add Widget" data-toggle="modal" href="#FormPemilik" class="btn btn-primary">+ Tambah Data Pemilik</a>
							<br />
                            <br />
                            <?php include 'view_pemilik.php'; ?>
						</div>
			         </div>
			      </div>    
    <div class="modal" id="FormPemilik">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Tambah Data Pemilik</h4>
                    </div>
                    <div class="modal-body">
                    <form class="form form-vertical" method="post" action="action/insert_pemilik.php">
                            <?php
	                        include "../../koneksi.php";

	                        $cari_kd=mysql_query("select max(id_pemilik)as kode from pemilik");
	                        $tm_cari=mysql_fetch_array($cari_kd);
	                        $kode=substr($tm_cari['kode'],1,4);
	                        $tambah=$kode+1;
	                            if($tambah<10){
	                            $id="P000".$tambah;
	                            }else{
	                            $id="P00".$tambah;
	                            }
	                        ?>
                            <div class="control-group">
	                            <label>ID Pemilik</label>
	                            <div class="controls">
	                                <input type="text" class="form-control" name="id_pemilik" value="<?php echo $id ?>" readonly="" class="form-control">
	                            </div>
                                <label>Nama Pemilik</label>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Masukkan nama" name='nama' id='nama'>
                                </div>
                                <label>Alamat</label>
                                <div class="controls">
                                    <textarea class="form-control" name='alamat' id='alamat'></textarea>
                                </div>
                                <label>Nomor Telpon</label>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Masukkan no. telp (ex. 0123456789)" name='telp' id="telp">
                                </div>
                            </div> 
                                      </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name='submit' id='submit'>Simpan</button></a>
                        <a href="#" data-dismiss="modal" class="btn">Batal</a>    
                    </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dalog -->
        </div><!-- /.modal -->       
                <!-- statics end -->
</div>

<?php include "footer.php"?>            