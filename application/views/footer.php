<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020 </strong> All rights
    reserved.
  </footer>

 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>public/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>public/assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>public/assets/dist/js/demo.js"></script>
<!-- page script -->
    <script src="assets2/js/bootstrap.bundle.min.js"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url(); ?>public/assets2/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets2/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script src="<?php echo base_url(); ?>public/assets2/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets2/DataTables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets2/DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets2/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets2/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>public/assets2/DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets2/DataTables/Buttons-1.5.6/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets2/DataTables/Buttons-1.5.6/js/buttons.colVis.min.js"></script>


<script>
        $(document).ready(function() {
            var table = $('#example1').DataTable( {
              'scrollX': true,
              'autoWidth'   : false,
                buttons: [ 'excel' ],
                dom: 
                "<'row'<'col-md-2'l><'col-md-6'B><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu:[
                    [10,25,50,100,-1],
                    [10,25,50,100,"All"]
                ]
            } );
        
            table.buttons().container()
                .appendTo( '#table_wrapper .col-md-5:eq(0)' );
        } );
    
  $(function () {
    $('#example3').DataTable({
	 'scrollX': true,
	 
      'autoWidth'   : true
	 })
  //   $('#example1').DataTable({
	//  'scrollX': true,
	 
  //     'autoWidth'   : false
	//  })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
	  'scrollX': true
    })
  })
</script>




		
</body>
</html>
