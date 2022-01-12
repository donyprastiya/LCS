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
            <h1 class="h3 mb-3 text-gray-800">Kontrol Lampu</h1>
            <div class="row">
              <div class="col-lg-6">
              
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Lampu</h6>
                </div>
                <div class="card-body">
                  <?= $this->session->flashdata('message')?>
                  <p>
                   API dari web pusat berfungsi sebagai alat komunikasi antara Web Apps LCS dengan Web Pusat <a href="#">http://bwcr/rizaldiariif.com</a>. Dalam komunikasi tersebut dibutuhkan penyesuaian ID lampu web pusat dengan ID lampu web LCS.
                 </p>
                  <form class="user" method="post" action="<?php echo base_url('control/edit/'.$showid->id) ?>">
                    <div class="form-group">
                      <label for="idlampu">ID Lampu</label>
                      <input type="text" class="form-control " id="idlampu" name="idlampu" value="<?php echo $showid->idpusat;?>"  >
                        
                    </div>
                    <div class="form-group">
                      <label for="namalampu">Nama Lampu</label>
                      <input type="text" class="form-control " id="namalampu" name="namalampu" value="<?php echo $showid->nama;?>" >
                    </div>
                        
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary  btn-block">
                      Submit
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

