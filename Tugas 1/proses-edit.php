<?php

include("config2.php");

if(isset($_POST['simpan'])){
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$kursus = $_POST['kursus'];
	$kelas = $_POST['kelas'];
	
	$sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', kursus='$kursus', kelas='$kelas' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: list-siswa.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
