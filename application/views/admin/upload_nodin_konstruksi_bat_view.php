 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<h1>
		 Upload Nodin
 			<small>Update Data</small>
 		</h1>
 		<ol class="breadcrumb">
 			<li><a href="#"><i class="fa fa-dashboard"></i> Upload Nodin</a></li>
 			<li class="active">Update Data</li>
 		</ol>
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<div class="row">
 			<div class="col-xs-12">
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Upload Nodin</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<table id="example1" class="table table-bordered table-striped">
 							<thead>
 								<tr>
 									<th class="center">
 										No.
 									</th>
 									<th>Tanggal Upload</th>
 									<th>Nomor Kontrak</th>
 									<th>Nomor Pembayaran</th>
 									<th>Actions</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($upload_nodin->result_array() as $data) { ?>


 									<tr>
 										<td class="center">
 											<?php echo $no; ?>
 										</td>
 										<td>
 											<?php echo date('d-m-Y' , strtotime($data['tgl_upload'])); ?>
 										</td>

 										<td>
 											<?php echo $data['nomor_kontrak']; ?>
 										</td>

 										<td>
 											<?php echo $data['nomor_surat_permohonan_pembayaran']; ?>
 										</td>


 										
											
 					

 										

 										<td>
 											<input type="hidden" name="id_dokumen" value="<?php echo $data['id_dokumen']; ?>">
 											<input type="hidden" name="id_users" value="<?php echo $data['id_users']; ?>">
 											<div class="hidden-sm hidden-xs action-buttons">


 											
												
 												<a class="green" value="<?php echo $data['id_dokumen']; ?>" href="<?php echo base_url() . "Admin/upload_nodin_konsultan_bat_add?id_dokumen=" . $data['id_dokumen']."&id_users=" .$data['id_users'] ?>">

 													<button type="button" class="btn btn-block btn-success">Upload Nodin</button>
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
