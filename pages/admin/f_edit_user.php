<?php include "header.php" ?>
<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Table</li>
						<li><i class="icon_table"></i>User</li>
                        <li><i class="fa fa-file-text-o"></i>Edit User</li>
					</ol>
				</div>
			</div>
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Edit Data User
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form method="POST" action="action/edit_user.php" enctype="multipart/form-data" class="form-validate form-horizontal">
<?php
include "../../koneksi.php";
$nik=$_GET['nik'];
$query=mysql_query("select * from login where nik='$nik'");
$data=mysql_fetch_array($query);

?>
        <div class="control-group">
            <label>NIK</label>
            <div class="controls">
                <input type="text" class="form-control" readonly="" value="<?php echo $nik?>" name='nik'>
            </div>
            <label>Username</label>
            <div class="controls">
                <input type="text" class="form-control" value="<?php echo $data['username']?>" placeholder="Username" name='username' required="">
            </div>
            <label>Password</label>
            <div class="controls">
                <input type="text" class="form-control" value="<?php echo $data['password']?>" name='password' required="">
            </div>
            <label>No KTP</label>
            <div class="controls">
                <input type="text" class="form-control" value="<?php echo $data['no_ktp']?>" name='no_ktp' id='no_ktp' required="">
            </div>                        
            <label>Nama</label>
            <div class="controls">
                <input type="text" class="form-control" value="<?php echo $data['nama']?>" name='nama' id='nama' required="">
            </div>
            <label>Foto</label>
            <div class="controls">
                <input type="file" name='foto' value="<?php echo $data['foto']?>" required="">
            </div>                        
            <label>Alamat</label>
            <div class="controls">
                <textarea class="form-control" name="alamat" id='alamat' required=""><?php echo $data['alamat']?></textarea>
            </div>
            <label>Nomor Telpon</label>
            <div class="controls">
                <input type="text" class="form-control" value="<?php echo $data['tlp']?>" placeholder="Masukkan no. telp (ex. 0123456789)" name='telp' id="telp">
            </div>
            <label>Type User</label>
            <div class="controls">
                <select  name='typeuser' class="form-control">
                <option value="<?php echo $data['typeuser']?>"><?php echo $data['typeuser']?></option>
                <option value="Admin">Admin</option>
                <option value="Petugas">Petugas</option></select>
            </div>
        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name='submit' id='submit'>Simpan</button></a>
                        <a href="user.php" data-dismiss="modal" class="btn">Batal</a>    
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>                

<?php include "footer.php";?>