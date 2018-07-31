<?php
session_start();
?>
<?php 
include("koneksi.php");
$nama=$_SESSION['User'];
//echo $nama;
$query = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE User='$nama'");
$roww = mysqli_fetch_assoc($query);
$namalengkap=$roww['Nama'];
$nip=$roww['NIP'];
?>
<?php
    include("kop2.php");
	include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
	$sql = mysqli_query($koneksi, "SELECT * FROM tb_penjelasan WHERE kondisi='Aktif'");
	$row = mysqli_fetch_assoc($sql);
	function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}
	?>
        <center>
	<table align="center" style="border-collapse:collapse; margin-top:8mm;" cellpadding="2px" width="600px" border="0">
    	<tr>
        	<td colspan="3"><center><b><u>NARASI GEMPABUMI</u></b></center></td>
    	</tr>
		<tr>
        	<td colspan="3"><center><b><u> </u></b></center></td>
    	</tr>
		
		<tr>
        	 <td align= "left" > <?php echo nl2br(htmlspecialchars($row['narasi']))  ?> </td> 
    	</tr>
        </table>
		<table align="center" style="border-collapse:collapse;" cellpadding="2px" width="320px" border="1">
		<tr>
			<td align= "center"><img width='305' height='370' src="imagessig/<?php echo $row['sig'] ?>"></td>
    	</tr>
		</table>
		
    </table><br>
    
<footer></footer></div>    
    </div>

</div>
