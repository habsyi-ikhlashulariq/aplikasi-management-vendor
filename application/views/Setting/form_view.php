 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<h1>
		 Form PLN
 			<small>Update Data</small>
 		</h1>
 		<ol class="breadcrumb">
 			<li><a href="#"><i class="fa fa-dashboard"></i> Form PLN</a></li>
 			<li class="active">Update Data</li>
 		</ol>
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<div class="row">
 			<div class="col-xs-12">
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Form PLN</h3>
 					</div>
 					<!-- /.box-header -->
 					<div class="box-body">
 						<table id="example1" class="table table-bordered table-striped">
 							<thead>
 								<tr>
 									<th class="center">
 										No.
 									</th>
 									<th>Judul Form</th>
 									<th>Nama File</th>
 									<th>Actions</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($form_view->result_array() as $data) { ?>


 									<tr>
 										<td class="center">
 											<?php echo $no; ?>
 										</td>
 										
 										<td>
 											<?php echo $data['judul_form']; ?>
 										</td>

 										<td>
 											<a href='<?php echo base_url(); ?>public/form/<?php echo $data['nama_file']; ?>' target='_blank' type='button'><?php echo $data['nama_file']; ?></a>
 										</td>


 										

 										<td>
 											<input type="hidden" name="id_form" value="<?php echo $data['id_form']; ?>">
 											<div class="hidden-sm hidden-xs action-buttons">


 												
 												<a class="red" value="<?php echo $data['id_form']; ?>" href="<?php echo base_url() . "Setting/form_delete?id_form=" . $data['id_form'] ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">

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
														<a class="btn btn-primary" href="<?php echo site_url('Setting/form_add'); ?>">Add Form</a>
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
