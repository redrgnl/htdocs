  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penjualan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <?php echo form_open('admin/rule')?>
              <div class="box-body">
                <div class="form-group">
                  <label for="InpNama">Nama</label>
                  <input type="text" class="form-control" id="InpNama" placeholder="Nama" name="nama">
                    <?php echo form_error('nama'); ?>
                </div>
                <div class="form-group">
                  <label for="InpNim">Nim</label>
                  <input type="text" class="form-control" id="InpNim" placeholder="Nim" name="nim">
                    <?php echo form_error('nim'); ?>
                </div>
                <div class="form-group">
                  <label for="InpPro">Prodi</label>
                  <input type="text" class="form-control" id="InpPro" placeholder="Prodi" name="prodi">
                    <?php echo form_error('prodi'); ?>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>