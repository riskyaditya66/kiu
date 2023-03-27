<?php 
mysql_connect("localhost", "root", "");
mysql_select_db("agundb");

isset($_REQUEST['bpesan']);
$nama = $_REQUEST['nama'];
echo $nama;

?>
            <div class="content-kiri"> 
					 <form action="index.php?page=processbooking" method="POST">
							<table class="booking_table">
								<tr>
									<th colspan="4">BOOKING PENDAKIAN</th>
								</tr>
								<tr>
									<td>Nama</td>
									<td colspan="3"><input type="text" name="nama"></td>
								</tr>
								<tr>
									<td>Gunung</td>
									<td colspan="3" size="3">
									<select name="kode">
										<option>--  -- </option>
										<option value="Latimojong">Gunung Latimojong</option>
										<option value="Rinjani">Gunung Rinjani</option>
										<option value="Raung">Gunung Raung</option>
										<option value="Bukit Raya">Gunung Bukit Raya</option>
										<option value="Jawa Wijaya / Cartens">Gunung Jawa wijaya / Cartens</option>
										<option value="Kerinci">Gunung Kerinci</option>
									</select>
									</td>
								</tr>
								<tr>
									<td>Jumlah Pendaki</td>
									<td colspan="3"><input style="width:30px !important;" type="text" name="jumlah">&nbsp;pendaki</td>
								</tr>
								<tr>
									<td>Tanggal pendakian</td>
									<td><input type="text" name="tgl_naik"></td>
									<td><center>Hingga</center></td>
									<td><input type="text" name="tgl_turun"></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td colspan="3"><input type="text" name="alamat"></td>
								</tr>
								<tr>
									<td>Email</td>
									<td colspan="3"><input type="text" name="email"></td>
								</tr>
								<tr>
									<td colspan="4" align="center"><input type="checkbox" style="width:5px !important;">Saya Menyetujui Syarat & Ketentuan yang Berlaku</td>
								</tr>
								<tr>
									<td colspan="4" align="center"><input class="btn_booking" type="submit" name="bpesan" value="PESAN">
									<input class="btn_booking" type="reset" name="bbatal" value="BATAL"></td>
								</tr>
							</table>
						</form>
