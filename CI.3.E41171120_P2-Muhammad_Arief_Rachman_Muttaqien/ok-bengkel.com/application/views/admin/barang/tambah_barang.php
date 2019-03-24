<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partial/head"); ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partial/sidebar"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partial/navbar"); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div>
            <?php
              echo heading("Tambah Data Barang | OK-Bengkel.com", 3);
            ?>
          </div>

          <!-- Content Row -->
          <?php echo validation_errors(); ?>
          <div class="row">
            <form action="<?php echo base_url('admin/form_tambah_barang/aksi'); ?>" method="post">
              <label>Nama Barang</label>
              <input type="text" name="nama_barang" class="form-control">

              <label>Deskripsi Barang</label>
              <input type="text" name="deskripsi_barang" class="form-control">

              <label>Harga Barang</label>
              <input type="text" name="harga_barang" class="form-control">

              <label>Stok Barang</label>
              <input type="text" name="stok_barang" class="form-control">

              <input type="submit" value="Submit" class="btn btn-primary mt-5">
            </form>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin/_partial/footer"); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view("admin/_partial/js"); ?>

</body>

</html>
