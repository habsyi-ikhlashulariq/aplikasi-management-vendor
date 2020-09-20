 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Verfikasi Dokumen
        <small>Update Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="#">Verfikasi Dokumen</a></li>
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
		   
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_dokumen_verifikasi_direksi_pekerjaan?id_dokumen=<?php echo $dokumennya['id_dokumen']; ?>" enctype="multipart/form-data">
				
				
				 <input type="hidden" name="id_dokumen" value="<?php echo $dokumennya['id_dokumen']; ?>">
				 <input type="hidden" name="id_role" value="<?php echo $dokumennya['id_role']; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Add Data</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="nama_dokumen" class="col-sm-3 control-label">Nama Dokumen</label>
                                <div class="col-sm-5">
                                <span> 
 							<a  id="nama_dokumen" name="nama_dokumen" href='<?php echo base_url(); ?>public/document/<?php echo $dokumennya['id_users']; ?>/<?php echo $dokumennya['nama_dokumen']; ?>' target='_blank' type='button'>
								<button type="button" class="btn btn-block btn-primary"><?php echo $dokumennya['nama_dokumen']; ?></button>
							</a>			</span>
										
				 <input type="hidden" name="nama_dokumen" value="<?php echo $dokumennya['nama_dokumen']; ?>">
								</div>
                            </div>
                        </div>
						<br><br><br>
						
						      <div class="col-lg-10">
						        	<div class="form-group">
                                <label for="isi_komentar_direksi_pekerjaan" class="col-sm-3 control-label">Komentar</label>
                                <div class="col-sm-5">
<textarea class="form-control" id="isi_komentar_direksi_pekerjaan" name="isi_komentar_direksi_pekerjaan" aria-label="Komentar"></textarea>                          
							  </div>
                            </div>
                   </div>
						<br><br><br>
						
                        
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>Admin/dokumen_direksi_pekerjaan" class="btn btn-danger">Kembali</a>
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
  