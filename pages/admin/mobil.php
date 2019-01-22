<?php include "header.php"; ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Table Mobil</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Tables</li>
                        <li><i class="icon_table"></i>Mobil</li>								  	
					</ol>
				</div>
			</div>
          <!-- Today status end -->
                <!-- statics end -->
<div class="well">
<div class="panel-body">
			         <div class="col-md-12">
			         	<div class="row">
                            <a title="Add Widget" data-toggle="modal" href="#FormMobil" class="btn btn-primary">+ Tambah Mobil</a>
							<br />
                            <br />
                            <?php include 'view_kendaraan.php'; ?>
						</div>
			         </div>
			      </div>
 <div class="modal" id="FormMobil">
            <div class="modal-dialog">
                <div class="modal-content">
                <form class="form form-vertical" method="post" action="action/insert_mobil.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Tambah data Mobil</h4>
                    </div>
                    <div class="modal-body">
                            <?php
	                        include "../../koneksi.php";

	                        $cari_kd=mysql_query("select max(id_mobil)as kode from kendaraan");
	                        $tm_cari=mysql_fetch_array($cari_kd);
	                        $kode=substr($tm_cari['kode'],1,4);
	                        $tambah=$kode+1;
	                            if($tambah<10){
	                            $id="M000".$tambah;
	                            }else{
	                            $id="M00".$tambah;
	                            }
	                        ?>
                            <div class="control-group">
	                            <label>ID Mobil</label>
	                            <div class="controls">
	                                <input type="text" class="form-control" name="id_mobil" value="<?php echo $id ?>" readonly="" class="form-control">
	                            </div>
	                            <label>Tipe Mobil</label>
	                            <div class="controls">
                                <select class="form-control" name='id_type' id='id_type'>
                                    <option value=''>---</option>	
                                    <?php
                                    $sq2 = "select id_type,id_merk,nama_type from type_mobil";
                                    $q = mysql_query($sq2);
                                    while ($rs = mysql_fetch_array($q)) {
                                        echo "<option value='$rs[id_type]'>$rs[nama_type]</option>";
                                    }
                                    ?>
                
                                </select>
	                            </div>
	                            <label>Pemilik</label>
	                            <div class="controls">
                                <select class="form-control" name='id_pemilik' id='id_pemilik'>
                                    <option value=''>---</option>	
                                    <?php
                                    $sq2 = "select * from pemilik";
                                    $q = mysql_query($sq2);
                                    while ($rs = mysql_fetch_array($q)) {
                                        echo "<option value='$rs[id_pemilik]'>$rs[nama_pemilik]</option>";
                                    }
                                    ?>
                
                                </select>
                                </div>
	                            <label>No Plat</label>
	                            <div class="controls">
	                                <input type="text" name="noplat" id="noplat" placeholder="X 0203 XX" class="form-control">
	                            </div>
	                            <label>Tahun Mobil</label>
	                            <div class="controls">
	                                <input type="text" name="tahun" id="tahun" class="form-control">
	                            </div>
	                            <label>Tarif Per Jam</label>
	                                <input type="text" name="tarif" id="tarif" class="form-control">
	                            </div>
	                            <div class="controls">
	                            <label>Status</label>
	                                <select name="status" id="status" class="form-control">
		                                	<option value="ada">Ada</option>
		                                	<option value="dipinjam">dipinjam</option>
		                            </select>
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