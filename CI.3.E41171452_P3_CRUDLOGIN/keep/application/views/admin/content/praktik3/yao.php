<h1>Halo, <?php echo $this->session->userdata("nama")?></h1>
    <img src="<?php echo base_url('assets/dist/img/please.png')?>">
    <h3>Silahkan anda logout dari web ini</h3>
    <a href="<?php echo base_url('admin/logout')?>">    
        <button style="background: red; color:white;">Logout</button>
    </a>