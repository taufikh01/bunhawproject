<?php include "header.php"; ?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Table Supir</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Tables</li>
                        <li><i class="icon_table"></i>Supir</li>								  	
					</ol>
				</div>
			</div>
          <!-- Today status end -->
<div class="well">
<div class="panel-body">
			         <div class="col-md-12">
			         	<div class="row">
                            <a title="Add Widget" data-toggle="modal" href="#FormSupir" class="btn btn-primary">+ Tambah Supir</a>
							<br />
                            <br />
                            <?php include 'view_supir.php'; ?>
						</div>
			         </div>
			      </div>
<div class="modal" id="FormSupir">
            <div class="modal-dialog">
                <div class="modal-content">
                <form class="form form-vertical" method="post" action="action/insert_supir.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Tambah data Supir</h4>
                    </div>
                    <div class="modal-body">
       <?php
		                        include "../../koneksi.php";

		                        $cari_kd=mysql_query("select max(id_supir)as kode from supir");
		                        $tm_cari=mysql_fetch_array($cari_kd);
		                        $kode=substr($tm_cari['kode'],1,4);
		                        $tambah=$kode+1;
		                            if($tambah<10){
		                            $id="S000".$tambah;
		                            }else{
		                            $id="S00".$tambah;
		                            }
		                        ?>
        <div class="control-group">
            <label>ID</label>
            <div class="controls">
		        <input type="text" name="id" value="<?php echo $id ?>" readonly="" class="form-control">
		    </div>
            <label>Nama</label>
            <div class="controls">
                <input type="text" class="form-control" placeholder="Masukkan nama" name='nama' id='nama' required="">
            </div>
            <label>Alamat</label>
            <div class="controls">
                <textarea class="form-control" name='alamat' id='alamat' required=""></textarea>
            </div>
            <label>Nomor Telpon</label>
            <div class="controls">
                <input type="text" class="form-control" placeholder="Masukkan no. telp (ex. 0123456789)" name='telp' id="telp" required="">
            </div>
            <label>No KTP</label>
            <div class="controls">
                <input type="text" class="form-control" name='no_ktp' required="">
            </div>
            <label>No SIM</label>
            <div class="controls">
                <input type="text" class="form-control" name='no_sim' required="">
            </div>
            <label>File SIM</label>
            <div class="controls">
                <input type="file" name='file_sim' required="">
            </div>
            <label>Tarif perjam</label>
            <div class="controls">
                <input type="text" class="form-control" name='tarif' required="">
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
        </div>      
<?php include "footer.php"?>            