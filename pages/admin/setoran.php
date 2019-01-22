
<?php include "header.php"; ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Table Setoran</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Tables</li>
                        <li><i class="icon_table"></i>Setoran</li>								  	
					</ol>
				</div>
			</div>
          <!-- Today status end -->
<div class="well">
<div class="panel-body">
			         <div class="col-md-12">
			         	<div class="row">
                            <a title="Add Widget" data-toggle="modal" href="#addTable" class="btn btn-primary">+ Tambah Setoran</a>
							<br />
                            <br />
                            <?php include 'view_setoran.php'; ?>
						</div>
			         </div>
			      </div>    <div class="modal" id="addTable">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Tambah data Setoran</h4>
                    </div>
                    <div class="modal-body">
            <form class="form form-vertical" method="post" action="action/insert_setoran.php">
                            <input type="hidden" name="no_setoran" class="form-control">
                            <div class="control-group">
		                            <label>Mobil</label>
		                            <div class="controls">
                                    <select class="form-control" name='id_mobil' id='id_mobil' required="">
                                        <option value=''>---</option>	
                                        <?php
                                        $sq2 = "select * from kendaraan where status_rental='ada'";
                                        $q = mysql_query($sq2);
                                        while ($rs = mysql_fetch_array($q)) {
                                            echo "<option value='$rs[id_mobil]'>$rs[no_plat]</option>";
                                        }
                                        ?>
                                    </select>
		                            </div>
		                            <label>Jumlah </label>
		                            <div class="controls">
		                                <input type="text" name="jumlah" class="form-control" placeholder="Rp." required="">
		                            </div>
                                    <label>Penyetor </label>
		                            <div class="controls">
		                                <select class="form-control" name='nik' id='nik' required="">
                                        <option value=''>---</option>	
                                        <?php
                                        $sq2 = "select * from login where typeuser='Petugas'";
                                        $q = mysql_query($sq2);
                                        while ($rs = mysql_fetch_array($q)) {
                                            echo "<option value='$rs[nik]'>$rs[nama]</option>";
                                        }
                                        ?>
                                    </select>
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
