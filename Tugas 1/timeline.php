<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu Pendaftaran | 1915016123_ZulfikarRM_POSTTEST5</title>
</head>

<body>
	<header>
		<h3>Pendaftaran Siswa Baru GRIYA BELAJAR BINARI</h3>
		<video controls>
			<source src="Media/127062710_372012127201045_5328641009801764547_n.mp4" type="video/mp4" /></video>
        <p><a href="logout.php">Logout</a></p>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-siswa.php">Pendaftar</a></li>
		</ul>
	</nav>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	</body>
</html>