 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Warranty Notice
        <small>Update Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Desaw</a></li>
        <li><a href="#">Warranty Notice</a></li>
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
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>warranty_notice/action_warranty_notice_edit" enctype="multipart/form-data">
				
				 <input type="hidden" name="id_warranty_notice" value="<?php echo $warranty_noticeku['id_warranty_notice']; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Add Warranty Notice</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="name_of_warranty_issue" class="col-sm-3 control-label">Name of Warranty Issue</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="name_of_warranty_issue" name="name_of_warranty_issue" value="<?php echo $warranty_noticeku['name_of_warranty_issue']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
							<div class="form-group">
                                <label for="follow_up" class="col-sm-3 control-label">Follow Up</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="follow_up" name="follow_up" value="<?php echo $warranty_noticeku['follow_up']; ?>" />
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
							<div class="form-group">
                                <label for="document" class="col-sm-3 control-label">Document</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="document" name="document" value="<?php echo $warranty_noticeku['document']; ?>" disabled/>
								 <input type="hidden" class="form-control" id="document" name="document" value="<?php echo $warranty_noticeku['document']; ?>" />
                                </div>
                            </div>
                        </div>
						
					
						<br><br><br>
						 <div class="col-lg-10">
                            <div class="form-group">
                               <label for="status" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-5">
								<?php
										if ($warranty_noticeku['status'] == 1){
												$jelas = "Open";
											} else {
												$jelas = "Close";
											}
												?>		
						<select class="form-control" id="status" name="status" required>	
							
							
							<option value="<?php echo $warranty_noticeku['status']; ?>"><?php echo $jelas; ?></option>
							<option>--Pilih Status--</option>
							<option value="1">Open</option>
							<option value="2">Close</option>
							
							</select>													
								
								 
                                </div>
                            </div>
                        </div>
                        
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>warranty_notice/warranty_notice_view" class="btn btn-danger">Kembali</a>
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