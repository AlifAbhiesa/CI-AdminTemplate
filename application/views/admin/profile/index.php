 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  
    

<div class="col-md-offset-4-and-half">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?= $this->session->userdata('nama'); ?></h3>
              <h5 class="widget-user-desc"><?= $this->session->userdata('jabatan'); ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?= base_url() ?>public/dist/img/<?= $this->session->userdata('nrp'); ?>.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    
                    <span class="description-text"><?= $this->session->userdata('nrp'); ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <span class="description-text"><?= $this->session->userdata('angkatan'); ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
    
    <div class="box box-primary">
            
        <?php foreach($all_profile as $row): ?>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                
              <p class="text-muted">
                <?= $row['alamat_anggota']; ?>
              </p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p class="text-muted"><?= $row['skill']; ?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p class="text-muted"><?= $row['notes']; ?></p>

              <hr>

              <strong><i class="fa fa-instagram margin-r-5"></i> Instagram</strong>

              <p><a href="<?= $row['instagram']?>">Click Here</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
 <?php endforeach; ?>
 

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
    
 $('#tanggal').datepicker({
      autoclose: true
    });
    
    $('#updtanggal').datepicker({
      autoclose: true
    });
</script> 
<script>
$("#view_users").addClass('active');
</script>        

