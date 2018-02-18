 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

<div style="border-radius: 10px;" class="modal" id="insertLSModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div style="border-radius: 10px;" class="modal-dialog" role="document">
    <div style="border-radius: 10px;" class="modal-content">
      <div style="border-radius: 20px;" class="modal-header">
        <center><h5 class="modal-title" id="insertModalLabel">Add Aspirasi</h5></center>
      </div>
         <form action="<?php echo base_url("admin/Aspirasi/add");?>" method="post">
             
             
      <div class="modal-body">
        <div class="form-group">
            Tanggal
            <input type="text" name="tanggal" id="tanggal" class="form-control input-rounded">
        </div>
      </div>
             
     <div class="modal-body">
        <div class="form-group">
            User
            <input type="text" name="id_user" id="id_user" value="<?php echo $this->session->userdata('admin_id');?>" class="form-control input-rounded">
        </div>
      </div>
             
    <div class="modal-body">
        <div class="form-group">
            Judul
            <input type="text" name="judul" id="judul" class="form-control input-rounded">
        </div>
      </div>
             
      <div class="modal-body">
        <div class="form-group">
            Aspirasi
            <textarea type="text" name="aspirasi" id="aspirasi" class="form-control input-rounded"></textarea>
        </div>
      </div>
             
             <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button value="submit" class="btn btn-primary">Save changes</button>
      </div>
            </form>   
    </div>
        
  </div>
</div>
 <button style="width:100px; padding:10px; margin:10px;" class="btn btn-success" data-toggle="modal" data-target="#insertLSModal" data-whatever="@getbootstrap" >+ Add</button>
          
 <!-- Datatable style -->
 <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">List Aspirasi</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                  
        <?php foreach($all_aspirasi as $row): ?>
          
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <span class="description">Shared on <?= $row['date']; ?></span>
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

