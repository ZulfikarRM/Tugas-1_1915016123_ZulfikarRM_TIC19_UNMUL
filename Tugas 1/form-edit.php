<?php 

include("config2.php");

if( !isset($_GET['id']) ){
	header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit | 1915016123_ZulfikarRM_POSTTEST6</title>
</head>

<body>
	<center>
	<header>
		<h3>Formulir Edit</h3>
		<p><a href="timeline.php">Menu</a></p>
	</header>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
		</p>
		<p>
			<label for="kursus">Kursus : </label>
			<?php $kursus = $siswa['kursus']; ?>
			<select name="kursus">
				<option <?php echo ($kursus == 'BahasaInggris') ? "selected": "" ?>>Bahasa Inggris</option>
				<option <?php echo ($kursus == 'Calistung') ? "selected": "" ?>>Calistung</option>
				<option <?php echo ($kursus == 'Mapel') ? "selected": "" ?>>Mapel</option>
			</select>
		</p>
		<p>
			<label for="kelas">Kelas : </label>
			<?php $kelas = $siswa['kelas']; ?>
			<select name="kelas">
				<option <?php echo ($kelas == 'privat') ? "selected": "" ?>>Privat</option>
				<option <?php echo ($kelas == 'reguler') ? "selected": "" ?>>Reguler</option>
				<option <?php echo ($kelas == 'online') ? "selected": "" ?>>Online</option>
			</select>
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	</center>
	</body>
</html>
