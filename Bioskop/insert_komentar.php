<?php
	include "connection.php";
	$komentar = $_POST['KOMENTAR'];
	$kode_film = $_POST['KODE_FILM'];
	$idmember = $_POST['ID_MEMBER'];
	$rating = $_POST['RATING_USER'];

	$current_rating = oci_parse($conn, "select RATING from FILM where KODE_FILM = '".$kode_film."' ");
	oci_execute($current_rating);
	
	$exec_current_rating = oci_fetch_array($current_rating);
	
	$new_rating = ($exec_current_rating[0]+$rating)/2;
	
	$rating_user = oci_parse($conn, "update FILM set RATING ='".$new_rating."' where KODE_FILM ='".$kode_film."' ");
	oci_execute($rating_user);

	$query = oci_parse($conn, "insert into KOMENTAR values ('".$komentar."','".$kode_film."','".$idmember."')");
	$exec_query = oci_execute($query);
	if(!$exec_query)
	{
		header("Location:komentar.php?status=gagal");
		
	}
	else
	{
		header("Location:komentar.php?status=ok");	
	}
	
?>