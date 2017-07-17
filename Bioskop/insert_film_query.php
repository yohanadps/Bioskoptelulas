
<?php
	include "connection.php";
	$kode_film = $_POST['kodefilm'];
	$judul_film = $_POST['judul'];
	$durasi_film = $_POST['durasi'];
	$kategori = $_POST['kategori'];
	$rating_film = $_POST['rating'];
	$harga = $_POST['harga'];

	echo $kode_film;
	echo $judul_film;
	echo $durasi_film;
	echo $kategori;
	echo $rating_film;
	echo $harga;

	$query = oci_parse($conn, "insert into MEMBER values ('".$kode_film."','".$judul_film."','".$durasi_film."','".$kategori."','".$rating_film."','".$harga."')") ;
	$exec_query = oci_execute($query);
	if(!$exec_query)
	{
		header("Location:insert_film.php?status=gagal");
		
	}
	else
	{
		header("Location:insert_film.php?status=ok");	
	}
	
	
?>