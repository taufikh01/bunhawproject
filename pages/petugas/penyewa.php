<?php include "header.php"; ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Table Penyewa</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Tables</li>
                        <li><i class="icon_table"></i>Penyewa</li>								  	
					</ol>
				</div>
			</div>
          <!-- Today status end -->
          
<div class="well">
<div class="panel-body">
			         <div class="col-md-12">
			         	<div class="row">
                            <a title="Add Widget" data-toggle="modal" href="#FormPenyewa" class="btn btn-primary">+ Tambah Penyewa</a>
    						<br />
                            <br />
                            <?php include 'view_penyewa.php'; ?>
						</div>
			         </div>
			      </div>
    <div class="modal" id="FormPenyewa">
            <div class="modal-dialog">
                <div class="modal-content">
                <form class="form form-vertical" method="post" action="action/insert_penyewa.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Tambah data penyewa</h4>
                    </div>
                    <div class="modal-body">
        <div class="control-group">
            <label>No KTP</label>
            <div class="controls">
                <input type="text" class="form-control" name='no_ktp'>
            </div>
            <label>Nama</label>
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
            <label>File KTP</label>
            <div class="controls">
                <input type="file" name='file_ktp'/>
            </div>
            
        </div> 
        
 
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name='submit' id='submit'>Simpan</button></a>
                        <a href="#" data-dismiss="modal" class="btn">Batal</a>    
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>                
<?php include "footer.php"?>            