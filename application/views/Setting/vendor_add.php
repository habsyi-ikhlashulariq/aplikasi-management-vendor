 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Add Vendor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin</a></li>
        <li class="active">Add Vendor</li>
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
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>setting/action_vendor_add" enctype="multipart/form-data">
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Add vendor</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_vendor" class="col-sm-3 control-label">Nama Vendor</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama_vendor" name="nama_vendor" placeholder="Input Nama Vendor.." required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="email_vendor" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="email_vendor" name="email_vendor" placeholder="Input Alamat Vendor.." required/>
                                </div>
                            </div>
                        </div>
						
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="telepon" class="col-sm-3 control-label">No. Telepon</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Input Nomor Telepon.." required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						
						
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>setting/vendor_view" class="btn btn-danger">Kembali</a>
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