<?php include "header.php"; ?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Laporan Transaksi</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Laporan</li>
                        <li><i class="icon_table"></i>Laporan Transaksi</li>								  	
					</ol>
				</div>
			</div>
          <!-- Today status end -->
              
    <div class="panel-body">
			         
						<div class="row">
							<br>
							<?php include 'view_transaksi.php'; ?>
						</div>
                        <a href="pdf_all_rincian_transaksi.php"><img src="../../img/pdf.png" onclick="myFunction();" width="50" height="50">Print to PDF</a>
                        <a href="excel.php"><img src="../../img/excel.png" onclick="myFunction();" width="50" height="50">Download to Excel</a>
   </div>
<script>
    function myFunction() {
        var myWindow = window.open("pdf_all_rincian_transaksi.php?id_detail=<?php echo $getid; ?>", "", "width=800, height=600");
    }
</script>         
<?php include "footer.php"?>   
