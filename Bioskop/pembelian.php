
<!DOCTYPE html>
<html lang="en">
<?php
function generateRandomString($length = 3) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

   
}
    $nojadwal = $_POST['id_jadwal'];
    $harga = $_POST['idharga'];
    $status = "BELUM";
    
?>

<?php
  include "index.php"
  ?>


<div class="row" >
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-body">
           <?php
           if(isset($_GET['status']) && $_GET['status']=="ok")
           {
            echo "<div class='alert alert-dismissable alert-success'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <b>Berhasil!</b> Data Telah Dimasukkan...
            </div>";
           }
           else if(isset($_GET['status']) && $_GET['status']=="gagal"){
            echo "<div class='alert alert-dismissable alert-danger'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <b>Gagal!</b> Data Gagal Dimasukkan...
            </div>";
           }
          ?>
          <form method="POST" action="insert_pembelian.php">
            <div class="form-group">
              <label class="control-label">NO PEMBELIAN</label>
              <div class="controls">
                <input class="form-control" type="text" name="NO_PEMBELIAN" value="<?php echo generateRandomString(3); ?>">
            </div>
          </div>

            <div class="form-group">
              <label class="control-label">ID MEMBER</label>
                <input class="form-control" type="text" name="ID_MEMBER">
              </div>
        
            <div class="form-group">
              <label class="control-label">NO JADWAL</label>
              <input class="form-control" type="text" name="NO_JADWAL" value = "<?php echo $nojadwal?>" readonly="">
              </div>
        
            <div class="form-group">
              <label class="control-label">NO KURSI</label>
               <select class="form-control" name="NO_KURSI">
                    <option value = "" ></option>
                    <?php
                    include "connection.php";
                    $kursi = oci_parse($conn, "select * from STATUS_BANGKU where NO_JADWAL = '".$nojadwal."' AND STATUS = 'BELUM' ");
                    oci_execute($kursi);
                    while($row = oci_fetch_array($kursi)) 
                    {
                      ?>
                        <option value = "<?php echo $row[1] ?>" > <?php echo $row[1] ?> </option>
                      <?php                       
                    }
                    ?>
                  </select>
              </div>
        
            <div class="form-group">
              <label class="control-label">TANGGAL PEMBELIAN</label>
               <input class="form-control" type="text" name="TGL_PEMBELIAN">
              </div>

              <div class="form-group">
              <label class="control-label">Harga</label>
               <input class="form-control" type="text" name="HARGA" value="<?php echo $harga ?>" readonly="">
              </div>

            
                <div class="pull-right">
                  
                  <button class="btn btn-primary" type="submit" >Submit</button>
                </div>
                <!--</div>
                <div class="pull-right">
                  <a class="btn btn-danger">Back</a>
                  <input class="btn btn-success" type="submit" value="Submit"/>
                </div>-->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
