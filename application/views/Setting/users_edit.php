
 <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Setting
    <small>Edit User</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Setting</a></li>
    <li class="active">Edit User</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
     

      <!-- Form Element sizes -->
      <div class="box box-success">
   <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>setting/action_users_edit?id_users=<?php echo $usernya['id_users']; ?>" enctype="multipart/form-data">
    
     <input type="hidden" name="id_users" value="<?php echo $usernya['id_users']; ?>">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Users</h3>
        </div>
        <div class="box-body">
        <div class="col-lg-10">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $usernya['nama']; ?>" required/>
                            </div>
                        </div>
                    </div>
        <br><br><br>
        <div class="col-lg-10">
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-5">
             <input type="text" class="form-control" id="username" name="username" value="<?php echo $usernya['username']; ?>" required/>
                            </div>
                        </div>
                    </div>
        <br><br><br>
        <div class="col-lg-10">
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-5">
             <input type="text" class="form-control" id="password" name="password" value="<?php echo $this->enkripsi->encrypt_decrypt('decrypt', $usernya['password']); ?>" required/>
                            </div>
                        </div>
                    </div>
        <br><br><br>
         <div class="col-lg-10">
                        <div class="form-group">
                            <label for="role" class="col-sm-3 control-label">Role</label>
                            <div class="col-sm-5">
               <?php
                if ($usernya['id_role'] == 1){
                    $status = "Admin";
                  } else if ($usernya['id_role'] == 2){
                    $status = "Verifikator Staff Administrasi Teknik";
                  }else if ($usernya['id_role'] == 3){
                    $status = "Verifikator Staff Keuangan";
                  }else if ($usernya['id_role'] == 4){
                    $status = "Vendor";
                  }else if ($usernya['id_role'] == 5){
                    $status = "Verifikator Assistant Manager Administrasi Teknik";
                  }else if ($usernya['id_role'] == 6){
                    $status = "Verifikator Manager Sub Bidang Administrasi Teknik";
                  }else if ($usernya['id_role'] == 7){
                    $status = "Verifikator Assistant Manager Keuangan";
                  }else if ($usernya['id_role'] == 8){
                    $status = "Verifikator Manager Sub Bidang Keuangan";
                  }else if ($usernya['id_role'] == 9){
                    $status = "Direksi Pekerjaan";
                  }
                    ?>	
          <select class="form-control" id="role" name="role" required>	
          <option value="<?php echo $usernya['id_role']; ?>"><?php echo $status; ?></option>
          <option>--Pilih Role--</option>
          <option value="1">Admin</option>
          <option value="2">Verifikator Staff Administrasi Teknik</option>
          <option value="3">Verifikator Staff Keuangan</option>
          <option value="4">Vendor</option>
          <option value="5">Verifikator Assistant Manager Administrasi Teknik</option>
          <option value="6">Verifikator Manager Sub Bidang Administrasi Teknik</option>
          <option value="7">Verifikator Assistant Manager Keuangan</option>
          <option value="8">Verifikator Manager Sub Bidang Keuangan</option>
          <option value="9">Verifikator Manager Sub Bidang Keuangan</option>
          
          
          </select>	
             
             
                            </div>
                        </div>
                    </div>
        </div>
		
						<div class="col-lg-10">
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-5">
								 <input type="text" class="form-control" id="email" name="email" value="<?php echo $usernya['email']; ?>" required/>
                                </div>
                            </div>
                        </div>
						<br><br><br>
						
                      <div class="col-lg-10">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-5">
                            <select class="form-control" name="stts" >
                                <?php foreach ($stts as $stts) :?>
                                  <?php if ($stts == $usernya['status']) : ?>
                                    <option value="<?= $stts ?>" selected><?= $stts ?></option>
                                    <?php else : ?>
                                    <option value="<?= $stts ?>"><?= $stts ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                              </select>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
        <!-- /.box-body -->
  <div class="box-footer">
                    <div class="pull-center">
        
                        <a href="<?php echo base_url(); ?>admin/users_view" class="btn btn-danger">Kembali</a>
                        <button type="reset" class="btn btn-warning">Ulangi</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
       </form>
      </div>
      <!-- /.box -->
      
    </div>
    
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->