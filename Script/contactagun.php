<html>
    <head>
           <title>Contact Us - Agun Adventure</title>
           <link href="" rel="shortcut icon" />
           <link href="new.css" rel="stylesheet" type="text/css"> 
    </head>
    <body>
        <div class="header">
        </div>    
        <div class="selipan"> 
            <ul class="menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Info Gunung</a>
                            <ul>
                    <li><a href="kerinci.html">Gunung Kerinci</a></li>
                    <li><a href="raung.html">Gunung Raung</a></li>
                    <li><a href="bukit.html">Gunung Bukit Raya</a></li>
                    <li><a href="latimojong.html">Gunung Latimojong</a></li>
                    <li><a href="rinjani.html">Gunung Rinjani</a></li>
                    <li><a href="jaya.html">Gunung Jayawijaya</a></li>
                            </ul>	
                    </li>
                    
                    <li><a href="peraturan.html">Peraturan</a></li>
                    <li><a href="info.html">Tentang</a></li>
					<li><a href="booking.html">Booking tiket</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <div id="tempat">
            <div class="contact-kiri">
                <h1>Agun Adventure</h1>
                     Jl. Palmerah barat no.7-8 Jakarta barat, Indonesia<br>
                     Tel.02194011510 / 089691051014<br>
                     Email Info@agunadventure.com    
            </div>
            <div class="contact-kanan">
                    <form>
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><input type="text" name="nama"/></td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>:</td>
                                <td><input type="text" name="email"/></td>
                            </tr>
                            <tr>
                                <td>Pesan</td>
                                <td>:</td>
                                <td><textarea><input type="text" name="pesan" /></textarea></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="submit" value="Kirim Pesan" name="submit" /></td>
                            </tr>
                        </table>
                    </form>
					
					<?php
						if($_POST['submit'] !=""){
						$nama = $_POST['nama'] ;
						$NIM = $_POST['email'] ;
						$kelas = $_POST['pesan'];
						echo "
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>$nama</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>$email</td>
						</tr>
						<tr>
							<td>Pesan</td>
							<td>:</td>
							<td>$Pesan</td>
						</tr>";
						}	
					?>
					
            </div>
            <div class="clearer"><br><br></div>
                        <div id="footer-atas">
                <div class="footer-widget">
                    <img src="img/logo.png" style="width:280px;" alt="" />
                </div>
                <div class="footer-widget">
                    <h3>Temukan kami</h3>
                   <a href="http://twitter.com"><img src="img/social/twitter.png" class="social"></a>
                    <a href="http://facebook.com"><img src="img/social/facebook.png" class="social"></a>
                    <a href="http://tumblr.com"><img src="img/social/tumblr.png" class="social"></a>
                    <a href="http://instagram.com/rajaaaaw"><img src="img/social/instagram.png" class="social"></a>
                    <a href="http://youtube.com"><img src="img/social/youtube.png" class="social"></a> </div>
                <div class="footer-widget" style="margin:0; width:270px">
                    <h3>Alamat</h3>
                        Agun Adventure <br>
                        Jl. pal merah barat no.7-8 Jakarta barat, Indonesia<br>
                        Tel.021 - 94011510<br>
                        Email Info@agunadventure.com
                </div>
                
                <div class="clearer"></div>
            </div>
           <div class="footer-bawah">
               &copy; 2014 All Rights Reserved
           </div>
        </div>
        </body>
</html>