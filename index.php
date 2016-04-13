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
<marquee>SELAMAT DATANG DI WEBSITE BADAN PUSAT STATISTIK PROVINSI SUMATERA UTARA</marquee>
<div class="wrap">




<div class="sidebar">
<p>
Ingin Mengetahui Makna Lambang BPS? <br> <img src="111.jpg" class="foto"><br>
Silahkan lihat di Identitas>>Makna Logo...</p>
<hr noshade>
<p>
Bagaimana sih Sejarah BPS? <br> <img src="111.jpg" class="foto"><br>
Yuk liat di Identitas>>Sejarah...</p>
</div>
<div class="content">
<h1>BADAN PUSAT STATISTIK PROVINSI SUMATERA UTARA</h1>
<p align="justify">Badan Pusat Statistik adalah lembaga Pemerintah Non Kementerian yang bertanggung jawab langsung kepada Presiden. Sebelumnya BPS merupakan Biro Pusat Statistik yang di bentuk berdasarkan UU Nomor 6 Tahun 1960 tentang Sensusdan UU Nomor 7 Tahun 1960 tentang Statistik. Sebagai pengganti kedua UU tersebut ditetapkan UU Nomor 16 tahun 1997 tentang statistic. Berdasarkan ini yang ditindaklanjuti dengan peraturan perundangan di bawahnya, secara formal Biro Pusat Statistik diganti dengan Badan Pusat Statistik . Materi yang merupakan muatan baru dalam UU Nomor 16 tahun 1997, antara lain:
<br><br>
<br><li>Jenis statistik berdasarkan tujuan pemanfaatannya terdiri atas statistik dasar yang sepenuhnya diselenggarakan oleh BPS, statistik sektoral yang diselenggarakan oleh instansi Pemerintah secara mandiri atau bersama dengan BPS, serta statistic khusus yang diselenggarakan oleh lembaga, organisasi, perorangan dan unsure masyarakat lainnya secara mandiri atau bersama oleh BPS.</li>
<br><li>Hasil statistik Nasional yang andal, efektif dan efisien.</li>
<br><li>Dibentuknya Forum Masyarakat Statistik sebagai wadah untuk menampung aspirasi masyarakat statistic, yang berutgas memberikan saran dan pertimbangan kepada BPS. </li>
<br><br><br>
Berdasarkan undang-undang yang telah disebutkan diatas, peranan yang harus dijalankan oleh BPS adalah sebagai berikut:
<br><br><li>Menyediakan kebutuhan data bagi pemerintah dan masyarakat. Data ini didapatkan dari sensus atau survey yang dilakukan sendiri dan juga dari departemen atau lembaga pemrintah lainnya sebagai data sekunder. </li>
<br><li>Membangun kegiatan statistik di departemen,lembaga pemerintah atau institusi lainnya, dalam membangun sistem perstatistikan nasional.</li>
<br><li>Mengembangkan dan mempromosikan standar teknik dan metodologi statistic, dan menyediakan pelayanan kepada bidang pendidkan dan pelatihan statistik. </li>
<br><li>Membangun kerjasama dengan institusi internasional dan Negara lainnya untuk kepentingan perkembangan statistik Indonesia.</li>
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
<div class="footer">Copyright@ MAHYATI</div>
</body>
</html>