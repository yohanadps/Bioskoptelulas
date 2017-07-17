<?php
	include "connection.php";
	include "admin2.php";
	

	$pemasukan_tabel = oci_parse($conn,"SELECT EXTRACT (month from T.TGL_PEMBELIAN) as BULAN,EXTRACT (year from T.TGL_PEMBELIAN) as Tahun,J.HARGA,count(*) as jumlah
                                     from TRANSAKSI T,JADWAL J
                                    where T.NO_JADWAL = J.NO_JADWAL
                                    group by EXTRACT (month from TGL_PEMBELIAN),EXTRACT (year from T.TGL_PEMBELIAN),J.HARGA");
	oci_execute($pemasukan_tabel);

	
?>

	<div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <h3 align="center">Laporan Pemasukan</h3>
            <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align:center;">Bulan</th>
                  <th style="text-align:center;">Harga</th>
                  <th style="text-align:center;">Jumlah</th>
                  <th style="text-align:center;">Total Pemasukan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while ($exec_pemasukan= oci_fetch_array($pemasukan_tabel))
                  	{?>
                    <tr>
                    	<td> <?php echo $exec_pemasukan[0]."-".$exec_pemasukan[1] ; ?></td>
                    	<td> <?php echo $exec_pemasukan[2]; ?></td>
                    	<td> <?php echo $exec_pemasukan[3]; ?></td>
                    	<td> <?php echo $exec_pemasukan[2]*$exec_pemasukan[3]; ?></td>
                    </tr>
                   <?php
                 }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
