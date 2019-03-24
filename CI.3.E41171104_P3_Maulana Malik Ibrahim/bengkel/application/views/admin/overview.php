<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('admin/partial/header.php') ?>
  <title>Home</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      <?php $this->load->view('admin/partial/sidebar.php')?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('admin/partial/navbar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <?php $this->load->view('admin/partial/main-content.php') ?>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view('admin/partial/footer.php') ?>
      <!-- End Of Footer -->
</body>
<?php $this->load->view('admin/partial/js.php') ?>
</html>
