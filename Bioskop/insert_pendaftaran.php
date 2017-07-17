<?php
	include "connection.php";
	$idmember = $_POST['ID_MEMBER'];
	$namamember = $_POST['NAMA_MEMBER'];
	$tgllahir = $_POST['TGL_LAHIR'];
	$jk = $_POST['JENIS_KELAMIN'];
	$pekerjaan = $_POST['PEKERJAAN'];

	echo $idmember;
	echo $namamember;
	echo $tgllahir;
	echo $jk;
	echo $pekerjaan;

	$query = oci_parse($conn, "insert into MEMBER values ('".$idmember."','".$namamember."',TO_DATE('".$tgllahir."','dd-mm-yy'),'".$jk."','".$pekerjaan."')") ;
	
	$exec_query = oci_execute($query);
	if(!$exec_query)
	{
		header("Location:pendaftaran.php?status=gagal");
		
	}
	else
	{
		header("Location:pendaftaran.php?status=ok");	
	}
	
?>