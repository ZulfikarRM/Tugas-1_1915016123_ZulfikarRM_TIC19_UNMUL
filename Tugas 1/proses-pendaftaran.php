<?php

include("config2.php");

if(isset($_POST['daftar'])){
	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$kursus = $_POST['kursus'];
	$kelas = $_POST['kelas'];
	
	$sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, kursus, kelas) VALUE ('$nama', '$alamat', '$jk', '$kursus', '$kelas')";
	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: list-siswa.php?status=sukses');
	} else {
		header('Location: form-daftar.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
