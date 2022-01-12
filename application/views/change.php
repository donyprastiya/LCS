<!DOCTYPE html>
<html lang="en">

<!-- Head -->
    <?php $this->load->view("admin/_partial/head.php") ?>
<!-- End of head -->

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partial/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Topbar -->
        <?php $this->load->view("admin/_partial/navbar.php") ?>
      <!-- End of Topbar -->
      

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
            <h1 class="h3 mb-3 text-gray-800">Setting</h1>
            <div class="row">
              <div class="col-lg-6">
              
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Password</h6>
                </div>
                <div class="card-body">
                  <?= $this->session->flashdata('message')?>
                  <form class="user" method="post" action="<?php echo base_url('user/change') ?>">
                    <div class="form-group">
                      <label for="current_password">Password Lama</label>
                      <input type="password" class="form-control " id="current_password" name="current_password" placeholder="Password" >
                        <?php echo form_error('current_password', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="new_password1">Password Baru</label>
                      <input type="password" class="form-control " id="new_password1" name="new_password1" placeholder="New Password" >
                        <?php echo form_error('new_password1', '<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                      <input type="password" class="form-control " id="new_password2" name="new_password2" placeholder="Repeat Password">
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary  btn-block">
                      Ubah password
                      </button>
                    </div>
                    
                    
                  </form>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-3">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Hapus Data</h6>
                </div>
                <div class="card-body">
                  
                </div>
              </div>
            </div> -->
           </div> 
            
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
    <?php $this->load->view("admin/_partial/footer.php") ?>

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partial/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partial/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partial/js.php") ?>

</body>

</html>

