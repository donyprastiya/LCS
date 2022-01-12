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
            <div>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Kontrol</h6>
            </div>
            <div class="card-body">
              <?= $this->session->flashdata('message')?>
              <div class="table">
                <table class="table table-striped" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="20%">Nama</th>
                      <th width="18%">Waktu</th>
                      <th width="14%">Status Lampu</th>
                      <th width="14%">Action Lampu</th>
                      <th width="14%">Status Sensor</th>
                      <th width="20%">Action Sensor</th>                  
                    </tr>
                  </thead>
                  
                  <tbody>                 
                    <tr>
                      <td><?php echo $show1->nama ?></td>
                      <td><?php echo $show1->jam ?></td>
                      <td><i class="fas fa-circle <?php if ($show1->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($show1->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100 <?php if($show1->sensor == 1) {echo "disabled";} ?>" href="<?php if($show1->sensor == 0) {echo base_url('control/on/1');} else if($show1->sensor == 2) {echo base_url('control/ongerak/1');} ?>" role="button" onclick="linkopen1()" >ON</a>
                        <a class="btn btn-danger btn-sm text-gray-100 <?php if($show1->sensor == 1) {echo "disabled";} ?>" href="<?php if($show1->sensor == 0) {echo base_url('control/off/1');} else if($show1->sensor == 2) {echo base_url('control/offgerak/1');} ?>" role="button" onclick="linkopen1()" >OFF</a>
                      </td>
                      <td><i class="fas fa-circle <?php if ($show1->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($show1->sensor == 1) {echo "Cahaya";} else if($show1->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/cahaya/1') ?>" role="button" >Cahaya</a>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/gerak/1') ?>" role="button" >Gerak</a>
                        <a class="btn btn-danger btn-sm text-gray-100" href="<?php echo base_url('control/nosensor/1') ?>" role="button" >OFF</a>
                      </td>
                    </tr>
                    <tr>
                      <td><?php echo $show2->nama ?></td>
                      <td><?php echo $show2->jam ?></td>
                      <td><i class="fas fa-circle <?php if ($show2->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($show2->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100 <?php if($show2->sensor == 1) {echo "disabled";} ?>" href="<?php if($show2->sensor == 0) {echo base_url('control/on/2');} else if($show2->sensor == 2) {echo base_url('control/ongerak/2');} ?>" role="button" onclick="linkopen2()" >ON</a>
                        <a class="btn btn-danger btn-sm text-gray-100 <?php if($show2->sensor == 1) {echo "disabled";} ?>" href="<?php if($show2->sensor == 0) {echo base_url('control/off/2');} else if($show2->sensor == 2) {echo base_url('control/offgerak/2');} ?>" role="button" onclick="linkopen2()" >OFF</a>
                      </td>
                      <td><i class="fas fa-circle <?php if ($show2->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($show2->sensor == 1) {echo "Cahaya";} else if($show2->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/cahaya/2') ?>" role="button" >Cahaya</a>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/gerak/2') ?>" role="button" >Gerak</a>
                        <a class="btn btn-danger btn-sm text-gray-100" href="<?php echo base_url('control/nosensor/2') ?>" role="button" >OFF</a>
                      </td>
                    </tr>
                    <tr>
                      <td><?php echo $show3->nama ?></td>
                      <td><?php echo $show3->jam ?></td>
                      <td><i class="fas fa-circle <?php if ($show3->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($show3->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100 <?php if($show3->sensor == 1) {echo "disabled";} ?>" href="<?php if($show3->sensor == 0) {echo base_url('control/on/3');} else if($show3->sensor == 2) {echo base_url('control/ongerak/3');} ?>" role="button" onclick="linkopen3()">ON</a>
                        <a class="btn btn-danger btn-sm text-gray-100 <?php if($show3->sensor == 1) {echo "disabled";} ?>" href="<?php if($show3->sensor == 0) {echo base_url('control/off/3');} else if($show3->sensor == 2) {echo base_url('control/offgerak/3');} ?>" role="button" onclick="linkopen3()">OFF</a>
                      </td>
                      <td><i class="fas fa-circle <?php if ($show3->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($show3->sensor == 1) {echo "Cahaya";} else if($show3->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/cahaya/3') ?>" role="button" >Cahaya</a>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/gerak/3') ?>" role="button" >Gerak</a>
                        <a class="btn btn-danger btn-sm text-gray-100" href="<?php echo base_url('control/nosensor/3') ?>" role="button" >OFF</a>
                      </td>
                    </tr>
                    <tr>
                      <td><?php echo $show4->nama ?></td>
                      <td><?php echo $show4->jam ?></td>
                      <td><i class="fas fa-circle <?php if ($show4->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($show4->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100 <?php if($show4->sensor == 1) {echo "disabled";} ?>" href="<?php if($show4->sensor == 0) {echo base_url('control/on/4');} else if($show4->sensor == 2) {echo base_url('control/ongerak/4');} ?>" role="button" onclick="linkopen4()">ON</a>
                        <a class="btn btn-danger btn-sm text-gray-100 <?php if($show4->sensor == 1) {echo "disabled";} ?>" href="<?php if($show4->sensor == 0) {echo base_url('control/off/4');} else if($show4->sensor == 2) {echo base_url('control/offgerak/4');} ?>" role="button" onclick="linkopen4()">OFF</a>
                      </td>
                      <td><i class="fas fa-circle <?php if ($show4->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($show4->sensor == 1) {echo "Cahaya";} else if($show4->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/cahaya/4') ?>" role="button" >Cahaya</a>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/gerak/4') ?>" role="button" >Gerak</a>
                        <a class="btn btn-danger btn-sm text-gray-100" href="<?php echo base_url('control/nosensor/4') ?>" role="button" >OFF</a>
                      </td>
                    </tr>
                    <tr>
                      <td><?php echo $show5->nama ?></td>
                      <td><?php echo $show5->jam ?></td>
                      <td><i class="fas fa-circle <?php if ($show5->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($show5->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100 <?php if($show5->sensor == 1) {echo "disabled";} ?>" href="<?php if($show5->sensor == 0) {echo base_url('control/on/5');} else if($show5->sensor == 2) {echo base_url('control/ongerak/5');} ?>" role="button" onclick="linkopen5()">ON</a>
                        <a class="btn btn-danger btn-sm text-gray-100 <?php if($show5->sensor == 1) {echo "disabled";} ?>" href="<?php if($show5->sensor == 0) {echo base_url('control/off/5');} else if($show5->sensor == 2) {echo base_url('control/offgerak/5');} ?>" role="button" onclick="linkopen5()">OFF</a>
                      </td>
                      <td><i class="fas fa-circle <?php if ($show5->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($show5->sensor == 1) {echo "Cahaya";} else if($show5->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/cahaya/5') ?>" role="button" >Cahaya</a>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/gerak/5') ?>" role="button" >Gerak</a>
                        <a class="btn btn-danger btn-sm text-gray-100" href="<?php echo base_url('control/nosensor/5') ?>" role="button" >OFF</a>
                      </td>
                    </tr>
                    <tr>
                      <td><?php echo $show6->nama ?></td>
                      <td><?php echo $show6->jam ?></td>
                      <td><i class="fas fa-circle <?php if ($show6->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($show6->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100 <?php if($show6->sensor == 1) {echo "disabled";} ?>" href="<?php if($show6->sensor == 0) {echo base_url('control/on/6');} else if($show6->sensor == 2) {echo base_url('control/ongerak/6');} ?>" role="button" onclick="linkopen6()">ON</a>
                        <a class="btn btn-danger btn-sm text-gray-100 <?php if($show6->sensor == 1) {echo "disabled";} ?>" href="<?php if($show6->sensor == 0) {echo base_url('control/off/6');} else if($show6->sensor == 2) {echo base_url('control/offgerak/6');} ?>" role="button" onclick="linkopen6()">OFF</a>
                      </td>
                      <td><i class="fas fa-circle <?php if ($show6->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($show6->sensor == 1) {echo "Cahaya";} else if($show6->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/cahaya/6') ?>" role="button" >Cahaya</a>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/gerak/6') ?>" role="button" >Gerak</a>
                        <a class="btn btn-danger btn-sm text-gray-100" href="<?php echo base_url('control/nosensor/6') ?>" role="button" >OFF</a>
                      </td>
                    </tr>
                    <tr>
                      <td><?php echo $show7->nama ?></td>
                      <td><?php echo $show7->jam ?></td>
                      <td><i class="fas fa-circle <?php if ($show7->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($show7->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100 <?php if($show7->sensor == 1) {echo "disabled";} ?>" href="<?php if($show7->sensor == 0) {echo base_url('control/on/7');} else if($show7->sensor == 2) {echo base_url('control/ongerak/7');} ?>" role="button" onclick="linkopen7()">ON</a>
                        <a class="btn btn-danger btn-sm text-gray-100 <?php if($show7->sensor == 1) {echo "disabled";} ?>" href="<?php if($show7->sensor == 0) {echo base_url('control/off/7');} else if($show7->sensor == 2) {echo base_url('control/offgerak/7');} ?>" role="button" onclick="linkopen7()">OFF</a>
                      </td>
                      <td><i class="fas fa-circle <?php if ($show7->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($show7->sensor == 1) {echo "Cahaya";} else if($show7->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/cahaya/7') ?>" role="button" >Cahaya</a>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/gerak/7') ?>" role="button" >Gerak</a>
                        <a class="btn btn-danger btn-sm text-gray-100" href="<?php echo base_url('control/nosensor/7') ?>" role="button" >OFF</a>
                      </td>
                    </tr>
                    <tr>
                      <td><?php echo $show8->nama ?></td>
                      <td><?php echo $show8->jam ?></td>
                      <td><i class="fas fa-circle <?php if ($show8->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($show8->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100 <?php if($show8->sensor == 1) {echo "disabled";} ?>" href="<?php if($show8->sensor == 0) {echo base_url('control/on/8');} else if($show8->sensor == 2) {echo base_url('control/ongerak/8');} ?>" role="button" onclick="linkopen8()">ON</a>
                        <a class="btn btn-danger btn-sm text-gray-100 <?php if($show8->sensor == 1) {echo "disabled";} ?>" href="<?php if($show8->sensor == 0) {echo base_url('control/off/8');} else if($show8->sensor == 2) {echo base_url('control/offgerak/8');} ?>" role="button" onclick="linkopen8()">OFF</a>
                      </td>
                      <td><i class="fas fa-circle <?php if ($show8->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($show8->sensor == 1) {echo "Cahaya";} else if($show8->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/cahaya/8') ?>" role="button" >Cahaya</a>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/gerak/8') ?>" role="button" >Gerak</a>
                        <a class="btn btn-danger btn-sm text-gray-100" href="<?php echo base_url('control/nosensor/8') ?>" role="button" >OFF</a>
                      </td>
                    </tr>
                    <tr>
                      <td><?php echo $show9->nama ?></td>
                      <td><?php echo $show9->jam ?></td>
                      <td><i class="fas fa-circle <?php if ($show9->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($show9->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100 <?php if($show9->sensor == 1) {echo "disabled";} ?>" href="<?php if($show9->sensor == 0) {echo base_url('control/on/9');} else if($show9->sensor == 2) {echo base_url('control/ongerak/9');} ?>" role="button" onclick="linkopen9()">ON</a>
                        <a class="btn btn-danger btn-sm text-gray-100 <?php if($show9->sensor == 1) {echo "disabled";} ?>" href="<?php if($show9->sensor == 0) {echo base_url('control/off/9');} else if($show9->sensor == 2) {echo base_url('control/offgerak/9');} ?>" role="button" onclick="linkopen9()">OFF</a>
                      </td>
                      <td><i class="fas fa-circle <?php if ($show9->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($show9->sensor == 1) {echo "Cahaya";} else if($show9->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/cahaya/9') ?>" role="button" >Cahaya</a>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/gerak/9') ?>" role="button" >Gerak</a>
                        <a class="btn btn-danger btn-sm text-gray-100" href="<?php echo base_url('control/nosensor/9') ?>" role="button" >OFF</a>
                      </td>
                    </tr>
                    <tr>
                      <td><?php echo $show10->nama ?></td>
                      <td><?php echo $show10->jam ?></td>
                      <td><i class="fas fa-circle <?php if ($show10->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($show10->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100 <?php if($show10->sensor == 1) {echo "disabled";} ?>" href="<?php if($show10->sensor == 0) {echo base_url('control/on/10');} else if($show10->sensor == 2) {echo base_url('control/ongerak/10');} ?>" role="button" onclick="linkopen10()">ON</a>
                        <a class="btn btn-danger btn-sm text-gray-100 <?php if($show10->sensor == 1) {echo "disabled";} ?>" href="<?php if($show10->sensor == 0) {echo base_url('control/off/10');} else if($show10->sensor == 2) {echo base_url('control/offgerak/10');} ?>" role="button" onclick="linkopen10()">OFF</a>
                      </td>
                      <td><i class="fas fa-circle <?php if ($show10->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($show10->sensor == 1) {echo "Cahaya";} else if($show10->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      <td>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/cahaya/10') ?>" role="button" >Cahaya</a>
                        <a class="btn btn-success btn-sm text-gray-100" href="<?php echo base_url('control/gerak/10') ?>" role="button" >Gerak</a>
                        <a class="btn btn-danger btn-sm text-gray-100" href="<?php echo base_url('control/nosensor/10') ?>" role="button" >OFF</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">API Web Pusat</h6>
                </div>
                <div class="card-body mb-0">
                 <p>
                   API dari web pusat berfungsi sebagai alat komunikasi antara Web Apps LCS dengan Web Pusat <a href="#">http://bwcr/rizaldiariif.com</a>. Dalam komunikasi tersebut dibutuhkan penyesuaian ID lampu web pusat dengan ID lampu web LCS.
                 </p>
                 <p>
                   Maka diperlukan untuk menyesuaikan ID lampu dengan cara mengedit data lampu dengan mengakses halaman dibawah ini
                 </p>
                 <div class="dropdown mb-4 show">
                    <button class="btn btn-primary dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                      Edit data lampu
                    </button>
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="<?php echo base_url('/control/edit/') ?><?php echo $show1->id ?>"><?php echo $show1->nama ?></a>
                      <a class="dropdown-item" href="<?php echo base_url('/control/edit/') ?><?php echo $show2->id ?>"><?php echo $show2->nama ?></a>
                      <a class="dropdown-item" href="<?php echo base_url('/control/edit/') ?><?php echo $show3->id ?>"><?php echo $show3->nama ?></a>
                      <a class="dropdown-item" href="<?php echo base_url('/control/edit/') ?><?php echo $show4->id ?>"><?php echo $show4->nama ?></a>
                      <a class="dropdown-item" href="<?php echo base_url('/control/edit/') ?><?php echo $show5->id ?>"><?php echo $show5->nama ?></a>
                      <a class="dropdown-item" href="<?php echo base_url('/control/edit/') ?><?php echo $show6->id ?>"><?php echo $show6->nama ?></a>
                      <a class="dropdown-item" href="<?php echo base_url('/control/edit/') ?><?php echo $show7->id ?>"><?php echo $show7->nama ?></a>
                      <a class="dropdown-item" href="<?php echo base_url('/control/edit/') ?><?php echo $show8->id ?>"><?php echo $show8->nama ?></a>
                      <a class="dropdown-item" href="<?php echo base_url('/control/edit/') ?><?php echo $show9->id ?>"><?php echo $show9->nama ?></a>
                      <a class="dropdown-item" href="<?php echo base_url('/control/edit/') ?><?php echo $show10->id ?>"><?php echo $show10->nama ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <script>
          function linkopen1() {
              window.open("<?php echo base_url('control/uploadon/1') ?>", "_parent");
          } 
          function linkopen2() {
              window.open("<?php echo base_url('control/uploadoff/2') ?>", "_parent");
          } 
          function linkopen3() {
              window.open("<?php echo base_url('control/uploadoff/3') ?>", "_parent");
          } 
          function linkopen4() {
              window.open("<?php echo base_url('control/uploadoff/4') ?>", "_parent");
          } 
          function linkopen5() {
              window.open("<?php echo base_url('control/uploadoff/5') ?>", "_parent");
          } 
          function linkopen6() {
              window.open("<?php echo base_url('control/uploadoff/6') ?>", "_parent");
          } 
          function linkopen7() {
              window.open("<?php echo base_url('control/uploadoff/7') ?>", "_parent");
          } 
          function linkopen8() {
              window.open("<?php echo base_url('control/uploadoff/8') ?>", "_parent");
          } 
          function linkopen9() {
              window.open("<?php echo base_url('control/uploadoff/9') ?>", "_parent");
          } 
          function linkopen10() {
              window.open("<?php echo base_url('control/uploadoff/10') ?>", "_parent");
          } 
          // _blank diganti _parent untuk proses backend
        </script>

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

</html>

