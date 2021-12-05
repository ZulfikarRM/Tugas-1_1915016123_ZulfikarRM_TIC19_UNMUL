<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran | 1915016123_ZulfikarRM_POSTTEST6</title>
</head>

<body>
	<center>
	<header>
		<h3>Formulir Pendaftaran</h3>
		<p><a href="timeline.php">Menu</a></p>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p>
		<p>
			<label for="kursus">Kursus : </label>
			<select name="kursus">
				<option>Bahasa Inggris</option>
				<option>Calistung</option>
				<option>Mapel</option>
			</select>
		</p>
		<p>
			<label for="kelas">Kelas : </label>
			<select name="kelas">
				<option>Privat</option>
				<option>Reguler</option>
				<option>Online</option>
			</select>
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	</center>
	</body>
</html>
