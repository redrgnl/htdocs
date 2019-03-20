<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>bengkel</title>
	<link rel="stylesheet" href="asset/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="	style.css">
</head>
<body>
  <div class="jumbotron -center">
    <h1> ini halaman utama</h1>
    <br>
    <h1>PRATIKUM 2</h1>
    <h2><?php echo $nama_web; ?></h2>
    <br>
    <h1>PRATIKUM 3</h1>
    <?php 
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",1);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",2);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",3);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",4);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",5);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",6);
	?>
	<br>
	<h1>PRATIKUM 4</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
		</tr>
		<?php } ?>
	</table>
  </div>	
</body>
</html>
