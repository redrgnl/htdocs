<!DOCTYPE html>
<html lang="en">

  <head>
  <?php $this->load->view("admin/partial/head")?>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <?php $this->load->view("admin/partial/navbar")?>

    </nav>

    <div id="wrapper">

      <?php $this->load->view("admin/partial/sidebar")?>

      <div id="content-wrapper">

        <div class="container-fluid">

         <?php $this->load->view("admin/partial/breadcrumb")?>

          <!-- Icon Cards-->
          <div class="row">
            <?php $this->load->view("admin/partial/icon_card")?>
          </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <?php $this->load->view("admin/partial/area_chart")?>
          </div>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <?php $this->load->view("admin/partial/data_table")?>
          </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <?php $this->load->view("admin/partial/footer")?>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <?php $this->load->view("admin/partial/logout")?>
    </div>

  <?php $this->load->view("admin/partial/js")?>


  </body>

</html>