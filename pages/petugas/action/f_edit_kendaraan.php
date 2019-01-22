<?php include "header.php"?>
 
<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Table</li>
						<li><i class="fa fa-file-text-o"></i>Table Karyawan</li>
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
                                <form class="form-validate form-horizontal " method="post" action="action/proses_edit_supir.php">
				         		<?php
						        include "../../koneksi.php";
						        $id=$_GET['id'];
						        $sql="SELECT * FROM supir where id_supir='$id'";
						        $query=mysql_query($sql);
						        $array=mysql_fetch_array($query)or die(mysql_error());
						        ?>
		                        <label>ID</label>
            <div class="controls">
		        <input type="text" name="id" value="<?php echo $id ?>" readonly="" class="form-control">
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
            <label>No KTP</label>
            <div class="controls">
                <input type="text" class="form-control" name='no_ktp'>
            </div>
            <label>No SIM</label>
            <div class="controls">
                <input type="text" class="form-control" name='no_sim'>
            </div>
            <label>File SIM</label>
            <div class="controls">
                <input type="file" name='file_sim'>
            </div>
            <label>Tarif perjam</label>
            <div class="controls">
                <input type="text" class="form-control" name='tarif'>
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