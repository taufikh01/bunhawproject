<?php include "header.php"; ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Table Transaksi</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Tables</li>
                        <li><i class="icon_table"></i>Transaksi</li>								  	
					</ol>
				</div>
			</div>
          <!-- Today status end -->
              
    <div class="panel-body">
			         <div class="col-md-12">
			         	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Transaksi
						</button>
						<div class="collapse" id="collapseExample">
						  <div class="well">
						    <form method="post" action="action/insert_transaksi.php" class="form-horizontal form-label-left">
				         		       <?php
                                                include"../../koneksi.php";
                                            $username = $_SESSION['username'];
                                            $query=mysql_query("select * from login where username='$username'");
                                            $array=mysql_fetch_array($query);
                                        ?>
                                    <input type="hidden" name="nik" value="<?php echo $array['nik']?>">
		                            
                                 <?php
		                        include "../../koneksi.php";

		                        $cari_kd=mysql_query("select max(id_transaksi)as kode from transaksi");
		                        $tm_cari=mysql_fetch_array($cari_kd);
		                        $kode=substr($tm_cari['kode'],1,4);
		                        $tambah=$kode+1;
		                            if($tambah<10){
		                            $id="T000".$tambah;
		                            }else{
		                            $id="T00".$tambah;
		                            }
		                        ?>
				         		<div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Transaksi</label>
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <input type="text" readonly="" name="id" value="<?php echo $id ?>" class="form-control">
		                            </div>
		                        </div>
				         		<div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Penyewa</label>
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <select name="no_ktp" class="form-control" required="">
                                        <option value="">-Pilih-</option>
                                    <?php
                                        include"../../koneksi.php";
                                        $query=mysql_query("select * from penyewa");
                                        while ($array=mysql_fetch_array($query)){
                                            echo"<option value='$array[no_ktp]' >$array[nama_penyewa]</td>";
                                        }
                                    ?>
                                    </select>
		                            </div>
		                        </div>
                                <div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">No Plat</label>
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <select name="id_mobil" class="form-control" required="">
                                            <option value="">-Pilih-</option>
                                        
                                       <?php
                                            include"../../koneksi.php";
                                            $query=mysql_query("select * from kendaraan where status_rental='ada'");
                                            while ($array=mysql_fetch_array($query)){
                                                echo"<option value='$array[id_mobil]' required=''>$array[no_plat]</option>";
                                            }
                                        ?>
                                        <select>
		                            </div>
		                        </div>
                                <div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Pinjam</label>
		                            <div class="col-md-5 col-sm-9 col-xs-12">
		                                <input type="date" name="tgl_pinjam" required="" class="form-control" required="">
		                            </div>
                                </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jam Pinjam</label>
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <input type="time" name="jam_pinjam" required="" class="form-control" required="">
		                            </div>
		                        </div>
                                <div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kilometer Pinjam</label>
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <input type="number" name="km_pinjam" required="" class="form-control" required="">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">BBM Pinjam</label>
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <input type="number" name="bbm_pinjam" id="bbm" class="form-control" required="">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kondisi Mobil Pinjam</label>
		                            <div class="col-md-9 col-sm-9 col-xs-12">
		                                <select name="kondisi_pinjam" class="form-control" required="">
		                                	<option value="baik">Baik</option>
		                                	<option value="rusak">Rusak</option>
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Supir</label>
		                            <div class="col-md-5 col-sm-9 col-xs-12">
		                                <select name="id_supir" class="form-control" required="">
                                            <option value="">-Pilih-</option>
                                        <?php
                                            include"../../koneksi.php";
                                            $query=mysql_query("select * from supir where status='ada'");
                                            while ($array=mysql_fetch_array($query)){
                                                echo"<option value='$array[id_supir]' required=''>$array[nama_supir]</td>";
                                            }
                                        ?>
                                        </select>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		                                <input type="submit" class="btn btn-primary" class="form-control" required="">
		                            </div>
		                        </div>
				         	</form>
						  </div>
						</div>
						<div class="row">
							<br>
							<?php include 'view_transaksi.php'; ?>
						</div>
                        <a href="pdf_all_rincian_transaksi.php"><img src="../../img/pdf.png" onclick="myFunction();" width="50" height="50">Print to PDF</a>
			         </div>
			      </div>
<script>
    function myFunction() {
        var myWindow = window.open("pdf_all_rincian_transaksi.php?id_detail=<?php echo $getid; ?>", "", "width=800, height=600");
    }
</script>         
<?php include "footer.php"?>   
