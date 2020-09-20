 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<h1>
		 Penilaian User
 			<small>Update Data</small>
 		</h1>
 		<ol class="breadcrumb">
 			<li><a href="#"><i class="fa fa-dashboard"></i> Penilaian User</a></li>
 			<li class="active">Update Data</li>
 		</ol>
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<div class="row">
 			<div class="col-xs-12">
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Penilaian Direksi Pekerjaan</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<table id="example1" class="table table-bordered table-striped">
 							<thead>
 								<tr>
 									<th class="center">
 										No.
 									</th>
 									
 									<th>Jumlah Dokumen Berhasil</th>
 									<th>Jumlah Dokumen Terlambat</th>
 									<th>Performance</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($penilaian_user_direksi_pekerjaan->result_array() as $data) { ?>


 									<tr>
 										<td class="center">
 											<?php echo $no; ?>
 										</td>
 										
 										<td>
 											<?php echo $data['jumlah_dokumen_direksi_pekerjaan']; ?>
 										</td>


 										<td>
 											<?php echo $data['jumlah_dokumen_direksi_pekerjaan_terlambat']; ?>
 										</td>
										
										<td>
 											<?php 
											$hasil_performance = round($data['jumlah_dokumen_direksi_pekerjaan_terlambat']/$data['jumlah_dokumen_direksi_pekerjaan']*100,2); 
											$hasil_akhir=100-$hasil_performance;
											echo "$hasil_akhir %";
											?>
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
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Penilaian Staff BAT</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<table id="example1" class="table table-bordered table-striped">
 							<thead>
 								<tr>
 									<th class="center">
 										No.
 									</th>
 									<th>Jumlah Dokumen Berhasil</th>
 									<th>Jumlah Dokumen Terlambat</th>
 									<th>Performance</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($penilaian_user_staff_bat->result_array() as $data) { ?>


 									<tr>
 										<td class="center">
 											<?php echo $no; ?>
 										</td>
 										
 										<td>
 											<?php echo $data['jumlah_dokumen_staff_bat']; ?>
 										</td>


 										<td>
 											<?php echo $data['jumlah_dokumen_staff_bat_terlambat']; ?>
 										</td>

										<td>
 											<?php 
											$hasil_performance = round($data['jumlah_dokumen_staff_bat_terlambat']/$data['jumlah_dokumen_staff_bat']*100,2); 
											$hasil_akhir=100-$hasil_performance;
											echo "$hasil_akhir %";
											?>
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
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Penilaian ASMAN BAT</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<table id="example1" class="table table-bordered table-striped">
 							<thead>
 								<tr>
 									<th class="center">
 										No.
 									</th>
 									<th>Jumlah Dokumen Berhasil</th>
 									<th>Jumlah Dokumen Terlambat</th>
 									<th>Performance</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($penilaian_user_asman_bat->result_array() as $data) { ?>


 									<tr>
 										<td class="center">
 											<?php echo $no; ?>
 										</td>
 										
 										<td>
 											<?php echo $data['jumlah_dokumen_asman_bat']; ?>
 										</td>


 										<td>
 											<?php echo $data['jumlah_dokumen_asman_bat_terlambat']; ?>
 										</td>

										<td>
 											<?php 
											$hasil_performance = round($data['jumlah_dokumen_asman_bat_terlambat']/$data['jumlah_dokumen_asman_bat']*100,2); 
											$hasil_akhir=100-$hasil_performance;
											echo "$hasil_akhir %";
											?>
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
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Penilaian MSB BAT</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<table id="example1" class="table table-bordered table-striped">
 							<thead>
 								<tr>
 									<th class="center">
 										No.
 									</th>
 									<th>Jumlah Dokumen Berhasil</th>
 									<th>Jumlah Dokumen Terlambat</th>
 									<th>Performance</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($penilaian_user_msb_bat->result_array() as $data) { ?>


 									<tr>
 										<td class="center">
 											<?php echo $no; ?>
 										</td>
 										
 										<td>
 											<?php echo $data['jumlah_dokumen_msb_bat']; ?>
 										</td>


 										<td>
 											<?php echo $data['jumlah_dokumen_msb_bat_terlambat']; ?>
 										</td>


										<td>
 											<?php 
											$hasil_performance = round($data['jumlah_dokumen_msb_bat_terlambat']/$data['jumlah_dokumen_msb_bat']*100,2); 
											$hasil_akhir=100-$hasil_performance;
											echo "$hasil_akhir %";
											?>
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
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Penilaian Staff Keuangan</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<table id="example1" class="table table-bordered table-striped">
 							<thead>
 								<tr>
 									<th class="center">
 										No.
 									</th>
 									<th>Jumlah Dokumen Berhasil</th>
 									<th>Jumlah Dokumen Terlambat</th>
 									<th>Performance</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($penilaian_user_staff_keuangan->result_array() as $data) { ?>


 									<tr>
 										<td class="center">
 											<?php echo $no; ?>
 										</td>
 										
 										<td>
 											<?php echo $data['jumlah_dokumen_staff_keuangan']; ?>
 										</td>


 										<td>
 											<?php echo $data['jumlah_dokumen_staff_keuangan_terlambat']; ?>
 										</td>



										<td>
 											<?php 
											$hasil_performance = round($data['jumlah_dokumen_staff_keuangan_terlambat']/$data['jumlah_dokumen_staff_keuangan']*100,2); 
											$hasil_akhir=100-$hasil_performance;
											echo "$hasil_akhir %";
											?>
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
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Penilaian Asman Keuangan</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<table id="example1" class="table table-bordered table-striped">
 							<thead>
 								<tr>
 									<th class="center">
 										No.
 									</th>
 									<th>Jumlah Dokumen Berhasil</th>
 									<th>Jumlah Dokumen Terlambat</th>
 									<th>Performance</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($penilaian_user_asman_keuangan->result_array() as $data) { ?>


 									<tr>
 										<td class="center">
 											<?php echo $no; ?>
 										</td>
 										
 										<td>
 											<?php echo $data['jumlah_dokumen_asman_keuangan']; ?>
 										</td>


 										<td>
 											<?php echo $data['jumlah_dokumen_asman_keuangan_terlambat']; ?>
 										</td>



										<td>
 											<?php 
											$hasil_performance = round($data['jumlah_dokumen_asman_keuangan_terlambat']/$data['jumlah_dokumen_asman_keuangan']*100,2); 
											$hasil_akhir=100-$hasil_performance;
											echo "$hasil_akhir %";
											?>
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
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Penilaian MSB Keuangan</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<table id="example1" class="table table-bordered table-striped">
 							<thead>
 								<tr>
 									<th class="center">
 										No.
 									</th>
 									<th>Jumlah Dokumen Berhasil</th>
 									<th>Jumlah Dokumen Terlambat</th>
 									<th>Performance</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($penilaian_user_msb_keuangan->result_array() as $data) { ?>


 									<tr>
 										<td class="center">
 											<?php echo $no; ?>
 										</td>
 										
 										<td>
 											<?php echo $data['jumlah_dokumen_msb_keuangan']; ?>
 										</td>


 										<td>
 											<?php echo $data['jumlah_dokumen_msb_keuangan_terlambat']; ?>
 										</td>


										<td>
 											<?php 
											$hasil_performance = round($data['jumlah_dokumen_msb_keuangan_terlambat']/$data['jumlah_dokumen_msb_keuangan']*100,2); 
											$hasil_akhir=100-$hasil_performance;
											echo "$hasil_akhir %";
											?>
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
