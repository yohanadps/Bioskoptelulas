<!DOCTYPE html>
<html lang="en">

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

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">NOW PLAYING
                        <strong>BIOSKOP TELULAS</strong>
                    </h2>
                    <hr>
                <div class="col-lg-12 text-center">
                    <img src="img/ho.jpg" alt="">
                    <h2>The Hobbit: The Battle of the Five Armies
                        <br>
                        <small>Desmber 31, 2014</small>
                    </h2>
                    <p>SYNOPSIS
The Hobbit: The Battle of the Five Armies akan melanjutkan kisah petualangan epik Bilbo Baggins (Martin Freeman), Gandalf (Ian McKellen) dan pemimpin para kurcaci (Thorin Oakenshield).

Setelah berhasil menguasai tanah kelahiran mereka dari Naga Smaug, para kurcaci ternyata kini harus menghadapi teror yang lebih sadis dari sang Naga. Tidak hanya itu, keserakahan Thorin akan harta menambah penderitaan mereka. Namun teror yang sebenarnya kini dipersiapkan oleh musuh kuno bernama Sauron. Teror yang tidak seorang pun tahu kecuali oleh Gandalf.

Sauron telah mengumpulkan pasukan Orc untuk menghancurkan manusia. Disaat pasukan kegelapan bersatu, Manusia, Kurcaci, dan Peri kini harus memutuskan apakah mereka akan bersatu melawan kegelapan. Bilbo akhirnya memutuskan untuk pergi bertempur bersama teman-temannya. Pertempuran lima tentara akan menentukan nasib mereka di Middle Earth.</p>
                        <hr>
                </div>
                   </nav>
                    <div class="col-lg-12 text-center">
                    <img src="img/ho2.jpg" alt="">
                    <h2>EXODUS: GODS AND KINGS
                        <br>
                        <small>Desember 31, 2014</small>
                    </h2>
                    <p>Bersahabat sejak kecil, Musa (Christian Bale) dan Ramses (Joel Edgerton) akhirnya harus berlawanan karena nasib dan idelogi.

Saat keduanya tumbuh dan mengambil peran masing-masing sebagai pemimpin, Musa membujuk Ramses untuk mengakhiri perbudakan yang sudah ada selama ini di Mesir.

Ramses yang menjadi pemimpin Mesir kini memburu Musa yang lari bersama para budak untuk menuju kebebasan. </p>
                    <hr>
                </div>
                   </nav>
    
      <div class="col-md-12">
        <div class="panel panel-default">
            <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align:center;">Kode Film</th>
                  <th style="text-align:center;">Judul Film</th>
                  <th style="text-align:center;">Durasi</th>
                  <th style="text-align:center;">Kategori</th>
                  <th style="text-align:center;">Rating</th>
                  <th style="text-align:center;">Komentar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  include "connection.php";
                  $rows = oci_parse($conn, "select * from FILM");

                  oci_execute($rows);
                  while ($row= oci_fetch_array($rows))
                    {?>
                    <tr>
                         <form method="POST" action="komentar.php">
                            <div class="form-group">
                                  <td> <?php echo $row[0] ;?></td>
                                  <input name = "kode_film" type="hidden" value = "<?php echo $row[0]?>">
                            </div>
                                  <td> <?php echo $row[1] ;?></td>
                                  <td> <?php echo $row[2] ;?></td>
                                  <td> <?php echo $row[3] ;?></td>
                                  <td> <?php echo $row[4] ;?></td>
                                  <td> <input class="btn btn-danger" type="submit" value="Komentar"/></td>          
                                
                        </form>
                    </tr>
                   <?php
                 }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="film2.php">&larr; Older</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
