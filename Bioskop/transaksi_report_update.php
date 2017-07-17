<?php
	include "connection.php";

  $transaksi = oci_parse($conn, " select * from TRANSAKSI ");
  oci_execute($transaksi);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 
<body class="container-fluid">  
<div class="container">  	
<h2>Update Data Transaksi</h2>
  <form id="formTransaksi" class="form-horizontal" role="form" action="report_transaksi.php" method="post">

    <!--ID Transaksi-->
    <div class="form-group">
      <label class="control-label col-sm-2">ID Transaksi:</label>
      <div class="col-sm-3">
        <select name="update_nopembelian" class="form-control select2-select">
          <option value=""></option>
          <?php while ($row = oci_fetch_array($transaksi))
            {
              ?>
                <option value="<?php echo  $row[0]; ?>"><?php echo  $row[0]."  "."(".$row[6].")" ; ?></option>
              <?php
            }
          ?>
        </select>
      </div>

      
    <!--Tombol Submit-->
    <div class="form-group">        
      <div class="control-label col-sm-12">
          <button type="submit" class="btn btn-primary btn-lg">Submit</button>
      </div>  
    </div>
    <br><br><br><br>
  </form>
</div>

    </body>
</html>