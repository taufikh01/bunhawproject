<?php include "header.php"; ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Table User</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Tables</li>
                        <li><i class="icon_table"></i>User</li>								  	
					</ol>
				</div>
			</div>
          <!-- Today status end -->
          
<div class="well">
<div class="panel-body">
			         <div class="col-md-12">
			         	<div class="row">
                            <a title="Add Widget" data-toggle="modal" href="#FormUser" class="btn btn-primary">+ Tambah User</a>
    						<br />
                            <br />
                            <?php include 'view_user.php'; ?>
						</div>
			         </div>
			      </div>
    <div class="modal" id="FormUser">
            <div class="modal-dialog">
                <div class="modal-content">
                <form class="form form-vertical" method="post" action="action/insert_user.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Tambah data User</h4>
                    </div>
                    <div class="modal-body">
        <div class="control-group">
        <?php
            include "../../koneksi.php";
            $query=mysql_query("select max(nik)as kode from login");
            $array=mysql_fetch_array($query);
            $kode=substr($array['kode'],1,4);
            $tambah=$kode+1;
            if($tambah<10){
                $nik="L000".$tambah;
            }else if($tambah<100){
                $nik="L00".$tambah;
            }else if($tambah<1000){
                $nik="L0".$tambah;
            }else{
                $nik="L".$tambah;
            }
        ?>
            <label>NIK</label>
            <div class="controls">
                <input type="text" class="form-control" readonly="" value="<?php echo $nik?>" name='nik'>
            </div>
            <label>Username</label>
            <div class="controls">
                <input type="text" class="form-control" placeholder="Username" name='username' required="">
            </div>
            <label>Password</label>
            <div class="controls">
                <input type="password" class="form-control" placeholder="Password" name='password' required="">
            </div>
            <label>No KTP</label>
            <div class="controls">
                <input type="text" class="form-control" name='no_ktp' id='no_ktp' required="">
            </div>
            <label>Nama</label>
            <div class="controls">
                <input type="text" class="form-control" placeholder="Masukkan nama" name='nama' id='nama' required="">
            </div>
            <label>Foto</label>
            <div class="controls">
                <input type="file" name='foto' required="">
            </div>
            <label>Alamat</label>
            <div class="controls">
                <textarea class="form-control" name='alamat' id='alamat' required=""></textarea>
            </div>
            <label>Nomor Telpon</label>
            <div class="controls">
                <input type="text" class="form-control" placeholder="Masukkan no. telp (ex. 0123456789)" name='telp' id="telp" required="">
            </div>
            <label>Type User</label>
            <div class="controls">
                <select  name='typeuser' class="form-control" required="">
                <option value="Admin">---</option>
                <option value="Admin">Admin</option>
                <option value="Petugas">Petugas</option></select>
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