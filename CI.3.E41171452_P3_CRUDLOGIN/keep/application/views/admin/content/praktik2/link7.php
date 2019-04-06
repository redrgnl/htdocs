  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Library
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <h3>Data Diri</h3>
        <?php
          $this->dragneel->name();
          echo "<br>";
          $this->dragneel->nim();
          echo "<br>";
          $this->dragneel->prodi();
          echo "<br>";
          $this->dragneel->alamat("Mars");
        ?>

    </section>
    <!-- /.content -->
  </div>