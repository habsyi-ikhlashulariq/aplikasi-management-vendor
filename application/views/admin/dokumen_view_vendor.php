 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<h1>
		 Verifikasi Dokumen
 			<small>Update Data</small>
 		</h1>
 		<ol class="breadcrumb">
 			<li><a href="#"><i class="fa fa-dashboard"></i> Verifikasi Dokumen</a></li>
 			<li class="active">Update Data</li>
 		</ol>
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<div class="row">
 			<div class="col-xs-12">
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Verifikasi Dokumen</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<table id="example1" class="table table-bordered table-striped">
 							<thead>
 								<tr>
 									<th class="center">
 										No.
 									</th>
 									<th>Nomor Kontrak</th>
 									<th>User</th>
 									<th>Email</th>
 									<th>Kontrak / Spk Asli</th>
 									<th>Laporan Kemajuan Pekerjaan</th>
 									<th>Berita Acara Pemeriksaan Pekerjaan</th>
 									<th>Berita Acara Serah Terima Pekerjaan</th>
 									<th>Berita Acara Masa Pemeliharaan</th>
 									<th>Invoice</th>
 									<th>Kwitansi</th>
 									<th>Faktur Pajak</th>
 									<th>Copy Npwp</th>
 												
 									
 									<th>Actions</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($dokumen_view->result_array() as $data) { ?>


 									<tr>
 										<td class="center">
 											<?php echo $no; ?>
 										</td>
 										
 										<td>
											<?= $data['nomor_kontrak']?>	
 										</td>

 										<td>
 											 <?= $data['nama_vendor'] ?>
 										</td>
										<td>
 											<?php echo $data['email']; ?>
 										</td>
										<td>
										<?php
												if ($data['jenis_dokumen'] == $jenis_dokumen[0]) {
													?>
													<a href='<?php echo base_url(); ?>public/document/<?php echo $data['id_users']; ?>/<?php echo $data['nama_dokumen']; ?>' target='_blank' type='button'><?php echo $data['nama_dokumen']; ?></a>
												<?php }else{
													echo "";
												}

											?>
 										</td>
										<td>
										<?php
												if ($data['jenis_dokumen'] == $jenis_dokumen[1]) {
													?>
													<a href='<?php echo base_url(); ?>public/document/<?php echo $data['id_users']; ?>/<?php echo $data['nama_dokumen']; ?>' target='_blank' type='button'><?php echo $data['nama_dokumen']; ?></a>
												<?php }else{
													echo "";
												}

											?>
 										</td>
										<td>
										<?php
												if ($data['jenis_dokumen'] == $jenis_dokumen[2]) {
													?>
													<a href='<?php echo base_url(); ?>public/document/<?php echo $data['id_users']; ?>/<?php echo $data['nama_dokumen']; ?>' target='_blank' type='button'><?php echo $data['nama_dokumen']; ?></a>
												<?php }else{
													echo "";
												}

											?>
 										</td>

 										<td>
										 <?php
												if ($data['jenis_dokumen'] == $jenis_dokumen[3]) {
													?>
													<a href='<?php echo base_url(); ?>public/document/<?php echo $data['id_users']; ?>/<?php echo $data['nama_dokumen']; ?>' target='_blank' type='button'><?php echo $data['nama_dokumen']; ?></a>
												<?php }else{
													echo "";
												}

											?>
 										</td>

										<td>
										<?php
												if ($data['jenis_dokumen'] == $jenis_dokumen[4]) {
													?>
													<a href='<?php echo base_url(); ?>public/document/<?php echo $data['id_users']; ?>/<?php echo $data['nama_dokumen']; ?>' target='_blank' type='button'><?php echo $data['nama_dokumen']; ?></a>
												<?php }else{
													echo "";
												}

											?>
 										</td>

 										<td>
										 <?php
												if ($data['jenis_dokumen'] == $jenis_dokumen[5]) {
													?>
													<a href='<?php echo base_url(); ?>public/document/<?php echo $data['id_users']; ?>/<?php echo $data['nama_dokumen']; ?>' target='_blank' type='button'><?php echo $data['nama_dokumen']; ?></a>
												<?php }else{
													echo "";
												}

											?>
 										</td>

										<td>
										<?php
												if ($data['jenis_dokumen'] == $jenis_dokumen[6]) {
													?>
													<a href='<?php echo base_url(); ?>public/document/<?php echo $data['id_users']; ?>/<?php echo $data['nama_dokumen']; ?>' target='_blank' type='button'><?php echo $data['nama_dokumen']; ?></a>
												<?php }else{
													echo "";
												}

											?>
 										</td>

 										<td>
										 <?php
												if ($data['jenis_dokumen'] == $jenis_dokumen[7]) {
													?>
													<a href='<?php echo base_url(); ?>public/document/<?php echo $data['id_users']; ?>/<?php echo $data['nama_dokumen']; ?>' target='_blank' type='button'><?php echo $data['nama_dokumen']; ?></a>
												<?php }else{
													echo "";
												}
											?>
 										</td>
										<td>
										<?php
												if ($data['jenis_dokumen'] == $jenis_dokumen[8]) {
													?>
													<a href='<?php echo base_url(); ?>public/document/<?php echo $data['id_users']; ?>/<?php echo $data['nama_dokumen']; ?>' target='_blank' type='button'><?php echo $data['nama_dokumen']; ?></a>
												<?php }else{
													echo "";
												}
											?>
 										</td>
			

 										<td>
 											<input type="hidden" name="nomor_kontrak" value="<?php echo $data['nomor_kontrak']; ?>">
 											<div class="hidden-sm hidden-xs action-buttons d-inline">


 												<a class="green" value="<?php echo $data['nomor_kontrak']; ?>" href="<?php echo base_url() . "Admin/dokumen_verifikasi_vendor?nomor_kontrak=" . $data['nomor_kontrak'] ?>">

 													<button type="button" class="btn btn-block btn-success">Verifikasi</button>
 												</a>
 												
 											</div>

 										</td>
 									</tr>

 								<?php
										$no++;
									}
									?>
 							</tbody>

 						</table>
 						
 					</div>
 					<!-- /.box-body -->
 				</div>
 				<!-- /.box -->
 			</div>
 			<!-- /.col -->
 		</div>
 		<!-- /.row -->
 	</section>
 	<!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
