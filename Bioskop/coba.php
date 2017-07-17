 <?php
                    include "connection.php";
                    //$rows = $conn->query("select * from member")->fetchAll(); // multiple rows
                    $rows = oci_parse($conn, "select * from member");
                    oci_execute($rows);
?>

<body>
  <div class="container">
  <?php
    include('admin2.php');
  ?>
  <div class="row" style="padding-top:100px;">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-body">
           <?php
           if(isset($_GET['status']) && $_GET['status']=="ok")
           {
            echo "<div class='alert alert-dismissable alert-success loading'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <b>Berhasil!</b> Data Telah Dihapus...
            </div>";
           }
           else if(isset($_GET['status']) && $_GET['status']=="gagal"){
            echo "<div class='alert alert-dismissable alert-danger loading'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <b>Gagal!</b> Data Gagal Dihapus...
            </div>";
           }
          ?> 
            <form method="GET" action="delete_member.php">
              <div class="form-group">
                <label class="control-label">member</label>
                <div class="controls">
                  <select class="form-control" name='id_member'>
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
                <input class="btn btn-warning loading" type="submit" value="Delete"/>
              </div>
            </form>
         </div>
      </div>
    </div>
  </div>
    </div>
  </body>
  </html>