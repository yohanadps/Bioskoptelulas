<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NOW PLAYING - BIOSKOP TELULAS - Start Bootstrap Theme</title>

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
                   <ul class="nav navbar-nav">
                    <li>
                     
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                           <li class="active">
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
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="jadwal.php">LOGIN
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li> <a href="pendaftaran.php"></i> Pendaftaran</a></li>
                        <li><a href="member.php"></i>Login Member</a></li>
                    </ul>
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
                    <img src="img/ho3.jpg" alt="">
                    <h2>FROZEN: SING A LONG
                        <br>
                        <small>Desmber 31, 2014</small>
                    </h2>
                    <p>SYNOPSIS
Kisah petualangan gadis bernama Anna (kristen Bell) dan kawan-kawannya untuk mengembalikan kerajaan dari musim dingin yang abadi. Bersama kristoff (Jonathan Groff) dan boneka salju Olaf (Josh Gad), Anna berusaha menemukan Elsa (Indina Menzel).
 
Berbagai kejadian lucu dan menegangkan hadir mewarnai perjalanan mereka. Berhasilkah Anna dan teman-temannya menemukan Elsa dan mengembalikan kondisi kerajaan seperti dulu.
 
Kali ini akan ada teks lirik lagu sehingga penonton bisa ikut bernyanyi bersama karakter Frozen favorit mereka
                    <hr>

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
                        <td> <?php echo $row[0]; ?></td>
                        <td> <?php echo $row[1] ;?></td>
                        <td> <?php echo $row[2] ;?></td>
                        <td> <?php echo $row[3] ;?></td>
                        <td> <?php echo $row[4] ;?></td>
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
