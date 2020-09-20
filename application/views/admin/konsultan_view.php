 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<h1>
		 Kontrak Pengadaan Jasa Konsultan
 			<small>Update Data</small>
 		</h1>
 		<ol class="breadcrumb">
 			<li><a href="#"><i class="fa fa-dashboard"></i> Kontrak Pengadaan Jasa Konsultan</a></li>
 			<li class="active">Update Data</li>
 		</ol>
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<div class="row">
 			<div class="col-xs-12">
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Kontrak Pengadaan Jasa Konsultan</h3>
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
 									<th>Jenis Dokumen</th>
 									<th>Nama File</th>
 									
 									<th>Actions</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($konsultan_view->result_array() as $data) { ?>


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
 											<?php echo $data['jenis_dokumen']; ?>
 										</td>

 										<td>
 											<?php echo $data['nama_dokumen']; ?>
 										</td>

 										
											
 					

 										

 										<td>
 											<input type="hidden" name="id_dokumen" value="<?php echo $data['id_dokumen']; ?>">
 											<div class="hidden-sm hidden-xs action-buttons">


 												
 												<a class="red" value="<?php echo $data['id_dokumen']; ?>" href="<?php echo base_url() . "Admin/konsultan_delete?id_dokumen=" . $data['id_dokumen'] ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">

 													<i class="fa fa-trash-o bigger-130"></i>
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
 						<div class="row">
 							<div id="default-buttons" class="col-sm-6">
 								<a class="btn btn-primary" href="<?php echo site_url('Admin/konsultan_add'); ?>">Add Data</a>
 							</div>
 						</div>
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
