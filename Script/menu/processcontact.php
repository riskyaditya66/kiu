<?php 
mysql_connect("localhost", "root", "");
mysql_select_db("agundb");

isset($_REQUEST['submit']);
$nama = $_REQUEST['nama'];
$email = $_REQUEST['email'];
$pesan = $_REQUEST['ppesan'];
$query = mysql_query("INSERT INTO pesan VALUES('', '$nama', '$email', '$pesan')");
if(query) {
?>

<div class="contact-kiri">
                <h1>Agun Adventure</h1>
                     Jl. Palmerah barat no.7-8 Jakarta barat, Indonesia<br>
                     Tel.02194011510 / 089691051014<br>
                     Email Info@agunadventure.com    
            </div>
            <div class="contact-kanan">
						<h2>Pesan Anda Berhasil Terkirim! Terima Kasih</h2>
</div>
<?php } 
else {
	echo "<h2>Pengiriman Pesan Gagal!</h2>";
}
?>