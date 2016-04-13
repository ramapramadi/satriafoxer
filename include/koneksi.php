<?php
$host="localhost";
$user="root";
$pass="";
$db="bps";
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

if($koneksi) { //echo "berhasil koneksi";
}else{
echo "Gagal Koneksi";
}
?>