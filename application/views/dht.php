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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Data Sensor</h1>
              <a href="<?php echo base_url('dht/export'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export to Excel</a>
            </div>
            <div>
              <div class="row">
                <div class="col-lg-4 mb-4">
                  <a href="<?php echo base_url('dht') ?>" class="btn bg-primary btn-block text-gray-100"><i class="fas fa-fire fa-1x "></i> Sensor Suhu dan Kelembaban</a>
                  </a>
                </div>
                <div class="col-lg-4 mb-4">
                  <a href="<?php echo base_url('cahaya') ?>" class="btn bg-secondary btn-block text-gray-100"><i class="fas fa-adjust fa-1x "></i> Sensor Cahaya</a>
                </div>
                 <div class="col-lg-4 mb-4">
                  <a href="<?php echo base_url('gerak') ?>" class="btn bg-secondary btn-block text-gray-100"><i class="fas fa-coffee fa-1x "></i> Sensor Gerak </a>
                </div>
              </div>
            	<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Sensor Suhu dan Kelembaban</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
              						<th width="25%">Suhu (Celcius)</th>
                          <th width="25%">Kelembaban %</th>
                          <th width="25%">Tanggal</th>
                          <th width="25%">Waktu</th>										
              					</tr>
                      </thead>
                      
                      <tbody>									
            						<?php foreach ($getSensor as $dht): ?>
            						<tr>
            							<td width="150">
            								<?php echo $dht->temp ?>'C
            							</td>
            							<td>
            								<?php echo $dht->humid ?>%
            							</td>
            							<td>
            								<?php echo date_indo($dht->tgl) ?>
            							</td>
                          <td>
                            <?php echo $dht->jam ?>
                          </td>
            							
            						</tr>
            						<?php endforeach; ?>
            					</tbody>
                    </table>
                  </div>
                </div>
              </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800"></h1>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#DeleteModal"><i class="fas fa-trash fa-sm text-white-50"></i> Clear Data Sensor</a>
              <!--  -->
            </div>
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin/_partial/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partial/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partial/modal.php") ?>
  <?php $this->load->view("admin/_partial/delete.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partial/js.php") ?>

</body>

</html>

