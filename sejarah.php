<html>
<head>
<title>Halaman Web Sederhana</title>
<link href="style/home.css" rel="stylesheet">
</head>
<body bgcolor=#191970>
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
<h1><center><marquee>::: SELAMAT DATANG DI WEBSITE BADAN PUSAT STATISTIK PROVINSI SUMATERA UTARA:::</marquee></h1><br>
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
<h1> Sejarah</h1>
<p align="justify">Badan pusat statistik (BPS) adlah lembaga negara non departemen.BPS melakukan kegiatan yang ditugaskan oleh pemeritah antara bidang pertanian, agrian, pertambangan, kependudukan, sosial, ketanakerjaan, keuangan, pendapatan, dan keagamaan. Selain hal- hal diatas BPS juga bertugas untuk melaksanakan koordinasi dilapangan, kegiatan statistik dari segenap instasi baik dipusat maupun daerah dengan tujuan mencegah dilakukannya pelerjaan yang serupa oleh dua atau lebih instasi, memajukan keseragaman dalam penggunaan defenisi, klafikasi dan ukuran- ukuran lainnya.

Setiap sepuluh tahun sekali, BPS menyelenggrakan sensus penduduk.Di samping itu, Bps juga melakukan pengumpulan data, menerbitkan publikasi statistik nasional maupun daerah, serta melakukan analisis data statistik yang digunakan dalam pengambilan kebijakan pemerintah. Bps juga terdapat disetiap provinsi, kabupaten dan kota diseluruh indonesia. Dinamakan perwakilan bps di dearah, karena bps merupakan instasi vertikal, yakni instasi pemerintahan pusat yang berada di daerah, sehingga bukan merupakan bagian dari instasi milik daerah, tudas lain bps di daerah adalah melakukan koordinasi dengan pemerintah daerah dalam rangka penyelenggaraan statistik regional.  Setiap sepuluh setahun sekali bps menyelenggarakan:

<li>Sensus penduduk (SP) yaitu pada setiap tahun berakhiran 0 (nol).</li>
<li>Sensus pertanian  (ST)  pada setiap tahun berakhiran       3 (tiga).</li>
<li>Sensus ekonomi   (SE) pada setiap tahun berakhiran          6 ( enam).</li>
</p> 

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

</div> 
<div class="footer">Copyright create by MAHYATI</div>
</body>
</html>