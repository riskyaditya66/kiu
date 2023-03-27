<?php 
mysql_connect("localhost", "root", "");
mysql_select_db("agun");

isset($_REQUEST['bpesan']);
$nama = $_REQUEST['nama'];
echo $nama;

?>