<?php 
mysql_connect("localhost", "root", "");
mysql_select_db("agundb");

isset($_REQUEST['bpesan']);
$nama = $_REQUEST['nama'];
$gunung = $_REQUEST['kode'];
$pendaki = $_REQUEST['jumlah'];
$tgl_naik = $_REQUEST['tgl_naik'];
$tgl_turun = $_REQUEST['tgl_turun'];
$alamat = $_REQUEST['alamat'];
$email = $_REQUEST['email'];

$query = mysql_query("INSERT INTO booking VALUES('', '$nama', '$alamat', '$email', '$pendaki', '$tgl_naik', '$tgl_turun', '$gunung')");
if(query) {
?>
<h2>Booking Anda Berhasil!</h2>
<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $nama; ?></td>
			
		</tr>
		<tr>
			<td>Gunung</td>
			<td>:</td>
			<td><?php echo $gunung; ?></td>
			
		</tr>
		<tr>
			<td>Jumlah Pendaki</td>
			<td>:</td>
			<td><?php echo $pendaki; ?></td>
		</tr>
		<tr>
			<td>Tanggal Pendakian</td>
			<td>:</td>
			<td><?php echo $tgl_naik; ?></td>
		</tr>
		<tr>
			<td>Hingga</td>
			<td>:</td>
			<td><?php echo $tgl_turun; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $alamat; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $email; ?></td>
		</tr>
		
</table>
<?php } 
else {
	echo "<h2>Booking Gagal!</h2>";
}
?>