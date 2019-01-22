<?php include "header.php"; ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Table Merk Mobil</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Tables</li>
                        <li><i class="icon_table"></i>Merk Mobil</li>								  	
					</ol>
				</div>
			</div>
          <!-- Today status end -->
<div class="well">
<div class="panel-body">
			         <div class="col-md-12">
			         	<div class="row">
                            <a title="Add Widget" data-toggle="modal" href="#FormMerk" class="btn btn-primary">+ Tambah Data Merk</a>
							<br />
                            <br />
                            <?php include 'view_merk_mobil.php'; ?>
						</div>
			         </div>
			      </div>    <div class="modal" id="FormMerk">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Tambah data Merk Mobil</h4>
                    </div>
                    <div class="modal-body">
<form class="form form-vertical" method="post" action="action/insert_merk_mobil.php">
				         		<?php
		                        include "../../koneksi.php";

		                        $cari_kd=mysql_query("select max(id_merk)as kode from merk");
		                        $tm_cari=mysql_fetch_array($cari_kd);
		                        $kode=substr($tm_cari['kode'],1,4);
		                        $tambah=$kode+1;
		                            if($tambah<10){
		                            $id="Z000".$tambah;
		                            }else{
		                            $id="Z00".$tambah;
		                            }
		                        ?>
		                        <div class="control-group">
		                            <label>ID Merk</label>
		                            <div class="controls">
		                                <input type="text" name="id" value="<?php echo $id ?>" readonly="" class="form-control">
		                            </div>
		                            <label>Nama Merk</label>
		                            <div class="controls">
		                                <input type="text" name="nama" class="form-control">
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