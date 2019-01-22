<?php include "header.php"?>
  
<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Table</li>
                        <li><i class="icon_table"></i>Mobil</li>
						<li><i class="fa fa-file-text-o"></i>Edit Mobil</li>
					</ol>
				</div>
			</div>
              
              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Edit Mobil
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                <form class="form-validate form-horizontal " method="post" action="action/proses_edit_mobil.php">
				         		<?php
						        include "../../koneksi.php";
						        $id=$_GET['id'];
						        $sql="SELECT * FROM kendaraan where id_mobil='$id'";
						        $query=mysql_query($sql);
						        $array=mysql_fetch_array($query)or die(mysql_error());
						        ?>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">ID Mobil </label>
		                            <div class="col-lg-10">
		                                <input type="text" name="id" value="<?php echo $array['id_mobil'] ?>" readonly="" class="form-control">
		                            </div>
		                        </div>
				         		<div class="form-group">
		                            <label class="control-label col-lg-2">Tipe Mobil</label>
		                            <div class="col-lg-10">
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
		                        </div>
                                <div class="form-group">
		                            <label class="control-label col-lg-2">Pemilik</label>
		                            <div class="col-lg-10">
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
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">No Plat</label>
		                            <div class="col-lg-10">
		                                <input type="text" name="noplat" value="<?php echo $array['no_plat'] ?>" id="noplat" placeholder="X 0203 XX" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">Tahun Mobil</label>
		                            <div class="col-lg-10">
		                                <input type="text" name="tahun" value="<?php echo $array['tahun_mobil'] ?>" id="tahun" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">Tarif Per Jam</label>
		                            <div class="col-lg-10">
		                                <input type="text" name="tarif" value="<?php echo $array['tarif_per_jam'] ?>" class="form-control">
		                            </div>
		                        </div>
                                <div class="form-group">
		                            <label class="control-label col-lg-2">Status</label>
		                            <div class="col-lg-10">
		                                <select name="status" id="status" class="form-control">
		                                	<option value="ada">Ada</option>
		                                	<option value="pinjam">Pinjam</option>
                                        </select>
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