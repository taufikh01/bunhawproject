<?php include "header.php"; ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Table Type Mobil</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Tables</li>
                        <li><i class="icon_table"></i>Type Mobil</li>								  	
					</ol>
				</div>
			</div>
          <!-- Today status end -->
<div class="well">
<div class="panel-body">
			         <div class="col-md-12">
			         	<div class="row">
                            <a title="Add Widget" data-toggle="modal" href="#addTable" class="btn btn-primary">+ Tambah Data Type Mobil</a>
							<br />
                            <br />
                            <?php include 'view_type_mobil.php'; ?>
						</div>
			         </div>
			      </div>    
    <div class="modal" id="addTable">
            <div class="modal-dialog">
                <div class="modal-content">
                <form class="form form-vertical" method="post" action="action/insert_type_mobil.php">
		            <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Tambah Data Tipe Mobil</h4>
                    </div>
                    <div class="modal-body">
        	         		<?php
		                        include "../../koneksi.php";

		                        $cari_kd=mysql_query("select max(id_type)as kode from type_mobil");
		                        $tm_cari=mysql_fetch_array($cari_kd);
		                        $kode=substr($tm_cari['kode'],1,4);
		                        $tambah=$kode+1;
		                            if($tambah<10){
		                            $id="T000".$tambah;
		                            }else{
		                            $id="T00".$tambah;
		                            }
		                        ?>
		                        <div class="control-group">
		                            <label>ID Type</label>
		                            <div class="controls">
		                                <input type="text" name="id_type" value="<?php echo $id ?>" readonly="" class="form-control">
		                            </div>
		                        </div>
				         		<div class="control-group">
		                            <label>Nama Merk</label>
		                            <div class="controls">
		                                <select class="form-control" name='id_merk' id='id_merk'>
                                    <option value=''>---</option>	
                                    <?php
                                    $sq2 = "select * from merk";
                                    $q = mysql_query($sq2);
                                    while ($rs = mysql_fetch_array($q)) {
                                        echo "<option value='$rs[id_merk]'>$rs[nama_merk]</option>";
                                    }
                                    ?>
                
                                </select>
		                            </div>
		                        </div>
                                <div class="control-group">
		                            <label>Nama Type</label>
		                            <div class="controls">
		                                <input type="text" name="nama" id="nama" class="form-control">
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
