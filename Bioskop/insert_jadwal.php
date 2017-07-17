 <div class="container">
  <?php
    include('admin2.php');
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
          <form method="POST" action="insert_jadwal_query.php">
            <div class="form-group">
              <label class="control-label">NO_JADWAL</label>
              <div class="controls">
                <input class="form-control" type="text" name="NO_JADWAL">
            </div>
          </div>

            <div class="form-group">
              <label class="control-label">KODE FILM</label>
                <input class="form-control" type="text" name="KODE_FILM">
              </div>
        
            <div class="form-group">
              <label class="control-label">HARI</label>
              <input class="form-control" type="text" name="HARI">
              </div>
        
            <div class="form-group">
              <label class="control-label">TANGGAL</label>
               <input class="form-control" type="text" name="TANGGAL">
              </div>
        
            <div class="form-group">
              <label class="control-label">JAM</label>
               <input class="form-control" type="text" name="JAM">
              </div>

              <div class="form-group">
              <label class="control-label">HARGA</label>
               <input class="form-control" type="text" name="HARGA">
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
