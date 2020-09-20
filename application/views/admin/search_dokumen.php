
 
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
		  
    		<div class="row">
				<div class="col-md-12">
				
					<div style="display:inline-block;width:100%;overflow-y:auto;">
							<ul class="timeline timeline-horizontal">
							
				<?php 
				//print_r($tracking_dokumen->result_array()); exit;
				foreach ($tracking_dokumen->result_array() as $data) { ?>
						<li class="timeline-item">
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">DIREKSI PEKERJAAN</h4>
									<p><small class="text-muted">Mengomentari Dokumen Anda</small></p>
								</div>
								<div class="timeline-body">
								<?php if($data['id_role']=9 && !empty($data['isi_komentar_staff_bat'])) { ?>
									<p><?php echo $data['isi_komentar_staff_bat']; ?></p>
									<?php } else { ?>
									<p>Dokumen Anda Masih dalam Tahap Pemeriksaan oleh <b><?php echo $data['nama_role']; }?></b></p>
								</div>
							</div>
						</li>

						<li class="timeline-item">
							<?php if($data['id_role']=2 && !empty($data['isi_komentar_staff_bat'])) { ?>
								<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<?php } else { ?>
								<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
							 <?php
								} 
							 ?>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">STAFF BAT</h4>
									<p><small class="text-muted">Mengomentari Dokumen Anda</small></p>
								</div>
								<div class="timeline-body">
									<?php if($data['id_role']=2 && !empty($data['isi_komentar_staff_bat'])) { ?>
									<p><?php echo $data['isi_komentar_staff_bat']; ?></p>
									<?php } else { ?>
									<p>Dokumen Anda Masih dalam Tahap Pemeriksaan oleh <b><?php echo $data['nama_role']; }?></b></p>
								</div>
							</div>
						</li>

						<li class="timeline-item">
							<?php if($data['id_role']=5 && !empty($data['isi_komentar_asman_bat'])) { ?>
								<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<?php } else { ?>
								<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
							 <?php
								} 
							 ?>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">ASMAN BAT</h4>
									<p><small class="text-muted">Mengomentari Dokumen Anda</small></p>
								</div>
								<div class="timeline-body">
									<?php if($data['id_role']=5 && !empty($data['isi_komentar_asman_bat'])) { ?>
									<p><?php echo $data['isi_komentar_asman_bat']; ?></p>
									<?php } else { ?>
									<p>Dokumen Anda Masih dalam Tahap Pemeriksaan oleh <b><?php echo $data['nama_role']; }?></b></p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
						<?php if($data['id_role']=6 && !empty($data['isi_komentar_msb_bat'])) { ?>
								<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<?php } else { ?>
								<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
							 <?php
								} 
							 ?>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">MSB BAT</h4>
									<p><small class="text-muted">Mengomentari Dokumen Anda</small></p>
								</div>
								<div class="timeline-body">
									<?php if($data['id_role']=6 && !empty($data['isi_komentar_msb_bat'])) { ?>
									<p><?php echo $data['isi_komentar_msb_bat']; ?></p>
									<?php } else { ?>
									<p>Dokumen Anda Masih dalam Tahap Pemeriksaan oleh <b><?php echo $data['nama_role']; }?></b></p>
								</div>
							</div>
						</li>
						
						<li class="timeline-item">
							
						<?php if($data['id_role']=3 && !empty($data['isi_komentar_staff_keuangan'])) { ?>
								<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<?php } else { ?>
								<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
							 <?php
								} 
							 ?>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">STAFF KEUANGAN</h4>
									<p><small class="text-muted">Mengomentari Dokumen Anda</small></p>
								</div>
								<div class="timeline-body">
									<?php if($data['id_role']=3 && !empty($data['isi_komentar_staff_keuangan'])) { ?>
									<p><?php echo $data['isi_komentar_staff_keuangan']; ?></p>
									<?php } else { ?>
									<p>Dokumen Anda Masih dalam Tahap Pemeriksaan oleh <b><?php echo $data['nama_role']; }?></b></p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							
						<?php if($data['id_role']=7 && !empty($data['isi_komentar_asman_keuangan'])) { ?>
								<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<?php } else { ?>
								<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
							 <?php
								} 
							 ?>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">ASMAN KEUANGAN</h4>
									<p><small class="text-muted">Mengomentari Dokumen Anda</small></p>
								</div>
								<div class="timeline-body">
								<?php if($data['id_role']=7 && !empty($data['isi_komentar_asman_keuangan'])) { ?>
									<p><?php echo $data['isi_komentar_asman_keuangan']; ?></p>
									<?php } else { ?>
									<p>Dokumen Anda Masih dalam Tahap Pemeriksaan oleh <b><?php echo $data['nama_role']; }?></b></p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							
						<?php if($data['id_role']=8 && !empty($data['isi_komentar_msb_keuangan'])) { ?>
								<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<?php } else { ?>
								<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
							 <?php
								} 
							 ?>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">MSB KEUANGAN</h4>
									<p><small class="text-muted">Mengomentari Dokumen Anda</small></p>
								</div>
								<div class="timeline-body">
									<?php if($data['id_role']=8 && !empty($data['isi_komentar_msb_keuangan'])) { ?>
									<p><?php echo $data['isi_komentar_msb_keuangan']; ?></p>
									<?php } else { ?>
									<p>Dokumen Anda Masih dalam Tahap Pemeriksaan oleh <b><?php echo $data['nama_role']; }?></b></p>
								</div>
							</div>
						</li>
						
						<?php } ?>
					</ul>
						
				</div>
				</div>
			</div>
			</form>
		</div>
 
        </div>
        <!-- /.box-body -->
		<div class="box-footer">
                        <div class="pull-center">
						
                            <a href="<?php echo base_url(); ?>Admin/tracking_view" class="btn btn-danger">Kembali</a>
                         
                        </div>
                    </div>
        
        <!-- /.box-footer-->
     
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  