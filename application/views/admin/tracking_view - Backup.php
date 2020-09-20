
 
 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tracking Dokumen
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tracking Dokumen PLN</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tracking Dokumen</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            
          </div>
        </div>
        <div class="box-body">
			 <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nomor Kontrak</label>
                <select class="form-control select2" id="nomor_kontrak" name="nomor_kontrak"  style="width: 100%;" onchange="showDiv(this)">
                  <option value="0">--Pilih Nomor Kontrak--</option>
                  
							<?php foreach ($tracking_view->result_array() as $data) { ?>
							
							<option value="1"><?php echo $data['nomor_kontrak']; ?></option>
							
							<?php } ?>
                                    
                </select>
              </div>
              <!-- /.form-group -->
              
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
			 <div class="row">
            <div class="col-md-6">
              <div class="form-group">
               <div id="hidden_div" style="display:none;">Dokumen Anda Sedang di <?php echo $get_role['nama_role']; ?> </div>
              </div>
              <!-- /.form-group -->
              
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
 
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  