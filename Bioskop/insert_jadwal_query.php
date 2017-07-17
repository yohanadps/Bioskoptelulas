<?php
	include "connection.php";

	$nojadwal = $_POST['NO_JADWAL'];
	$kodefilm = $_POST['KODE_FILM'];
	$hari = $_POST['HARI'];
	$tanggal = $_POST['TANGGAL'];
	$jam = $_POST['JAM'];
	$harga = $_POST['HARGA'];



	$query = oci_parse($conn, "insert into JADWAL values ('".$nojadwal."','".$kodefilm."','".$hari."',TO_DATE('".$tanggal."','dd-mm-yy'),'".$jam."','".$harga."')");
	$exec_query = oci_execute($query);

	$bangku = oci_parse($conn, "select * from BANGKU");
	oci_execute($bangku);

	while ($exec_bangku = oci_fetch_array($bangku))
	{
		$insert_bangku = oci_parse($conn, "insert into STATUS_BANGKU values ('".$nojadwal."','".$exec_bangku[0]."', '".$exec_bangku[1]."') ");
		oci_execute($insert_bangku);
	}
	
	if(!$exec_query)
	{
		header("Location:insert_jadwal.php?status=gagal");
		
	}
	else
	{
		header("Location:insert_jadwal.php?status=ok");	
	}
	
?>