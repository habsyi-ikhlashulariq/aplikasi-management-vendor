 
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
		   
		   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/action_konstruksi_edit?id_konstruksi=<?php echo $konstruksinya['id_konstruksi']; ?>" enctype="multipart/form-data">
				
				
				 <input type="hidden" name="id_konstruksi" value="<?php echo $konstruksinya['id_konstruksi']; ?>">
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
								 <input type="text" class="form-control" id="nomor_kontrak" name="nomor_kontrak" value="<?php echo $konstruksinya['nomor_kontrak']; ?>" />
                                </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
							<div class="form-group">
                                <label for="kontrak_asli" class="col-sm-3 control-label">Kontrak / SPK Asli</label>
                                <div class="col-sm-5">
								<?php if (!$konstruksinya['kontrak_asli']){ ?>
								<input type="file" class="form-control" id="kontrak_asli" name="kontrak_asli"  />
								<?php	} else { ?>
								<input type="text" class="form-control" id="kontrak_asli" name="kontrak_asli" value="<?php echo $konstruksinya['kontrak_asli']; ?>" readonly/>
								<?php } ?>
                                </div>
                            </div>
                        </div>
						
					
						<br><br><br>
						<div class="col-lg-10">
							<div class="form-group">
                                <label for="laporan_kemajuan" class="col-sm-3 control-label">Laporan Kemajuan Pekerjaan</label>
                                <div class="col-sm-5">
                 <?php if (!$konstruksinya['laporan_kemajuan']){ ?>
                 <input type="file" class="form-control" id="laporan_kemajuan" name="laporan_kemajuan" value="<?php echo $konstruksinya['laporan_kemajuan']; ?>"/> Note : 3 (Tiga) rangkap
								<?php	} else { ?>
								<input type="text" class="form-control" id="laporan_kemajuan" name="laporan_kemajuan" value="<?php echo $konstruksinya['laporan_kemajuan']; ?>" readonly/>
								<?php } ?>
								   </div>
                            </div>
                        </div>
						<br><br><br>
						<div class="col-lg-10">
							<div class="form-group">
                                <label for="dokumentasi_pekerjaan" class="col-sm-3 control-label">Foto dokumentasi Kemajuan Pekerjaan</label>
                                <div class="col-sm-5">
                 
                 <?php if (!$konstruksinya['dokumentasi_pekerjaan']){ ?>
                 <input type="file" class="form-control" id="dokumentasi_pekerjaan" name="dokumentasi_pekerjaan" /> 
								<?php	} else { ?>
								<input type="text" class="form-control" id="dokumentasi_pekerjaan" name="dokumentasi_pekerjaan" value="<?php echo $konstruksinya['dokumentasi_pekerjaan']; ?>" readonly/>
								<?php } ?>
								   </div>
                            </div>
                        </div>
						
					
						
						
					
						<br><br><br>
						      <div class="col-lg-10">
						        	<div class="form-group">
                                <label for="ba_pemeriksaan" class="col-sm-3 control-label">Berita Acara Pemeriksaan Pekerjaan</label>
                                <div class="col-sm-5">
								         
                 <?php if (!$konstruksinya['ba_pemeriksaan']){ ?>
				 <input type="file" class="form-control" id="ba_pemeriksaan" name="ba_pemeriksaan" value="<?php echo $konstruksinya['ba_pemeriksaan']; ?>"/>Note : 3 (Tiga) rangkap
                               
								<?php	} else { ?>
								<input type="text" class="form-control" id="ba_pemeriksaan" name="ba_pemeriksaan" value="<?php echo $konstruksinya['ba_pemeriksaan']; ?>" readonly/>
								<?php } ?>
							   </div>
                            </div>
                   </div>
						<br><br><br>
						      <div class="col-lg-10">
						        	<div class="form-group">
                                <label for="ba_serah_terima" class="col-sm-3 control-label">Berita Acara Serah Terima Pekerjaan</label>
                                <div class="col-sm-5">
								        
								         
                 <?php if (!$konstruksinya['ba_serah_terima']){ ?>
				  <input type="file" class="form-control" id="ba_serah_terima" name="ba_serah_terima" value="<?php echo $konstruksinya['ba_serah_terima']; ?>" /> Note : 3 (tiga) rangkap, 2 (dua) bermaterai (dapat menyesuaikan apabila pekerjaan ditagihkan secara bertahap)
                                            
								<?php	} else { ?>
								<input type="text" class="form-control" id="ba_serah_terima" name="ba_serah_terima" value="<?php echo $konstruksinya['ba_serah_terima']; ?>" readonly/>
								<?php } ?>
							   </div>
                            </div>
                   </div>
				   <br><br><br>
						      <div class="col-lg-10">
						        	<div class="form-group">
                                <label for="ba_masa_pemeliharaan" class="col-sm-3 control-label">Berita Acara Masa Pemeliharaan Selesai </label>
                                <div class="col-sm-5">
								                 
                 <?php if (!$konstruksinya['ba_masa_pemeliharaan']){ ?>
				  <input type="file" class="form-control" id="ba_masa_pemeliharaan" name="ba_masa_pemeliharaan" value="<?php echo $konstruksinya['ba_masa_pemeliharaan']; ?>" /> Note : 3 (tiga) rangkap, 2 (dua) bermaterai (dapat menyesuaikan apabila pekerjaan ditagihkan secara bertahap)
                                            
								<?php	} else { ?>
								<input type="text" class="form-control" id="ba_masa_pemeliharaan" name="ba_masa_pemeliharaan" value="<?php echo $konstruksinya['ba_masa_pemeliharaan']; ?>" readonly/>
								<?php } ?>
								</div>
                            </div>
                   </div>
						
						<br><br><br>
						      <div class="col-lg-10">
						        	<div class="form-group">
                                <label for="surat_permohonan_pembayaran" class="col-sm-3 control-label">Surat Permohonan Pembayaran</label>
                                <div class="col-sm-5">
								        
<?php if (!$konstruksinya['surat_permohonan_pembayaran']){ ?>
				   <input type="file" class="form-control" id="surat_permohonan_pembayaran" name="surat_permohonan_pembayaran" value="<?php echo $konstruksinya['surat_permohonan_pembayaran']; ?>" />                         
								<?php	} else { ?>
								<input type="text" class="form-control" id="surat_permohonan_pembayaran" name="surat_permohonan_pembayaran" value="<?php echo $konstruksinya['surat_permohonan_pembayaran']; ?>" readonly/>
								<?php } ?>                               
							   </div>
                            </div>
                   </div>
						<br><br><br>
						      <div class="col-lg-10">
						        	<div class="form-group">
                                <label for=ba_pembayaran" class="col-sm-3 control-label">Berita Acara Pembayaran</label>
                                <div class="col-sm-5">
								         
								<?php if (!$konstruksinya['ba_pembayaran']){ ?>
				   <input type="file" class="form-control" id="ba_pembayaran" name="ba_pembayaran" value="<?php echo $konstruksinya['ba_pembayaran']; ?>" />Note : 3 (tiga) rangkap, 2 (dua) bermaterai
                                			<?php	} else { ?>
								<input type="text" class="form-control" id="ba_pembayaran" name="ba_pembayaran" value="<?php echo $konstruksinya['ba_pembayaran']; ?>" readonly/>
								<?php } ?>   
								</div>
                            </div>
                   </div>
						<br><br><br>
						      <div class="col-lg-10">
						        	<div class="form-group">
                                <label for=invoice" class="col-sm-3 control-label">Invoice</label>
                                <div class="col-sm-5">
								           <?php if (!$konstruksinya['invoice']){ ?>
				  <input type="file" class="form-control" id="invoice" name="invoice" value="<?php echo $konstruksinya['invoice']; ?>" />Note : 3 (Tiga) rangkap
                                           			<?php	} else { ?>
								<input type="text" class="form-control" id="invoice" name="invoice" value="<?php echo $konstruksinya['invoice']; ?>" readonly/>
								<?php } ?> 
								</div>
                            </div>
                   </div>
						<br><br><br>
						      <div class="col-lg-10">
						        	<div class="form-group">
                                <label for=kwitansi" class="col-sm-3 control-label">Kwitansi</label>
                                <div class="col-sm-5">
								         
                                <?php if (!$konstruksinya['kwitansi']){ ?>
								<input type="file" class="form-control" id="kwitansi" name="kwitansi" value="<?php echo $konstruksinya['kwitansi']; ?>" />Note : 3 (Tiga) rangkap, 2 (dua) bermaterai
                                           			<?php	} else { ?>
								<input type="text" class="form-control" id="kwitansi" name="kwitansi" value="<?php echo $konstruksinya['kwitansi']; ?>" readonly/>
								<?php } ?> 
								</div>
                            </div>
                   </div>
						<br><br><br>
						      <div class="col-lg-10">
						        	<div class="form-group">
                                <label for=faktur_pajak" class="col-sm-3 control-label">Faktur Pajak</label>
                                <div class="col-sm-5">
								         
<?php if (!$konstruksinya['faktur_pajak']){ ?>
								<input type="file" class="form-control" id="faktur_pajak" name="faktur_pajak" value="<?php echo $konstruksinya['faktur_pajak']; ?>" />
                                           			<?php	} else { ?>
								<input type="text" class="form-control" id="faktur_pajak" name="faktur_pajak" value="<?php echo $konstruksinya['faktur_pajak']; ?>" readonly/>
								<?php } ?>                                
							   </div>
                            </div>
                   </div>
						<br><br><br>
						      <div class="col-lg-10">
						        	<div class="form-group">
                                <label for=copy_npwp" class="col-sm-3 control-label">Copy NPWP dan Keterangan Pengusaha Kena Pajak</label>
                                <div class="col-sm-5">

<?php if (!$konstruksinya['copy_npwp']){ ?>
								
								         <input type="file" class="form-control" id="copy_npwp" name="copy_npwp" value="<?php echo $konstruksinya['copy_npwp']; ?>" />
                                           			<?php	} else { ?>
								<input type="text" class="form-control" id="copy_npwp" name="copy_npwp" value="<?php echo $konstruksinya['copy_npwp']; ?>" readonly/>
								<?php } ?>                               
							  </div>
                            </div>
                   </div>
						<br><br><br>
						
                        
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
  