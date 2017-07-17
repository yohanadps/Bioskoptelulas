<?php
	include "connection.php";
	$idmember = $_GET['id_member'];
	$query = oci_parse($conn, "delete from member where id_member='".$idmember."'");
	
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