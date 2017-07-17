<?php

include "connection.php";

	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];


	if($username[0]=="U"){
		$query = "SELECT * FROM PETUGAS WHERE USERNAME = '$username'";
		$objParse = oci_parse($conn, $query);
		$objExe = oci_execute($objParse);

		$rows = oci_fetch_array($objParse);
		
		if($password == $rows[1]){
			header("Location: admin2.php");
		}
		else{
			header("Location: admin.php?status=gagal");
		}
	}

	else{
		header("Location: login.php?status=gagal");
	}
?>