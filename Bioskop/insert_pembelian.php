<?php
	include "connection.php";

	$nopembelian = $_POST['NO_PEMBELIAN'];
	$idmember = $_POST['ID_MEMBER'];
	$nojad = $_POST['NO_JADWAL'];
	$nk = $_POST['NO_KURSI'];
	$tglpem = $_POST['TGL_PEMBELIAN'];
	$harga = $_POST['HARGA'];

	$event = oci_parse($conn,"select * from EVENT where TANGGAL_MULAI <= to_date('".$tglpem."','DD-MM-YY') AND TANGGAL_AKHIR>= to_date('".$tglpem."','DD-MM-YY')");
	oci_execute($event);
	$exec_event = oci_fetch_array($event);

	$event = oci_parse($conn,"select * from EVENT where TANGGAL_MULAI <= to_date('".$tglpem."','DD-MM-YY') AND TANGGAL_AKHIR>= to_date('".$tglpem."','DD-MM-YY')");
	oci_execute($event);
	
	$hut_member = oci_parse($conn,"select EXTRACT(month FROM TGL_LAHIR),EXTRACT(day FROM TGL_LAHIR) from MEMBER where ID_MEMBER = '".$idmember."'  ");
	oci_execute($hut_member);
	$exec_hut_member = oci_fetch_array($hut_member);

	$event_hut_1=0;

	if ($exec_hut_member[0] == $tglpem[3].$tglpem[4] && $exec_hut_member[1] == $tglpem[0].$tglpem[1])
	{
		$event_hut_1=1;
	}

	if ($event_hut_1==1)
	{
		$harga = $harga - ($harga * 25/100);
	}

	if ($exec_event = oci_fetch_array($event))
	{
		$harga = $harga - ( $harga * $exec_event[4]/100);
	}

	$update_kursi = oci_parse($conn, "update STATUS_BANGKU set STATUS = 'BOOKED' where NO_JADWAL='".$nojad."' AND NO_KURSI='".$nk."' ");
	oci_execute($update_kursi);

	$query = oci_parse($conn, "insert into TRANSAKSI values ('".$nopembelian."','".$idmember."','".$nojad."','".$nk."',TO_DATE('".$tglpem."','dd-mm-yy') ,'".$exec_event[0]."' , ".$harga." )");
	$exec_query = oci_execute($query);

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
  <h1><center>BIOSKOP TELULAS</center></h1>
  <h2>Bukti Transaksi</h2>
  <form class="form-horizontal" role="form" class="form" action = "index.php">
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
                          	<h4>ID Transaksi&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;&emsp;&emsp;&emsp;: <?php echo $nopembelian?></h4>
                            <h4>ID MEMBER&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $idmember?></h4>
                            <h4>NO JADWAL&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:<?php echo $nojad?></h4>
                            <h4>NO KURSI&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: <?php echo $nk?></h4>
                            <h4>TANGGAL PEMBELIAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $tglpem?></h4>
                            <h4>PROMO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $exec_event[1]?></h4>
                            <h4>DISKON&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $exec_event[4]/100?></h4>
                            <?php
                            $diskon_ultah = 0;
                            if ($exec_hut_member[0] == $tglpem[3].$tglpem[4] && $exec_hut_member[1] == $tglpem[0].$tglpem[1])
							{
								$diskon_ultah=25;
							}
                        	?>
                        	<h4>DISKON ULANG TAHUN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $diskon_ultah."%"?></h4>
                          	<h4>HARGA TOTAL&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $harga?></h4>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type = "submit" class="btn btn-success btn-block" href = "index.php">Home </button>
            <div class="col-md-10"></div>
        </div>
\
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

<?php
	/*if(!$exec_query)
	{
		header("Location:pembelian.php?status=gagal");
		
	}
	else
	{
		header("Location:pembelian.php?status=ok");	
	}*/
	
?>
