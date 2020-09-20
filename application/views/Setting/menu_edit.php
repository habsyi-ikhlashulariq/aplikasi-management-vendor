 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting
        <small>Edit Menu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Setting</a></li>
        <li class="active">Edit Menu</li>
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
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>setting/action_menu_edit" enctype="multipart/form-data">
				<input type="hidden" name="id_menu" value="<?php echo $menunya['id_menu']; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Menu</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_menu" class="col-sm-3 control-label">Nama Menu</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="<?php echo $menunya['nama_menu']; ?>"  required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="link" class="col-sm-3 control-label">Link</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="link" name="link"  value="<?php echo $menunya['link']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="icon" class="col-sm-3 control-label">Icon</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="icon" name="icon"  value="<?php echo $menunya['icon']; ?>"   required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						 <div class="col-lg-10">
                            <div class="form-group">
                                <label for="is_main_menu" class="col-sm-3 control-label">Sub Menu</label>
                                <div class="col-sm-5">
									<select class="form-control" id="is_main_menu" name="is_main_menu" required>	
									
									<option value="<?php echo $menunya['id_menu']; ?>"><?php echo $menunya['nama_menu_utamanya']; ?></option>
										<option>--Pilih Sub Menu--</option>
										<option value="#">#</option>
										<?php  foreach ($menu_view->result_array() as $data) { 
											?>
												<option value="<?php echo $data['id_menu']?>"><?php echo $data['nama_menu']?></option>;
										
										<?php
											}
										?>
									</select>	
                                </div>
                            </div>
                        </div>
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>setting/menu_view" class="btn btn-danger">Kembali</a>
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