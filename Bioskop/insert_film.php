<body>
  <div class="container">
  <?php
    include('admin2.php');
  ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="row" >
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
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
          <form method="post" enctype="multipart/form-data" action="insert_film_query.php" id="js-upload-form">
            <div class="form-group has-success">
              <label class="control-label">Kode Film</label>
              <div class="controls">
                <input class="form-control" type="text" name="kodefilm">
            </div>
          </div>

      <div class="form-group has-success">
        <label class="control-label">Judul</label>
        <div class="controls">
          <input class="form-control loading" name="judul">
        </div>
      </div>

      <div class="form-group has-success">
        <label class="control-label">Durasi</label>
        <div class="controls">            
          <input class="form-control loading" name="durasi">
        </div>
      </div>
            <div class="form-group has-success">
        <label class="control-label">Kategori</label>
        <div class="controls">
          <input class="form-control loading"type="date" name="kategori">
        </div>
      </div>
            <div class="form-group has-success">
        <label class="control-label">Rating</label>
        <div class="controls">
          <input class="form-control loading" name="rating">
        </div>
      </div>
           <div class="form-group has-success">
        <label class="control-label">Harga</label>
        <div class="controls">
          <input class="form-control loading" name="harga">
        </div>
      </div>
    
         <div class="pull-right">
                  
                  <button class="btn btn-primary" type="submit" >Submit</button>
                </div>
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
