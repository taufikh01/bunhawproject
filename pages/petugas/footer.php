<!-- project team & activity start -->
          
		          <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
              
            </div>
                        
          </div> 
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />


              <!-- project team & activity end -->
<hr />
<footer class="text-center ">Aplikasi Rental Mobil <strong>By. Taufik Hidayat</strong>
            <br>&copy; 2016 - SMK Bakti Nusantara 666</footer>
          </section>
      </section>
      <!--main content end-->
  </section>
  <div class="modal" id="addWidgetModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title">Profile</h4>
                    </div>
                    <div class="modal-body">
                        <p><center><img alt="" src="../../img/<?php echo $tampil['foto']; ?>" width="200" height="190" style="border-radius: 500px;"></center></p>
            
                        <?php
                            include '../../koneksi.php';
                            $username=$_SESSION['username'];
                            $sql="select * from login where username='$username'";
                            $query=mysql_query($sql);
                            while ($d = mysql_fetch_array($query)) {
                                echo"
                            <table class=\"table table-striped\">
                            <tr>
                                <td>Nama </td><td>:</td><td>$d[nama]</td>
                            </tr>
                            <tr>
                                <td>Username</td><td>:</td><td>$d[username]</td>
                            </tr>
                            <tr>
                                <td>Password</td><td>:</td><td>$d[password]</td>
                            </tr>
                            <tr>
                                <td>Alamat</td><td>:</td><td>$d[alamat]</td>
                            </tr>
                            <tr>
                                <td>No Telepon</td><td>:</td><td>$d[tlp]</td>
                            </tr>
                            
                            
                        </table>";
                            }
                            ?>
                    </div>
                    
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dalog -->
        </div><!-- /.modal -->

  
  <!-- container section start -->

    <!-- javascripts -->
    <script src="../../js/jquery.js"></script>
	<script src="../../js/jquery-ui-1.10.4.min.js"></script>
    <script src="../../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../../js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../../js/jquery.scrollTo.min.js"></script>
    <script src="../../js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="../../assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="../../js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../../js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="../../js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="../../assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../../js/calendar-custom.js"></script>
	<script src="../../js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../../js/jquery.customSelect.min.js" ></script>
	<script src="../../assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="../../js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../../js/sparkline-chart.js"></script>
    <script src="../../js/easy-pie-chart.js"></script>
	<script src="../../js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../../js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../../js/xcharts.min.js"></script>
	<script src="../../js/jquery.autosize.min.js"></script>
	<script src="../../js/jquery.placeholder.min.js"></script>
	<script src="../../js/gdp-data.js"></script>	
	<script src="../../js/morris.min.js"></script>
	<script src="../../js/sparklines.js"></script>	
	<script src="../../js/charts.js"></script>
	<script src="../../js/jquery.slimscroll.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery.dataTables.js"></script>
    <script src="../../assets/js/jquery.validate.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script>
		$(document).ready(function() {
		    $('#tabel').dataTable(); // Menjalankan plugin DataTables pada id contoh. id contoh merupakan tabel yang kita gunakan untuk menampilkan data
		} );
  	</script>
  
  </body>
</html>