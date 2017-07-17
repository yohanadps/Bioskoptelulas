
<?php
	include "connection.php";
	include "admin2.php";
	/*$harga = oci_parse($conn, "select KODE_FILM,HARGA_FILM from FILM");
	oci_execute($harga);*/
	//oci_fetch_all($harga, $exec_harga);

	$jumlah_tayang = oci_parse($conn,"select F.KODE_FILM,LP.JUMLAH_TAYANG,F.HARGA_FILM from LAPORAN_PENGELUARAN LP,FILM F where LP.KODE_FILM = F.KODE_FILM");
	oci_execute($jumlah_tayang);
	//oci_fetch_all($jumlah_tayang, $exec_jumlah_tayang);

	//while($exec_harga = oci_fetch_array(statement))
?>

	<div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <h3 align="center">Laporan Pengeluaran</h3>
            <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th style="text-align:center;">Kode FIlm</th>
                  <th style="text-align:center;">Jumlah Tayang</th>
                  <th style="text-align:center;">Harga Film</th>
                  <th style="text-align:center;">Total Bayar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while ($exec_jumlah_tayang= oci_fetch_array($jumlah_tayang))
                  	{?>
                    <tr>
                    	<td> <?php echo $exec_jumlah_tayang[0]; ?></td>
                    	<td> <?php echo $exec_jumlah_tayang[1]; ?></td>
                    	<td> <?php echo $exec_jumlah_tayang[2]; ?></td>
                    	<td> <?php echo $exec_jumlah_tayang[1]*$exec_jumlah_tayang[2]; ?></td>
                    </tr>
                   <?php
                 }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
