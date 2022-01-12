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
            <h1 class="h3 mb-3 text-gray-800">Dashboard</h1>


            <!-- Content Row -->
          <div class="row">

            <!-- First Column -->
            <div class="col-lg-3 mb-4">

              <!-- Custom Text Color Utilities -->
              <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Suhu</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $getAll->temp ?>'C</div>
                        <div class="progress progress-sm mr-1">
                            <div class="progress-bar bg-warning " role="progressbar" style="width: <?php echo $getAll->temp ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-fire fa-2x text-gray-500"></i>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- Earnings (Monthly) Card Example -->
              
                
              
            </div>

            <!-- Second Column -->
            <div class="col-lg-3 mb-4">

              <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Kelembaban</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800"><?php echo $getAll->humid ?>%</div>
                        <div class="progress progress-sm mr-1">
                            <div class="progress-bar bg-success " role="progressbar" style="width: <?php echo $getAll->humid ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>                                                        
                      <div class="col-auto">
                        <i class="fas fa-tint fa-2x text-gray-500"></i>
                      </div>
                    </div>
                  </div>
                </div>

            </div>

            <!-- Third Column -->
            <div class="col-lg-3 mb-4">

                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Kecerahan</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800"><?php if($getAll->cahaya < 500){echo "Cahaya terang";} else{echo "Cahaya redup";} ?> </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-adjust fa-2x text-gray-500"></i>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-lg-3 mb-4">

                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Aktifitas</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800"><?php if($getAll->gerak == 1){echo "Terdeteksi";} else{echo "Tidak terdeteksi";} ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-coffee fa-2x text-gray-500"></i>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

          </div>

          <div class="row">
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Grafik Suhu</h6>
                </div>
                <div class="card-body mb-0">
                  <div class="chart-area mb-0 mb-0">
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Grafik Kelembaban</h6>
                </div>
                <div class="card-body mb-0">
                  <div class="chart-area mb-0 mb-0">
                    <canvas id="myChart1"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h1 class="h5 mb-3 text-gray-800">Status Lampu</h1>
          <div class="row">
            <div class="col-lg-3 mb-4">
              <div class="card border-left-dark shadow h-100 py-0">
                <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <i class="fas fa-lightbulb fa-4x text-gray-400"></i>
                    </div>
                    <div class="col ml-2">
                      <div class="h5 mb-0 text-dark  "><?php echo $show1->nama ?></div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <i class="fas fa-1x fa-circle <?php if ($show1->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i>
                        <?php if ($show1->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </div>
                      <div class="h6 mb-0 text-dark  ">Sensor</div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 ">
                        <i class="fas fa-1x fa-circle <?php if ($show1->sensor == 0) {echo "text-danger";} else echo "text-success";?>"></i>
                        <?php if($show1->sensor == 1) {echo "Cahaya";} else if($show1->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
              <div class="card border-left-dark shadow h-100 py-0">
                <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <i class="fas fa-lightbulb fa-4x text-gray-400"></i>
                    </div>
                    <div class="col ml-2">
                      <div class="h5 mb-0 text-dark  "><?php echo $show2->nama ?></div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <i class="fas fa-1x fa-circle <?php if ($show2->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i>
                        <?php if ($show2->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </div>
                      <div class="h6 mb-0 text-dark  ">Sensor</div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 ">
                        <i class="fas fa-1x fa-circle <?php if ($show2->sensor == 0) {echo "text-danger";} else echo "text-success";?>"></i>
                        <?php if($show2->sensor == 1) {echo "Cahaya";} else if($show2->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
              <div class="card border-left-dark shadow h-100 py-0">
                <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <i class="fas fa-lightbulb fa-4x text-gray-400"></i>
                    </div>
                    <div class="col ml-2">
                      <div class="h5 mb-0 text-dark  "><?php echo $show3->nama ?></div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <i class="fas fa-1x fa-circle <?php if ($show3->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i>
                        <?php if ($show3->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </div>
                      <div class="h6 mb-0 text-dark  ">Sensor</div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 ">
                        <i class="fas fa-1x fa-circle <?php if ($show3->sensor == 0) {echo "text-danger";} else echo "text-success";?>"></i>
                        <?php if($show3->sensor == 1) {echo "Cahaya";} else if($show3->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
              <div class="card border-left-dark shadow h-100 py-0">
                <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <i class="fas fa-lightbulb fa-4x text-gray-400"></i>
                    </div>
                    <div class="col ml-2">
                      <div class="h5 mb-0 text-dark  "><?php echo $show4->nama ?></div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <i class="fas fa-1x fa-circle <?php if ($show4->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i>
                        <?php if ($show4->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </div>
                      <div class="h6 mb-0 text-dark  ">Sensor</div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 ">
                        <i class="fas fa-1x fa-circle <?php if ($show4->sensor == 0) {echo "text-danger";} else echo "text-success";?>"></i>
                        <?php if($show4->sensor == 1) {echo "Cahaya";} else if($show4->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 mb-4">
              <div class="card border-left-dark shadow h-100 py-0">
                <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <i class="fas fa-lightbulb fa-4x text-gray-400"></i>
                    </div>
                    <div class="col ml-2">
                      <div class="h5 mb-0 text-dark  "><?php echo $show5->nama ?></div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <i class="fas fa-1x fa-circle <?php if ($show5->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i>
                        <?php if ($show5->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </div>
                      <div class="h6 mb-0 text-dark  ">Sensor</div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 ">
                        <i class="fas fa-1x fa-circle <?php if ($show5->sensor == 0) {echo "text-danger";} else echo "text-success";?>"></i>
                        <?php if($show5->sensor == 1) {echo "Cahaya";} else if($show5->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
              <div class="card border-left-dark shadow h-100 py-0">
                <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <i class="fas fa-lightbulb fa-4x text-gray-400"></i>
                    </div>
                    <div class="col ml-2">
                      <div class="h5 mb-0 text-dark  "><?php echo $show6->nama ?></div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <i class="fas fa-1x fa-circle <?php if ($show6->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i>
                        <?php if ($show6->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </div>
                      <div class="h6 mb-0 text-dark  ">Sensor</div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 ">
                        <i class="fas fa-1x fa-circle <?php if ($show6->sensor == 0) {echo "text-danger";} else echo "text-success";?>"></i>
                        <?php if($show6->sensor == 1) {echo "Cahaya";} else if($show6->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
              <div class="card border-left-dark shadow h-100 py-0">
                <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <i class="fas fa-lightbulb fa-4x text-gray-400"></i>
                    </div>
                    <div class="col ml-2">
                      <div class="h5 mb-0 text-dark  "><?php echo $show7->nama ?></div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <i class="fas fa-1x fa-circle <?php if ($show7->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i>
                        <?php if ($show7->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </div>
                      <div class="h6 mb-0 text-dark  ">Sensor</div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 ">
                        <i class="fas fa-1x fa-circle <?php if ($show7->sensor == 0) {echo "text-danger";} else echo "text-success";?>"></i>
                        <?php if($show7->sensor == 1) {echo "Cahaya";} else if($show7->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
              <div class="card border-left-dark shadow h-100 py-0">
                <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <i class="fas fa-lightbulb fa-4x text-gray-400"></i>
                    </div>
                    <div class="col ml-2">
                      <div class="h5 mb-0 text-dark  "><?php echo $show8->nama ?></div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <i class="fas fa-1x fa-circle <?php if ($show8->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i>
                        <?php if ($show8->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </div>
                      <div class="h6 mb-0 text-dark  ">Sensor</div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 ">
                        <i class="fas fa-1x fa-circle <?php if ($show8->sensor == 0) {echo "text-danger";} else echo "text-success";?>"></i>
                        <?php if($show8->sensor == 1) {echo "Cahaya";} else if($show8->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 mb-4">
              <div class="card border-left-dark shadow h-100 py-0">
                <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <i class="fas fa-lightbulb fa-4x text-gray-400"></i>
                    </div>
                    <div class="col ml-2">
                      <div class="h5 mb-0 text-dark  "><?php echo $show9->nama ?></div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <i class="fas fa-1x fa-circle <?php if ($show9->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i>
                        <?php if ($show9->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </div>
                      <div class="h6 mb-0 text-dark  ">Sensor</div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 ">
                        <i class="fas fa-1x fa-circle <?php if ($show9->sensor == 0) {echo "text-danger";} else echo "text-success";?>"></i>
                        <?php if($show9->sensor == 1) {echo "Cahaya";} else if($show9->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
              <div class="card border-left-dark shadow h-100 py-0">
                <div class="card-body py-2">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <i class="fas fa-lightbulb fa-4x text-gray-400"></i>
                    </div>
                    <div class="col ml-2">
                      <div class="h5 mb-0 text-dark  "><?php echo $show10->nama ?></div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <i class="fas fa-1x fa-circle <?php if ($show10->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i>
                        <?php if ($show10->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </div>
                      <div class="h6 mb-0 text-dark  ">Sensor</div>
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1 ">
                        <i class="fas fa-1x fa-circle <?php if ($show10->sensor == 0) {echo "text-danger";} else echo "text-success";?>"></i>
                        <?php if($show10->sensor == 1) {echo "Cahaya";} else if($show10->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
              
            </div>
            <div class="col-lg-3 mb-4">
              
            </div>
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

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partial/js.php") ?>


</body>
<script >
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: [<?php
                        $balik = array_reverse($graftgl);
                        foreach ($balik as $tanggal) {
                          echo "'" .mediumdate_indo($tanggal->tgl) ."',";
                        }
                      
                    ?>],
          datasets: [{
              label: 'Rata-rata perhari suhu(C)',
              data: [<?php 
                        $baliksuhu = array_reverse($grafsuhu);
                        foreach ($baliksuhu as $data) {
                        echo "'" .number_format($data->suhu) ."',";
                      }
                    ?>],
              lineTension: 0.3,
              backgroundColor: "rgba(255, 180, 0, 0.05)",
              borderColor: "rgba(255, 180, 0, 1)",
              pointRadius: 5,
              pointBackgroundColor: "rgba(255, 180, 0, 1)",
              pointBorderColor: "rgba(2255, 180, 0, 1)",
              pointHoverRadius: 3,
              pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
              pointHoverBorderColor: "rgba(78, 115, 223, 1)",
              pointHitRadius: 10,
              pointBorderWidth: 4,
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
</script>

<script >
  var ctx = document.getElementById('myChart1').getContext('2d');
  var myChart1 = new Chart(ctx, {
      type: 'line',
      data: {
          labels: [<?php
                        $balik = array_reverse($graftgl);
                        foreach ($balik as $tanggal) {
                          echo "'" .mediumdate_indo($tanggal->tgl) ."',";
                        }
                      
                    ?>],
          datasets: [{
              label: 'Rata-rata perhari kelembaban(%)',
              data: [<?php 
                        $balikhumid = array_reverse($grafhumid);
                        foreach ($balikhumid as $data) {
                        echo "'" .number_format($data->humid) ."',";
                      }
                    ?>],
              lineTension: 0.3,
              backgroundColor: "rgba(0, 128, 0, 0.05)",
              borderColor: "rgba(60, 179, 113, 1)",
              pointRadius: 5,
              pointBackgroundColor: "rgba(60, 179, 113, 1)",
              pointBorderColor: "rgba(60, 179, 113, 1)",
              pointHoverRadius: 3,
              pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
              pointHoverBorderColor: "rgba(78, 115, 223, 1)",
              pointHitRadius: 10,
              pointBorderWidth: 4,
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });
</script>

</html>

