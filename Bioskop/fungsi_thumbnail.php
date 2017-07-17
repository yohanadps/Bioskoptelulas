<?php
	function UploadImage($fupload_name)
	{
		//nentuin folder dan file yang diupload
		$folder="../files/";
		
		$file_upload=$folder . $fupload_name;
		
		//simpan gambar originalnya
		move_uploaded_file($_FILES["fupload"]["tmp_name"],$file_upload);
		
		//identitas original file
		$gbr_asli= imagecreatefromjpeg($file_upload);
		$lebar= imageSX ($gbr_asli);
		$tinggi= imageSY ($gbr_asli);
		
		//simpan versi thumbnail (110 pixel)
		
		$thumb_lebar = 110;
		$thumb_tinggi = ($thumb_lebar/$lebar) * $tinggi;
		
		
		// proses ngerubah ukuran ke thumbnail
		$gbr_thumb= imagecreatetruecolor($thumb_lebar,$thumb_tinggi);
		imagecopyresampled($gbr_thumb, $gbr_asli,0,0,0,0,$thumb_lebar,$thumb_tinggi,$lebar,$tinggi);
		
		//simpan gambar thumbnail
		imagejpeg($gbr_thumb,$folder. "thumb_".$fupload_name);
		
		//hapus gambar di memori kommputer
		imagedestroy($gbr_asli);
		imagedestroy($gbr_thumb);
	}
?>