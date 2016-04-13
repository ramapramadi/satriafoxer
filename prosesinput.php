<?php
include"include/koneksi.php";
$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
mysql_query("insert into komentar values('','$tanggal','$nama','$email','$komentar')") or die (mysql_error());
echo'<META HTTP-EQUIV="Refresh" Content="0;URL=index.php">';
?>