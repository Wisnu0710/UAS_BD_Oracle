<!DOCTYPE html>
<html>
<?php include'cetak_excel.php'; ?>
<head>
	<title>CETAK Data</title>
</head>
<body>
<h3><center>Laporan Penjualan Apotek Mawar</center></h3>
			 <br>
			  
			  <br><br>
          <!-- Row -->
          <div class="row">
		  
           
            <!-- DataTable with Hover -->
          <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Laporan</h4>
                  <p class="card-category">===================</p>
                  <p class="card-category">Data Pembelian Suplier</p>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID PESANAN
                        </th>
                        <th>
                          STOK
                        </th>
                        <th>
                          TGL KADARLUASA
                        </th>
                        <th>
                          JENIS
                        </th>
                        <th>
                          NAMA OBAT
                        </th>
                        <th>
                          Opsi
                        </th>
                      </thead>
                      <tbody>
                        <?php 
    include 'koneksi.php';
    $stid = oci_parse($con, 'SELECT * from laporan');

    oci_execute($stid);

    while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
      ?>
                        <tr>
                          <td>
                            <?php echo $d['ID_PESANAN']; ?>
                          </td>
                          <td>
                            <?php echo $d['STOK']; ?>
                          </td>                          
                          <td>
                            <?php echo $d['TGL_KADARLUASA']; ?>
                          </td>
                          <td>
                            <?php echo $d['JENIS']; ?>
                          </td>
                          <td>
                            <?php echo $d['NAMA_OBAT']; ?>
                          </td>                
                      </tr>                                             
                    </tbody>
					 <?php
						$no++;
						}
						
					?>
                  </table>
                </div>
              </div>
            </div>
          </div>
 <!-- Row -->
          <div class="row">
            <div class="col-lg-6">
              <!-- Popover basic -->
              <div class="card mb-4">
               
                <div class="card-body">
                 
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Dismiss on next click -->
              <div class="card mb-4">
                
                                <div class="card-body">
                 <center>Bekasi, 20 Januari 2022</center>
							<b><center>Manager Toko</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<b><center>Wisnu Dicky  </b></center>
                </div>
              </div>
            </div>
	
 
	<script>
		window.print();
	</script>
 
</body>
</html>