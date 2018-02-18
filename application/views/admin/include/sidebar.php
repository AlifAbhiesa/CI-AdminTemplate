<?php 
$cur_tab = $this->uri->segment(2)==''?'dashboard': $this->uri->segment(2);  
?>  

<script src="<?= base_url() ?>public/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url() ?>public/dist/img/<?php echo $this->session->userdata('nrp') ?>.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= ucwords($this->session->userdata('nama')); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      

      <ul class="sidebar-menu">
       

          <li id="Aspirasi">
          <a href="<?= base_url('admin/Aspirasi'); ?>">
            <i class="fa fa-file-text"></i> <span>Aspirasi</span>
           
          </a>
        </li>
          
         <li id="Timeline">
          <a href="<?= base_url('admin/Timeline'); ?>">
            <i class="fa fa-clock-o"></i> <span>Timeline</span>
           
          </a>
        </li>
          
          
           <li id="member">
          <a href="<?= base_url('adminlte/widgets'); ?>">
            <i class="fa fa-users"></i> <span>Member</span>
           
          </a>
        </li>
          
          
           <li id="Profile">
          <a href="<?= base_url('admin/Profile'); ?>">
            <i class="fa fa-user"></i> <span>Profile</span>
           
          </a>
        </li>
          
        <li id="Settings">
          <a href="<?= site_url('admin/Settings/edit/'); echo $this->session->userdata('admin_id'); ?>">
            <i class="fa fa-key"></i> <span>Edit Profile</span>
           
          </a>
        </li>
          
           <li id="changepw">
          <a href="<?= site_url('admin/auth/change_pwd'); ?>">
            <i class="fa fa-key"></i> <span>Change Password</span>
           
          </a>
        </li>
          
           <li id="changepw">
          <a href="<?= site_url('admin/auth/logout'); ?>">
            <i class="fa fa-power-off"></i> <span>Sign Out</span>
           
          </a>
        </li>
          
          
       
      </ul>


    </section>
    <!-- /.sidebar -->
  </aside>

  
<script>
  $("#<?= $cur_tab; ?>").addClass('active');
</script>
