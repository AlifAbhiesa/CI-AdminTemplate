<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit User</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('admin/Settings/edit/'.$user['id_about']), 'class="form-horizontal"' )?> 
              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Skill</label>

                <div class="col-sm-9">
                  <input type="text" name="skill" value="<?= $user['skill']; ?>" class="form-control" id="firstname" placeholder="">
                </div>
              </div>
            
             <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Notes</label>

                <div class="col-sm-9">
                  <input type="text" name="notes" value="<?= $user['notes']; ?>" class="form-control" id="firstname" placeholder="">
                </div>
              </div>
            
             <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Instagram</label>

                <div class="col-sm-9">
                  <input type="text" name="instagram" value="<?= $user['instagram']; ?>" class="form-control" id="firstname" placeholder="https://www.instagram.com/xcode___/">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Update User" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 