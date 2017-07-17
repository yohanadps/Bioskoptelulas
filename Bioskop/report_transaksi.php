<?php
	include "connection.php";
  $update = $_POST['update_no_transaksi'];
  $transaksi= oci_parse($conn, " update TRANSAKSI set STATUS='Lunas' where NO_TRANSAKSI='".$update."' ");
  oci_execute($transaksi);
  
  header("Location:transaksi_report_update.php");
?>

