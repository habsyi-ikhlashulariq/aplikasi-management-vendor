 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>public/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $nama; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		<li>
          <a href="<?php echo site_url('Admin/index'); ?>">
            <i class="fa fa-inbox"></i> <span>Information</span>
           
          </a>
         
        </li>
		<?php if($this->session->userdata('id_role') == 1){ ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i> <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Setting/users_view'); ?>"><i class="fa fa-user-plus text-aqua"></i> Manage Users</a></li>
            <!-- <li><a href="<?php echo site_url('Setting/vendor_view'); ?>"><i class="fa fa-assistive-listening-systems"></i> 	Manage Vendor</a></li> -->
			<li><a href="<?php echo site_url('Setting/form_view'); ?>"><i class="fa fa-user-plus text-aqua"></i> Manage Form</a></li>
          </ul>
         
        </li>
		<?php } ?>
<?php if($this->session->userdata('id_role') == 4){ ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Tagihan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Admin/konsultan_view'); ?>"><i class="fa fa-pencil-square-o"></i> Jasa Konsultan</a></li>
            <li><a href="<?php echo site_url('Admin/konstruksi_view'); ?>"><i class="fa fa-pencil-square-o"></i> Jasa Konstruksi</a></li>
            <li><a href="<?php echo site_url('Admin/barang_view'); ?>"><i class="fa fa-pencil-square-o"></i> Pengadaan Barang</a></li>
          </ul>
        </li>
		
		 <li>
          <a href="<?php echo site_url('Admin/tracking_view'); ?>">
            <i class="fa fa-sticky-note"></i> <span>Tracking Dokumen</span>
           
          </a>
         
        </li>
<?php } ?>
		<?php if($this->session->userdata('id_role') == 2){ ?>
         <li>
          <a href="<?php echo site_url('Admin/dokumen_view_staff_bat'); ?>">
            <i class="fa fa-sticky-note"></i> <span>Verifikasi Dokumen</span>
           
          </a>
         
        </li>
		<?php } ?>
<?php if($this->session->userdata('id_role') == 3){ ?>
        <li>
          <a href="<?php echo site_url('Admin/dokumen_view_staff_keuangan'); ?>">
            <i class="fa fa-sticky-note"></i> <span>Verifikasi Dokumen</span>
           
          </a>
         
        </li>
		<?php } ?>
		
        
<?php if($this->session->userdata('id_role') == 5){ ?>
        <li>
          <a href="<?php echo site_url('Admin/dokumen_view_asman_bat'); ?>">
            <i class="fa fa-sticky-note"></i> <span>Verifikasi Dokumen</span>
           
          </a>
         
        </li>
		<?php } ?>
		
        
<?php if($this->session->userdata('id_role') == 6){ ?>
        <li>
          <a href="<?php echo site_url('Admin/dokumen_view_msb_bat'); ?>">
            <i class="fa fa-sticky-note"></i> <span>Verifikasi Dokumen</span>
           
          </a>
         
        </li>
		<!--
        <li>
          <a href="<?php echo site_url('Admin/upload_nodin'); ?>">
            <i class="fa fa-sticky-note"></i> <span>Upload Nota Dinas</span>
           
          </a>
         
        </li>
		-->
		
			<li>
				<a href="<?php echo site_url('Setting/penilaian_view'); ?>">
				<i class="fa fa-user-plus text-aqua"></i> Penilaian User</a>
			</li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Upload Nota Dinas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Admin/upload_nodin_konsultan_bat_view'); ?>"><i class="fa fa-pencil-square-o"></i> Jasa Konsultan</a></li>
            <li><a href="<?php echo site_url('Admin/upload_nodin_konstruksi_bat_view'); ?>"><i class="fa fa-pencil-square-o"></i> Jasa Konstruksi</a></li>
            <li><a href="<?php echo site_url('Admin/upload_nodin_barang_bat_view'); ?>"><i class="fa fa-pencil-square-o"></i> Pengadaan Barang</a></li>
          </ul>
        </li>
		<?php } ?>
		
<?php if($this->session->userdata('id_role') == 7){ ?>
        <li>
          <a href="<?php echo site_url('Admin/dokumen_view_asman_keuangan'); ?>">
            <i class="fa fa-sticky-note"></i> <span>Verifikasi Dokumen</span>
           
          </a>
         
        </li>
		<?php } ?>
		
        
<?php if($this->session->userdata('id_role') == 8){ ?>
        <li>
          <a href="<?php echo site_url('Admin/dokumen_view_msb_keuangan'); ?>">
            <i class="fa fa-sticky-note"></i> <span>Verifikasi Dokumen</span>
           
          </a>
         
        </li>
			<li>
				<a href="<?php echo site_url('Setting/penilaian_view'); ?>">
				<i class="fa fa-user-plus text-aqua"></i> Penilaian User</a>
			</li>
		<?php } ?>
		
        
<?php if($this->session->userdata('id_role') == 9){ ?>
<!--    
	<li>
          <a href="<?php //echo site_url('Admin/dokumen_vendor'); ?>">
            <i class="fa fa-sticky-note"></i> <span>Dokumen Vendor</span>
           
          </a>
         
        </li>
		-->
        <li>
          <a href="<?php echo site_url('Admin/dokumen_direksi_pekerjaan'); ?>">
            <i class="fa fa-sticky-note"></i> <span>Verifikasi Dokumen</span>
           
          </a>
         
        </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Upload Nota Dinas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Admin/upload_nodin_konsultan_view'); ?>"><i class="fa fa-pencil-square-o"></i> Jasa Konsultan</a></li>
            <li><a href="<?php echo site_url('Admin/upload_nodin_konstruksi_view'); ?>"><i class="fa fa-pencil-square-o"></i> Jasa Konstruksi</a></li>
            <li><a href="<?php echo site_url('Admin/upload_nodin_barang_view'); ?>"><i class="fa fa-pencil-square-o"></i> Pengadaan Barang</a></li>
          </ul>
        </li>
		<?php } ?>
		
        
        
        
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>