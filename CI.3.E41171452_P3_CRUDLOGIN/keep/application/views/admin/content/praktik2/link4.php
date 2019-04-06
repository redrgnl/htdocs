  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Database
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-info box-solid">
        <div class="box-header">
          <h3>Data User</h3>
        </div>
        <div class="box-body">
          <table class="table table-bordered">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Pekerjaan</th>
            </tr>
            <?php foreach ($user as $row) { ?>
            <tr>
              <td><?php echo $row->id ?></td>
              <td><?php echo $row->nama ?></td>
              <td><?php echo $row->alamat ?></td>
              <td><?php echo $row->pekerjaan ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        </div>
    </section>
    <!-- /.content -->
  </div>