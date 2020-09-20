 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Form PLN
        <small>Update Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="#">Form PLN</a></li>
        <li class="active">Update Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
         

          <!-- Form Element sizes -->
          <div class="box box-success">
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>Setting/action_form_add" enctype="multipart/form-data">
				
				 <input type="hidden" name="id_users" value="<?php echo $id_users; ?>">
				 <input type="hidden" name="email" value="<?php echo $email; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Add Data</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="judul_form" class="col-sm-3 control-label">Judul Form</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="judul_form" name="judul_form" placeholder="Please Input Judul Form" />
                                </div>
                            </div>
                        </div>
						<br><br><br>
						
						<div class="col-lg-10">
							<div class="form-group">
                                <label for="nama_file" class="col-sm-3 control-label">Upload Dokumen</label>
                                <div class="col-sm-5">
                 <input type="file" class="form-control" id="nama_file" name="nama_file" /> 
                 
								   </div>
                            </div>
                        </div>
						
                        
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>Setting/form_view" class="btn btn-danger">Kembali</a>
                            <button type="reset" class="btn btn-warning">Ulangi</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
					 </form>
          </div>
          <!-- /.box -->
					
        </div>
        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  