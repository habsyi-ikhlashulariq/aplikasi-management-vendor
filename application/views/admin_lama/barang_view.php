 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<h1>
		 Kontrak Pengadaan Jasa barang
 			<small>Update Data</small>
 		</h1>
 		<ol class="breadcrumb">
 			<li><a href="#"><i class="fa fa-dashboard"></i> Kontrak Pengadaan Jasa barang</a></li>
 			<li class="active">Update Data</li>
 		</ol>
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<div class="row">
 			<div class="col-xs-12">
 				<div class="box">
 					<div class="box-header">
 						<h3 class="box-title">Kontrak Pengadaan Jasa barang</h3>
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
 									<th>Kontrak Asli</th>
 									<th>Laporan Kemajuan Pekerjaan</th>
 									<th>BA Pemeriksaan</th>
 									<th>BA Serah Terima</th>
 									<th>Surat Permohonan Pembayaran</th>
 									<th>BA Pembayaran</th>
 									<th>Invoice</th>
 									<th>Kwitansi</th>
 									<th>Faktur Pajak</th>
 									<th>Copy NPWP dan Keterangan Pengusaha Kena Pajak</th>
 									
 									<th>Actions</th>
 								</tr>
 							</thead>
 							<?php
								$no = 1;
								?>
 							<tbody>
 								<?php foreach ($barang_view->result_array() as $data) { ?>


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
 											<?php if (!($data['kontrak_asli'])){ ?>
										<button type="button" class="btn btn-warning">Not Complete</button>
										<?php	} else { ?>
										
											<button type="button" class="btn btn-success">Completed</button>
											<?php	}  ?>
 										</td>

 										<td>
											<?php if (!($data['laporan_kemajuan'])){ ?>
										<button type="button" class="btn btn-warning">Not Complete</button>
										<?php	} else { ?>
										
											<button type="button" class="btn btn-success">Completed</button>
											<?php	}  ?>
 										</td>

 										<td>
											<?php if (!($data['ba_pemeriksaan'])){ ?>
										<button type="button" class="btn btn-warning">Not Complete</button>
										<?php	} else { ?>
										
											<button type="button" class="btn btn-success">Completed</button>
											<?php	}  ?>
 										</td>

 										<td>
											<?php if (!($data['ba_serah_terima'])){ ?>
										<button type="button" class="btn btn-warning">Not Complete</button>
										<?php	} else { ?>
										
											<button type="button" class="btn btn-success">Completed</button>
											<?php	}  ?>
 										</td>

 										<td>
											<?php if (!($data['surat_permohonan_pembayaran'])){ ?>
										<button type="button" class="btn btn-warning">Not Complete</button>
										<?php	} else { ?>
										
											<button type="button" class="btn btn-success">Completed</button>
											<?php	}  ?>
 										</td>

 										<td>
											<?php if (!($data['ba_pembayaran'])){ ?>
										<button type="button" class="btn btn-warning">Not Complete</button>
										<?php	} else { ?>
										
											<button type="button" class="btn btn-success">Completed</button>
											<?php	}  ?>
 										</td>

 										<td>
											<?php if (!($data['invoice'])){ ?>
										<button type="button" class="btn btn-warning">Not Complete</button>
										<?php	} else { ?>
										
											<button type="button" class="btn btn-success">Completed</button>
											<?php	}  ?>
 										</td>

 										<td>
											<?php if (!($data['kwitansi'])){ ?>
										<button type="button" class="btn btn-warning">Not Complete</button>
										<?php	} else { ?>
										
											<button type="button" class="btn btn-success">Completed</button>
											<?php	}  ?>
 										</td>

 										<td>
											<?php if (!($data['faktur_pajak'])){ ?>
										<button type="button" class="btn btn-warning">Not Complete</button>
										<?php	} else { ?>
										
											<button type="button" class="btn btn-success">Completed</button>
											<?php	}  ?>
										 </td>
										 
 										<td>
											<?php if (!($data['copy_npwp'])){ ?>
										<button type="button" class="btn btn-warning">Not Complete</button>
										<?php	} else { ?>
										
											<button type="button" class="btn btn-success">Completed</button>
											<?php	}  ?>
 										</td>
											
 					

 										

 										<td>
 											<input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
 											<div class="hidden-sm hidden-xs action-buttons">


 												<a class="green" value="<?php echo $data['id_barang']; ?>" href="<?php echo base_url() . "Admin/barang_edit?id_barang=" . $data['id_barang'] ?>">

 													<i class="fa fa-pencil bigger-130"></i>
 												</a>
 												&nbsp;
 												<a class="red" value="<?php echo $data['id_barang']; ?>" href="<?php echo base_url() . "Admin/barang_delete?id_barang=" . $data['id_barang'] ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');">

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
 								<a class="btn btn-primary" href="<?php echo site_url('Admin/barang_add'); ?>">Add Data</a>
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
