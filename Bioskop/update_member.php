<body>
  <div class="container">
  <?php
    include('admin2.php');
  ?>

  <?php

include "connection.php";

/*if( isset($_GET['id_member']))
{
*/	$id_member = $_GET['member'];

/*}*/
?>
    <?php
           if(isset($_GET['status']) && $_GET['status']=="ok")
           {
            echo "<div class='alert alert-dismissable alert-success loading'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <b>Berhasil!</b> Data Telah Diupdate...
            </div>";
           }
           else if(isset($_GET['status']) && $_GET['status']=="gagal"){
            echo "<div class='alert alert-dismissable alert-danger loading'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <b>Gagal!</b> Data Gagal Diupdate...
            </div>";
           }
          ?> 
	<div class="panel panel-default">
		<div class="panel-body">
			<form method="POST" action="update_member_query.php">

				<div class="form-group">
					<label class="control-label">id_member</label>
					<div class="controls">
						<input class="from-control" type="text" name="id_member" value= "<?php echo $id_member?>" readonly="" >
					</div>
				</div>

				<div class="form-group">
					<label class="control-label">nama_member</label>
					<div class="controls">
					<input class="from-control" type="text" name="nama_member_update" >
				</div>

				<div class="form-group">
					<label class="control-label">tanggal lahir</label>
					<div class="controls">
					<input class="from-control" type="text" name="tgllahir_member_update" >
					</div>
				</div>
					<div class="form-group">
					<label class="control-label">jenis_kelamin</label>
					<div class="controls">
						<input class="from-control" type="text" name="jk_member_update" >
					</div>
				</div>

				<div class="form-group">
					<label class="control-label">pekerjaan</label>
					<div class="controls">
						<input class="from-control" type="text" name="pekerjaan_member_update" >
					</div>
				</div>
					<div class="pull-right">
						<input class="btn btn-success" value="Update" type="submit">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>