<?php
	include ('connection.php');
	$query = "update FILM set JUDUL_FILM = '$_POST[judul_film',
									DURASI = '$_POST[durasi]',
									KATEGORI = '$_POST[kategori]',
									RATING = '$_POST[rating]'

			  where KODE_FILM='$_POST[KODE_FILM]'";
	//echo $query;
	if($connect->exec($query))
	{
		header("Location:update.php?status=ok");	
	}
	else
	{
		header("Location:update.php?status=gagal");
	}
	
?>