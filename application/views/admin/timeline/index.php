 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  
    
 <!-- Datatable style -->
 <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Aspirasi</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                  
        <?php foreach($all_timeline as $row): ?>
          
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?= base_url() ?>public/dist/img/<?= $row['nrp_anggota'];?>.jpg" alt="user image">
                        <span class="username">
                          <a href="#"><?= $row['nama_anggota']; ?></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared <?= $row['date']; ?></span>
                  </div>
                  <!-- /.user-block -->
                  <p><b><?= $row['judul']; ?></b></p>
                  <p>
                   <?= $row['aspirasi']; ?>
                  </p>
                  
                </div>
                

                <!-- /.post -->
        <?php endforeach; ?>
                  </div>
              </div>
     </div>
</div>

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

