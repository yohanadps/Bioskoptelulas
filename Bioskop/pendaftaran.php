
<!DOCTYPE html>
<html lang="en">
<?php
function generateRandomString($length = 5) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIOSKOP TELULAS - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">BIOSKOP TELULAS</div>
    <div class="address-bar">Gedung Teknik Informatika |Kampus ITS Sukolilo, Surabaya, 60111 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">BIOSKOP TELULAS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="film.php">Film</a>
                    </li>
                    
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="jadwal.php">Jadwal
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li> <a href="Jadwal.php"></i> Jadwal</a></li>
                        <li><a href="Search.php"></i> Search per rating</a></li>
                    </ul>
                </li>
                    <li>
                        <a href="pilih_film.php">Pembelian</a>
                    </li>
                  <li>
                        <a href="pendaftaran.php">Pendaftaran</a>
                    </li>
                  
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
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
          <form method="POST" action="insert_pendaftaran.php">
            <div class="form-group">
              <label class="control-label">ID MEMBER</label>
              <div class="controls">
                <input class="form-control" type="text" name="ID_MEMBER" value="<?php echo generateRandomString(5); ?>">
            </div>
          </div>

            <div class="form-group">
              <label class="control-label">NAMA MEMBER</label>
                <input class="form-control" type="text" name="NAMA_MEMBER">
              </div>
        
            <div class="form-group">
              <label class="control-label">TANGGAL LAHIR</label>
              <input class="form-control" type="text" name="TGL_LAHIR" value="04-12-94">
              </div>
        
            <div class="form-group">
              <label class="control-label">JENIS KELAMIN</label>
               <input class="form-control" type="text" name="JENIS_KELAMIN" value="P/L">
              </div>
        
            <div class="form-group">
              <label class="control-label">PEKERJAAN</label>
               <input class="form-control" type="text" name="PEKERJAAN">
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
