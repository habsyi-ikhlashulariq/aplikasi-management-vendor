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
 									<th>Nama Dokumen</th>
 									<th>Masa Berakhir</th>
 									<th>Jenis Dokumen</th>
 									<th>Kontrak</th>
 									<th>User</th>
 									<th>Komentar Direksi Pekerjaan</th>
 									<th>Tanggal Komentar</th> 									
 									<th>Komentar Staff BAT</th>
 									<th>Tanggal Komentar</th>
 									<th>Komentar Asman BAT</th>
 									<th>Tanggal Komentar</th>
 									<th>Komentar MSB BAT</th>
 									<th>Tanggal Komentar</th>
 									<th>Komentar Staff Keuangan</th>
 									<th>Tanggal Komentar</th>
 									<th>Komentar Asman Keuangan</th>
 									<th>Tanggal Komentar</th>
 									<th>Komentar MSB Keuangan</th>
 									<th>Tanggal Komentar</th>
 									<th>Role</th>
 									<th>Email User</th>
 									<th>Alasan Keterlambatan</th>
 									
 									
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
 											<a href='<?php echo base_url(); ?>public/document/<?php echo $data['id_users']; ?>/<?php echo $data['nama_dokumen']; ?>' target='_blank' type='button'><?php echo $data['nama_dokumen']; ?></a>
 										</td>

										<td>
										<?php echo date('d-m-Y', strtotime($data['tgl_berakhir'])); ?>
 										</td>
 										
 										<td>
 											<?php echo $data['jenis_dokumen']; ?>
 										</td>
										<td>
 											<?php echo $data['jenis_kontrak']; ?>
 										</td>
										<td>
 											<?php echo $data['nama_vendor']; ?>
 										</td>
										
										<td>
 											<?php echo $data['isi_komentar_direksi_pekerjaan']; ?>
 										</td>

 										<td>
 											<?php echo date('d-m-Y', strtotime($data['tgl_komentar_direksi_pekerjaan'])); ?>
 										</td>
										 <td>
										 <?php echo date('d-m-Y', strtotime($data
										 ['tgl_komentar_staff_bat'])); ?>
 										</td>

										<td>
 											<?php echo $data['isi_komentar_asman_bat']; ?>
 										</td>

 										<td>
										 <?php echo date('d-m-Y', strtotime($data
										 	['tgl_komentar_asman_bat'])); ?>
 										</td>

										<td>
 											<?php echo $data['isi_komentar_msb_bat']; ?>
 										</td>

 										<td>
										 <?php echo date('d-m-Y', strtotime($data
										 	['tgl_komentar_msb_bat'])); ?>
 										</td>
										<td>
 											<?php echo $data['isi_komentar_staff_keuangan']; ?>
 										</td>

 										<td>
										 <?php echo date('d-m-Y', strtotime($data
										 	['tgl_komentar_staff_keuangan'])); ?>
 										</td>

										<td>
 											<?php echo $data['isi_komentar_asman_keuangan']; ?>
 										</td>

 										<td>
										 <?php echo date('d-m-Y', strtotime($data
										 	['tgl_komentar_asman_keuangan'])); ?>
 										</td>

										<td>
 											<?php echo $data['isi_komentar_msb_keuangan']; ?>
 										</td>

 										<td>
										 <?php echo date('d-m-Y', strtotime($data
										 	['tgl_komentar_msb_keuangan'])); ?>
 										</td>

 										<td>
 											<?php echo $data['nama_role']; ?>
 										</td>

 										<td>
 											<?php echo $data['email']; ?>
 										</td>
										 <td>
										 <?php
											$tgl_dateline= new DateTime($data['tgl_berakhir']);
											//echo $tgl_dateline;
											$tgl_sekarang= new DateTime();
											//echo $tgl_sekarang;
										//	$keterlambatan= date_diff($tgl_dateline, $tgl_sekarang);
											$keterlambatan= $tgl_dateline->diff($tgl_sekarang)->format("%d");
											//echo $keterlambatan;
											//exit;
												
											if ($keterlambatan > 0) {
												echo $data['alasan_keterlambatan_msb_bat'];
											}else{
												echo "Belum Telat";
											}
														
										?>
										 </td>

 										<td>
										 <input type="hidden" name="id_dokumen" value="<?php echo $data['id_dokumen']; ?>">
 											<div class="hidden-sm hidden-xs action-buttons d-inline">

												<?php
													$tgl_dateline= new DateTime($data['tgl_berakhir']);
													$tgl_sekarang= new DateTime();
													//$keterlambatan= date_diff($tgl_dateline, $tgl_sekarang);
													
											$keterlambatan= $tgl_dateline->diff($tgl_sekarang)->format("%d");
													if ($keterlambatan > 0) {
														
												?>



 												<a class="green" value="<?php echo $data['id_dokumen']; ?>" href="<?php echo base_url() . "Admin/alasan_keterlambatan_asman_bat?id_dokumen=" . $data['id_dokumen'] ?>">

 													<button type="button" class="btn btn-block btn-danger">Sertakan Alasan</button>
 												</a>
												 <?php
													}else {											
												 ?>
													<a class="green" value="<?php echo $data['id_dokumen']; ?>" href="<?php echo base_url() . "Admin/dokumen_verifikasi_asman_bat?id_dokumen=" . $data['id_dokumen'] ?>">

													<button type="button" class="btn btn-block btn-success">Verifikasi</button>
													</a>
												<?php 
												} ?>
 												
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
