<?php 
mysql_connect("localhost", "root", "");
mysql_select_db("agundb");

isset($_REQUEST['submit']);
$nama = $_REQUEST['nama'];
echo $nama;

?>

<div class="contact-kiri">
                <h1>Agun Adventure</h1>
                     Jl. Palmerah barat no.7-8 Jakarta barat, Indonesia<br>
                     Tel.02194011510 / 089691051014<br>
                     Email Info@agunadventure.com    
            </div>
            <div class="contact-kanan">
                    <form action="index.php?page=processcontact" method="POST">
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
                                <td valign="top">Pesan</td>
                                <td valign="top">:</td>
                                <td><textarea class="pesanbox" name="ppesan"></textarea></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="submit" value="Kirim Pesan" name="submit" /></td>
                            </tr>
                        </table>
                    </form>
						
</div>