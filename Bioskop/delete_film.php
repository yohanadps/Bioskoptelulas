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
            <?php
            if(isset($_GET['status']) && $_GET['status']=="ok")
            {
              echo "<div class='alert alert-dismissable alert-success'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <b>Berhasil!</b> Data Telah Dihapus...
              </div>";
            }
            else if (isset($_GET['status']) && $_GET['status']=="gagal") {
              echo "<div class='alert alert-dismissable alert-danger'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <b>Gagal!</b> Data Gagal Dihapus...
              </div>";
            }
            ?>

            <form method="GET" action="delete_film_query.php">
              <div class="form-group">
                <label class="control-label">FILM</label>
                <div class="controls">
                  <select class="form-control" name='kode_film'>
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
                <input class="btn btn-danger" type="submit" value="Delete"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>