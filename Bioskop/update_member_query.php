<?php
include "connection.php";

	$id_member = $_POST['id_member'];
	$nama_member=$_POST['nama_member_update'];
	$tanggal_lahir = $_POST['tgllahir_member_update'];
	$jenis_kelamin = $_POST['jk_member_update'];
	$pekerjaan = $_POST['pekerjaan_member_update'];

	$member_nama = oci_parse($conn, " update MEMBER set nama_mamber = '".$nama_member."' where id_member = '".$id_member."' " );
	$member_tgl_lahir = oci_parse($conn, " update MEMBER set tgl_lahir = TO_DATE('".$tanggal_lahir."','dd-mm-yy') where id_member = '".$id_member."' " );
	$member_jk = oci_parse($conn, " update MEMBER set jenis_kelamin = '".$jenis_kelamin."' where id_member = '".$id_member."' " );
	$member_pekerjaan = oci_parse($conn, " update MEMBER set pekerjaan = '".$pekerjaan."' where id_member = '".$id_member."' " );
	$exec_nama = oci_execute($member_nama);
	$exec_tgl_lahir = oci_execute($member_tgl_lahir);
	$exec_jk = oci_execute($member_jk);
	$exec_pekerjaan = oci_execute($member_pekerjaan);

	if($exec_nama && $exec_tgl_lahir && $exec_jk && $exec_pekerjaan){
		 header("Location:update_member.php?status=ok");
	}
	else {
		 header("Location:update_member.php?status=gagal");
	}
?>
