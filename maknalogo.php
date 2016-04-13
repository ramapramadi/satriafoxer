<html>
<head>
<title>Halaman Web Sederhana</title>

<link href="style/home.css" rel="stylesheet">
</head>
<body bgcolor=#00FF7F>
<header class="header"><img src="111.jpg" width="400px">
<p class="alamat">Jl.Asrama No. 179. Telp. (061) 845 2343  Fax (061) 845 2773 Kec.Medan Helvetia Kab./Kota. Medan</p>
</header>
<div class="fixed">
<div class="main">
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="organisasi.php">Identitas</a>
<ul>
<li><a href="organisasi.php">Struktur Organisasi</a></li>
<li><a href="misi.php">Visi Misi</a></li>
<li><a href="sejarah.php">Sejarah</a></li>
<li><a href="maknalogo.php">Makna Logo</a></li>
</ul></li>



<li><a href="kontak.php">Contact Us</a></li>
<li><a href="aku.php">About Me</a></li>

</ul>
</nav>
</div>
</div>
<h1><center><marquee>::: WEBSITE BADAN PUSAT STATISTIK PROVINSI SUMATERA UTARA:::</marquee></h1><br>
<div class="wrap">

<div class="sidebar">
<p>
Ingin Mengetahui Makna Lambang BPS? <br> <img src="111.jpg" class="foto"><br>
Silahkan lihat di Identitas>>Makna Logo...</p>
<hr noshade>
<p>
Ingin melihat Video serta Foto-foto Siswa PSG di BPS? <br> <img src="22.jpg" class="foto"><br>
Come to Gallery...</p>
</div>


<div class="content">
<h1 align="center">
Badan Pusat Statistik<br><img src="111.jpg"> </h1>
<p align="justify"> Logo ini terdiri dari empat warna yaitu, orange, kuning, hitam dan merah.Warna orange bermakna kegiatan ekonomi yang semarak.Sebuah artuasisme meyambut hajatan besar sepuluh tahunan dalam bidang ekonomi dan diharapkan dapat dirasakan oleh seluruh masyarakat Indonesia.
<br><br>
Warna kuning dipakai untuk menarik perhatian setiap orang yang melihat dan mudah diingat. Sementara warna hitam melambangkan kekuatan dan determinasi untuk menghasilkan data statistik bidang ekonomi yang sangat beragam,hasil dari penyusunan dengan metodologi terkini dan menghasilkan berbagai masukan sehingga hasilnya menjadi data statistic ekonomi Indonesia untuk dasar perencanaan dan evaluasi kebijakan pemerintah, pengusaha dan masyarakat.
<br><br>
Terakhir, warna merah menggambarkan semangat untuk menghasilkan data akurat dan terpercaya melalui pelaksanaan SE2016. Semangat dan determinasi dari logo SE2016 inilah yang kita semua ingin masuk ke dalam jajaran BPS, tidak hanya dalam menyukseskan  SE2016 tapi juga di setiap kegiatan BPS lainnya.
<br></p> 
<form method=post>
<?php
include "include/koneksi.php";
?>
<h2 align="right"><b>Komentar</b></h2>
<hr/>
<?php
$view=mysql_query("select*from komentar order by tanggal asc");
while($row=mysql_fetch_array($view))
{?>
	<table class="table">
	<tr>
		<td>Tanggal</td>
		<td>:</td>
		<td><?php echo $row ['tanggal']; ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $row ['nama']; ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><?php echo $row ['email']; ?></td>
	</tr>
	<tr>
		<td>Komentar</td>
		<td>:</td>
		<td><?php echo $row ['komentar']; ?></td>
	</tr>
	
</table>
<br><br>
<?php
}?>

<form method="post" action="prosesinput.php">
	<table>
	<tr>
		<td>Tanggal</td>
		<td>:</td>
		<td><input type="text" name="tanggal"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="text" name="email"/></td>
	</tr>
	<tr>
		<td>Komentar</td>
		<td>:</td>
		<td><input type="textarea" name="komentar"/></td>
	</tr>

 <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" value="Kirim"/></td>
	  </tr>
</table>
</form>
 </div> <div class="footer">Copyright create by MAHYATI </div>
</body>
</html>
