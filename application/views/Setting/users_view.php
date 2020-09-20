 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting
        <small>Manage Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Setting</a></li>
        <li class="active">Manage Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th class="center">
				  No.
				 </th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Password</th>
				  <th>Status Akun</th>
                  <th>ID Role</th>
                  <th>Email</th>
				  <th>Actions</th>
                </tr>
                </thead>
				<?php 
				$no =1;
				?>
                <tbody>
				<?php foreach ($users_view->result_array() as $data) { ?>
				
				
                <tr>
					<td class="center">
						<?php echo $no; ?>
					</td>
                  <td>
						<?php echo $data['nama']; ?>
				  </td>
                  <td>
						<?php echo $data['username']; ?>
				  </td>
                  <td>
						<?php echo $this->enkripsi->encrypt_decrypt('decrypt', $data['password']); ?>
						
						
				  </td>
				  <td>
						<?php echo $data['status']; ?>
				  </td>
                  <td>
				  <?php
				 // print_r ($data['id_role']); exit;
				  if ($data['id_role'] == 1){ ?>
				  <span class="label label-success"><?php echo $data['nama_role']; ?></span>
					<?php
				  } else  if ($data['id_role'] == 2){
					  ?>
				  <span class="label label-primary"><?php echo $data['nama_role']; ?></span>
				  <?php
						} else  if ($data['id_role'] == 3){
					  ?>
				  <span class="label label-primary"><?php echo $data['nama_role']; ?></span>
				  <?php
						} else  if ($data['id_role'] == 4){
					  ?>
				  <span class="label label-primary"><?php echo $data['nama_role']; ?></span>
				  <?php
						}else  if ($data['id_role'] == 5){
					  ?>
				  <span class="label label-primary"><?php echo $data['nama_role']; ?></span>
				  <?php
						}else  if ($data['id_role'] == 6){
					  ?>
				  <span class="label label-primary"><?php echo $data['nama_role']; ?></span>
				  <?php
						}else  if ($data['id_role'] == 7){
					  ?>
				  <span class="label label-primary"><?php echo $data['nama_role']; ?></span>
				  <?php
						}else  if ($data['id_role'] == 8){
					  ?>
				  <span class="label label-primary"><?php echo $data['nama_role']; ?></span>
				  <?php
						}else  if ($data['id_role'] == 9){
					  ?>
				  <span class="label label-primary"><?php echo $data['nama_role']; ?></span>
				  <?php
						}
					?>
						
				  </td>
				  
				   <td>
						<?php echo $data['email']; ?>
				  </td>
				  
				  
				  <td>
														 <input type="hidden" name="id_users" value="<?php echo $data['id_users']; ?>">
															<div class="hidden-sm hidden-xs action-buttons">
																

																<a class="green" value="<?php echo $data['id_users']; ?>" href="<?php echo base_url() . "setting/users_edit?id_users=".$data['id_users']?>">
																	
																	<i class="fa fa-pencil bigger-130"></i>
																</a>
																		&nbsp;
																<a class="red" value="<?php echo $data['id_users']; ?>"  href="<?php echo base_url() . "setting/users_delete?id_users=".$data['id_users']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?');" >
																	
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
														<a class="btn btn-primary" href="<?php echo site_url('setting/users_add'); ?>">Add User</a>
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
  
  