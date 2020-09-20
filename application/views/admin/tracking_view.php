
 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tracking Dokumen
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tracking Dokumen PLN</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tracking Dokumen</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
			
<div class="container">

<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>Admin/search_dokumen" enctype="multipart/form-data">
 <div class="row">
 
            <div class="col-md-6">
              <div class="form-group">
                <label>Nomor Kontrak</label>
                <select class="form-control select2" id="nomor_kontrak" name="nomor_kontrak"  style="width: 100%;" required>
                  <option value="0">--Pilih Nomor Kontrak--</option>
                  
							<?php foreach ($tracking_view->result_array() as $data) { ?>
							
							<option value="<?php echo $data['nomor_kontrak']; ?>"><?php echo $data['nomor_kontrak']; ?></option>
							
							<?php } ?>
                                    
                </select>
              </div>
              <div class="form-group">
                <label>Jenis Dokumen</label>
             
									<select class="form-control" id="jenis_dokumen" name="jenis_dokumen" required>
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
              <!-- /.form-group -->
						
			<div class="box-footer">
                        <div class="pull-center">
						
                           
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
			
          </div>
		  
    		
			</form>
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
  
  