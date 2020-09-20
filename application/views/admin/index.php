<!-- ALERT -->
<script>
Swal.fire({
  position: 'top-end',
  type: 'success',
  title: 'Success!',
  showConfirmButton: false,
  timer: 1800
})
</script>
 <!-- ALERT -->
 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Baku PLN
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Form PLN</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Download Form PLN</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
			<div class="col-xs-5 d-inline">
			<?php 
			$no = 1;
			foreach ($formnya->result_array() as $data) { 
			?>
			<p><?php echo $no; ?>.<?php echo $data['judul_form']; ?>
			<button type="button" class="btn btn-block btn-primary" onclick="window.location.href='<?php echo base_url(); ?>public/form/<?php echo $data['judul_form']; ?>'">Download</button></p>
			<?php
										$no++;
									}
									?>
			</div>
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  