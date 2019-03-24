<!DOCTYPE html>
<html>
<head>
	<title>Upload File CI3</title>
</head>
<body>
	<center><h1>Membuat Upload File dengan Codeigniter</h1></center>
	<?php echo $error; ?>

	<?php echo form_open_multipart('upload/aksi_upload'); ?>

	<input type="file" name="berkas">

	<br><br>

	<input type="submit" value="upload">

	</form>
</body>
</html>