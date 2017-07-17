<html>
<body>
  <div class="container">
  <?php
    include('admin2.php');
  ?>
            <!--mulai menu delete-->
    <div class="row" style="padding-top:100px;">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-body">
<!--menggabungkan-->
 <?php
                    include "connection.php";
                    //$rows = $conn->query("select * from member")->fetchAll(); // multiple rows
                    $rows = oci_parse($conn, "select * from member");
                    oci_execute($rows);
?>
<!--update-->
						<?php
						if(isset($_GET['status']) && $_GET['status']=="ok")
						{
							echo "<div class='alert alert-dismissable alert-success'>
							<button type='button' class='close' data-dismiss='alert'>&times;</button>
							<b>Berhasil!</b> Data Telah Diupdate...
							</div>";
						}
						else if (isset($_GET['status']) && $_GET['status']=="gagal") {
							echo "<div class='alert alert-dismissable alert-danger'>
							<button type='button' class='close' data-dismiss='alert'>&times;</button>
							<b>Gagal!</b> Data Gagal Diupdate...
							</div>";
						}
						?>
						<form method="GET" enctype="multipart/form-data" action="update_member.php" id="js-upload-form">
							<div class="form-group has-success">
								<label class="control-label">member</label>
								<div class="controls">
									<select class="form-control" name='member' >
										<option value = "" ></option>
										<?php
										while($row = oci_fetch_array($rows))
										{
											?>
											<option value = "<?php echo $row[0]; ?>" ><?php echo $row[1]; ?> </option>
											<?php
										}
										?>
									</select>
								</div>
							</div>
							<div class="pull-right">
								<input class="btn btn-primary" type="submit" value="Edit"/>
							</div>
						</form>
					</div>
				</div>
				

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
	