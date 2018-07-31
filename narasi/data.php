<?php 
//include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<div class="container">
		<div class="content">
			<h2><font color="#000000">REPOSITORI DATA GEMPABUMI</h2>
			<hr />
			<!-- bagian ini untuk memfilter data berdasarkan fakultas -->
			<form method="get">
				<div class="form-row">
				<div class="form-group col-md-2">
					<select name="filter_nama" class="form-control" onchange="form.submit()">
						<option value="0"> Filter Petugas </option>
						<?php $filter_nama = (isset($_GET['filter_nama']) ? strtolower($_GET['filter_nama']) : NULL);  ?>
						<option value="pande" <?php if(filter_nama == 'pande'){ echo 'selected'; } ?>> Pande </option>
						<option value="ihsan" <?php if($filter_nama == 'ihsan'){ echo 'selected'; } ?>> Ihsan </option>
                        <option value="ricko" <?php if($filter_nama == 'ricko'){ echo 'selected'; } ?>> Ricko </option>
						<option value="rian" <?php if($filter_nama == 'rian'){ echo 'selected'; } ?>> Rian </option>
						<option value="rizqa" <?php if($filter_nama == 'rizqa'){ echo 'selected'; } ?>> Rizqa </option>
						<option value="witra" <?php if($filter_nama == 'witra'){ echo 'selected'; } ?>> Witra </option>
						<option value="satria" <?php if($filter_nama == 'satria'){ echo 'selected'; } ?>> Satria </option>
					</select>
				</div>
			</form> <!-- end filter -->
		
			<!-- memulai tabel responsive -->
			<form class="form-inline " method="get">
				<div class="form-group mx-sm-3 mb-3">
					<select name="filter_stasiun" class="form-control" onchange="form.submit()">
						<option value="0">Filter Stasiun</option>
						<?php $filter_stasiun = (isset($_GET['filter_stasiun']) ? strtolower($_GET['filter_stasiun']) : NULL);  ?>
						<option value="BMKG-PGR III" <?php if($filter_stasiun == 'BMKG-PGR III'){ echo 'selected'; } ?>>BMKG-PGR III</option>
						<option value="BMKG-DNP" <?php if($filter_stasiun == 'BMKG-DNP'){ echo 'selected'; } ?>>BMKG-DNP</option>
                        <option value="BMKG-KHK" <?php if($filter_stasiun == 'BMKG-KHK'){ echo 'selected'; } ?>>BMKG-KHK</option>
						</select>
				</div>
			</form> <!-- end filter -->
			<br />	
			<!-- memulai tabel responsive -->
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>OT</th>
						<th>Lat</th>
						<th>Long</th>
						<th>Mag</th>
						<th>Kedalaman</th>
						<th>Lokasi</th>
						<th>Stasiun</th>
						<th>Keterangan</th>
						<th>Peta Guncangan</th>
					</tr>
					
					<?php
					if($filter_nama){
						$sql = mysqli_query($koneksi, "SELECT * FROM tb_narasi WHERE Petugas='$filter_nama' ORDER BY Petugas ASC"); // query jika filter dipilih
					}elseif ($filter_stasiun){ 
						$sql = mysqli_query($koneksi, "SELECT * FROM tb_narasi WHERE Stasiun='$filter_stasiun' ORDER BY Stasiun ASC"); // query jika filter dipilih
					}else{
						$sql = mysqli_query($koneksi, "SELECT * FROM tb_narasi ORDER BY Tanggal ASC"); // jika tidak ada filter maka tampilkan semua entri
					}
					if(mysqli_num_rows($sql) == 0){ 
						echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
					}else{ // jika terdapat entri maka tampilkan datanya
						$no = 1; // mewakili data dari nomor 1
						while($row = mysqli_fetch_assoc($sql)){ // fetch query yang sesuai ke dalam array
							echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$row['Tanggal'].'</td>
								<td>'.$row['OT'].'</td>
								<td>'.$row['Lat'].'</td>
								<td>'.$row['Bujur'].'</td>
								<td>'.$row['Mag'].'</td>
								<td>'.$row['Kedalaman'].'</td>
								<td>'.$row['Lokasi'].'</td>
								<td>'.$row['Stasiun'].'</td>
								<td>'.$row['Keterangan'].'</td>
								<td>
									<a href="SIG.php?Keterangan='.$row['Keterangan'].'" class="btn btn-info" role="button">SIG</a>
									<a href="C:/Users/Sanglah_Petir/Dowloads/20170324 1550.png" class="btn btn-success" role="button">MMI</a>
									<a href="Surat.php?Keterangan='.$row['Keterangan'].'" class="btn btn-warning" role="button">Report</a>
								</td>
							</tr>
							';
							$no++; // mewakili data kedua dan seterusnya
						}
					}
					?>
				</table>
			</div> <!-- /.table-responsive -->
		</div> <!-- /.content -->
	</div> <!-- /.container -->
