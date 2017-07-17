<?php
include "connection.php";
	$idmember = $_GET['kode_film'];
	$query = oci_parse($conn, "delete from film where kode_film='".$kode_film."'");
	
	//echo $query;
	if(oci_execute($query))
	{
		header("Location:delete_member.php?status=ok");
	}
	else
	{
		header("Location:delete_member.php?status=gagal");
	}
	
?>