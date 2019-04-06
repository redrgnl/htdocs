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
      <div class="row">
      <div class="col-md-3">
        <div class="small-box bg-aqua">
            <div class="inner">
              <h4>Tambah Orang</h4>
            </div>
            <div class="icon">
              <i class="fa fa-cloud-download"></i>
            </div>
            <a href="<?php echo base_url('admin/llink7')?>" class="small-box-footer">Tambah <i class="fa fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <div class="col-md-9">
      <div class="box box-info box-solid">
        <div class="box-header">
          <h3>Data User</h3>
        </div>
        <div class="box-body">
          <table class="table table-bordered">
            <tr>
              <th style="width: 35px">Nomor</th>
              <th>ID</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Pekerjaan</th>
              <th>Update</th>
            </tr>
            <?php
              $no = 1;
              foreach ($ddata as $row) { 
            ?>              
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $row->id ?></td>
              <td><?php echo $row->nama ?></td>
              <td><?php echo $row->alamat ?></td>
              <td><?php echo $row->pekerjaan ?></td>
                <td>
                    <?php echo anchor('admin/edit/'.$row->id,'<button class="btn btn-success">Edit</button>');?>
                    <?php echo anchor('admin/delete/'.$row->id,'<button class="btn btn-danger">Delete</button>');?>
                </td>
            </tr>
            <?php } ?>
          </table>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- /.content -->
  </div>