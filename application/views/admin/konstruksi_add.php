 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Kontrak Pengadaan Jasa konstruksi
        <small>Update Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="#">Kontrak Pengadaan Jasa konstruksi</a></li>
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
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>Admin/action_konstruksi_add" enctype="multipart/form-data">
				
				 <input type="hidden" name="id_users" value="<?php echo $id_users; ?>">
				 <input type="hidden" name="email" value="<?php echo $email; ?>">
            <div class="box-header with-border">
              <h3 class="box-title">Add Data</h3>
            </div>
            <div class="box-body">
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="nomor_kontrak" class="col-sm-3 control-label">Nomor Kontrak</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nomor_kontrak" name="nomor_kontrak" placeholder="Please Input Nomor Kontrak" />
                                </div>
                            </div>
                        </div>
						
						<br><br><br>
							<div class="form-group">
                                <label for="nomor_surat_permohonan_pembayaran" class="col-sm-3 control-label">Nomor Pembayaran</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="nomor_surat_permohonan_pembayaran" name="nomor_surat_permohonan_pembayaran" placeholder="Please Input Nomor Pembayaran" />
                                </div>
                            </div>
						<br><br><br>
						<div class="col-lg-10">
							<div class="form-group">
								<label for="jenis_dokumen" class="col-sm-3 control-label">Pilih Jenis Dokumen:</label>
								 <div class="col-sm-5">
									<select class="form-control" id="jenis_dokumen" name="jenis_dokumen">
										<option>---- Pilih Jenis Dokumen ----</option>
										<option value='Kontrak / SPK Asli'>Kontrak / SPK Asli</option>
										<option value='Laporan Kemajuan Pekerjaan'>Laporan Kemajuan Pekerjaan</option>
										<option value='Foto Dokumentasi Kemajuan Pekerjaan'>Foto Dokumentasi Kemajuan Pekerjaan</option>
										<option value='Berita Acara Pemeriksaan Pekerjaan'>Berita Acara Pemeriksaan Pekerjaan</option>
										<option value='Berita Acara Serah Terima Pekerjaan'>Berita Acara Serah Terima Pekerjaan</option>
										<option value='Berita Acara Masa Pemeliharaan Selesai'>Berita Acara Masa Pemeliharaan Selesai</option>
										<option value='Surat Permohonan Pembayaran'>Surat Permohonan Pembayaran</option>
										<option value='Berita Acara Pembayaran'>Berita Acara Pembayaran</option>
										<option value='Invoice'>Invoice</option>
										<option value='Kwitansi'>Kwitansi</option>
										<option value='Faktur Pajak'>Faktur Pajak</option>
										<option value='Copy NPWP dan Keterangan Pengusaha Kena Pajak'>Copy NPWP dan Keterangan Pengusaha Kena Pajak</option>
									</select>
								</div>
							  </div>
						</div>
						<br><br><br>
						
						<div class="col-lg-10">
							<div class="form-group">
                                <label for="upload_dokumen" class="col-sm-3 control-label">Upload Dokumen</label>
                                <div class="col-sm-5">
                 <input type="file" class="form-control" id="upload_dokumen" name="upload_dokumen" /> 
                 
								   </div>
                            </div>
                        </div>
						
                        
            </div>
            <!-- /.box-body -->
			<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>Admin/konstruksi_view" class="btn btn-danger">Kembali</a>
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
  