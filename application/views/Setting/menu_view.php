 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting
        <small>Manage Menu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Setting</a></li>
        <li class="active">Manage Menu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Master Menu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th class="center">
				  No.
				 </th>
                  <th>Nama Menu</th>
                  <th>Link</th>
                  <th>Icon</th>
				  <th>Menu Utama</th>
				  <th>Action</th>
                </tr>
                </thead>
				<?php 
				$no =1;
				?>
                <tbody>
				<?php foreach ($menu_view->result_array() as $data) { ?>
				
				
                <tr>
					<td class="center">
						<?php echo $no; ?>
					</td>
                  <td>
						<?php echo $data['nama_menu']; ?>
				  </td>
                  <td>
						<?php echo $data['link']; ?>		
				  </td>
                  <td>
						<?php echo $data['icon']; ?>
				  
				  </td>
                  <td>
						<?php echo $data['menu_utamanya']; ?>
				  
				  </td>
												 <td>
								 <input type="hidden" name="id_menu" value="<?php echo $data['id_menu']; ?>">
															<div class="hidden-sm hidden-xs action-buttons">
																

																<a class="green" value="<?php echo $data['id_menu']; ?>" href="<?php echo base_url() . "setting/menu_edit?id_menu=".$data['id_menu']?>">
																	
																	<i class="fa fa-pencil bigger-130"></i>
																</a>
																		&nbsp;
																<a class="red" value="<?php echo $data['id_menu']; ?>"  href="<?php echo base_url() . "setting/menu_delete?id_menu=".$data['id_menu']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
																	
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
														<a class="btn btn-primary" href="<?php echo site_url('setting/menu_add'); ?>">Add Menu</a>
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
  
  