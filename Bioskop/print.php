<?php

	include "connection.php";
  $nopembelian = $_POST['nopembelian'];
  $query= oci_parse($conn, "select * from TRANSAKSI where NO_JADWAL = '".$nopembelian."' ");
  oci_execute($query);
	$idmember = $_POST['idmember'];
	$nojad = $_POST['nojad'];
	$nk = $_POST['nk'];
	$tglpem = $_POST['tglpem'];

?>

<script>
  function printFunction()
  {
      javascript:window.print();  
  }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Report Transaksi <?php echo $id_report_login?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href = "http://localhost/fp/css/datepicker.css">  
    <link rel="stylesheet" href = "http://localhost/fp/css/select2.min.css"> 
    <link rel="stylesheet" href = "http://localhost/fp/css/select2-bootstrap.min.css">  
  </head>
<body>

   

    <script src="http://localhost/fp/js/jquery.min.js"></script>
    <script src="http://localhost/fp/js/bootstrap.min.js"></script>
    <script src="http://localhost/fp/js/bootstrap-datepicker.js" charset="UTF-8"></script>
    <script src="http://localhost/fp/js/select2.min.js"></script>

<div class="container">
  <h1><center>BIOSOP TELULAS</center></h1>
  <h2>Bukti Transaksi</h2>
  <form class="form-horizontal" role="form" class="form" action = "print.php">
    <div class="row" style="margin-top: 0px;">
            <div class="col-md-10"></div>
            <div class="col-md-10">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"></span>&nbsp;&nbsp;Data Transaksi</h3>
                    </div>
                    <div class="panel-body">
                      <!--ID Transaksi-->
                        <div class="form-group">
                          <div class="col-sm-10"> 
                          	<h4>ID Transaksi&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;: <?php echo $nopembelian?></h4>
                            <h4>ID MEMBER&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $idmember?></h4>
                            <h4>NO JADWAL&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<?php echo $nojad?></h4>
                            <h4>NO KURSI&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: <?php echo $nk?></h4>
                            <h4>TANGGAL PEMBELIAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $tglpem?></h4>
                      
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10"></div>
        </div>

<!-- <div class="row" style="margin-top: 0px;">
            <div class="col-md-10"></div>
            <div class="col-md-10">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"></span>&nbsp;&nbsp;Jadwal Film</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table" id="jadwalfilm">
                          <thead>
                            <tr>
                              <th>NO Jadwal</th>
                              <th>Kode Film</th>
                              <th>Hari </th>
                              <th>Tanggal</th>
                              <th>Jam</th>
                              <th>Harga</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td> <?php echo $kota_asal_report ?> </td>
                              <td> <?php echo $kota_tujuan_report ?> </td>
                              <td> <?php echo $tgl_berangkat_report ?> </td>
                              <td> <?php echo $jam_berangkat_report ?> </td>
                              <td> <?php echo $jam_berangkat_report ?> </td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                </div>
            </div>
            <div class="col-md-10"></div>
        </div> -->
        <!-- <button type = "submit" class="btn btn-success btn-block">Print PDF</button>
 -->
  </form>


</div>

  <script>
    $(document).ready(function()
    {
      javascript:window.print();  
    })
  </script>
</body>
</html>
