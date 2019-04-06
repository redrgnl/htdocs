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
        <form action="<?php echo base_url(). 'admin/adddata'; ?>" method="post">
		<div class="box box-info box-solid">
        <div class="box-header">
            <h4>Insert</h4>
        </div>
        <div class="box-body">
        <table class="table-bordered">
			<tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
        </div>
        </div>
	</form>
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>