 
 <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
 Upload Nota Dinas Jasa Pengadaan Barang
    <small>Update Data</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li><a href="#">Upload Nota Dinas Jasa Pengadaan Barang</a></li>
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
       <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>Admin/action_upload_nodin_barang_add" enctype="multipart/form-data">
            
             <input type="hidden" name="id_users" value="<?php echo $id_users; ?>">
             <input type="hidden" name="email" value="<?php echo $email; ?>">
        <div class="box-header with-border">
          <h3 class="box-title">Add Data</h3>
        </div>
        <div class="box-body">
                    
                    
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label for="upload_nodin" class="col-sm-3 control-label">Upload Nota Dinas</label>
                            <div class="col-sm-5">
             <input type="file" class="form-control" id="upload_nodin" name="upload_nodin" /> 
             
                               </div>
                        </div>
                    </div>
                    
                    
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
                    <div class="pull-center">
                    
                        <a href="<?php echo base_url(); ?>Admin/upload_nodin_barang_view" class="btn btn-danger">Kembali</a>
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
