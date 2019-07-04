<html>
<head>
	<title> FINAL PROJECT </title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<script type="text/javascript" src="js/fay.js"></script>
</head>
<body>
<div class="header">
	
</div>

<br><br><br>
<div class="menubar">
		<ul>
			<li><a href="index.html"><b>Home</b></a></li>
			<li><a href="cari.html"><b>Search</b></a></li>
			<li><a href="lihat.php"><b>Lihat Pengunjung</P></b></a></li>
		</ul>
	</div>
<div class="menu1">
	<ul>
		<center>
			<br>
			<li><a href="biodata.html"><b>Profil</b></a></li>
			<li><a href="isidata.html"><b>Isi Data</b></a></li>
			<li><a href="lihat1.php"><b>Lihat Data</b></a></li>
		</center>
	</ul>
</div>

<div class="menu2">	
<center>
<br><br><br><br><br>				
<?php
$filecounter="counter.txt";//digunakan untuk menampung counter.txt
$fl=fopen($filecounter,"r+");//fungsi dari fopen adalah untuk mengambil atau membuka data pada txt dan r+ artinya pointer awal dari file yang paling awal
$hit=fread($fl,filesize($filecounter));//fread digunakan untuk membaca isi dari file yang sudah dibuka 
echo("<table height = 100 width=1000 align=center border=2 cellspacing=1 cellpadding=0
bordercolor=black><tr>");//merupakan tabel yang mengatur ukuran serta border agar tampilan lebih rapih
echo("<td width=250 valign=center align=center>");
echo("<font face=arial size=4 color=black><b>");//digunakan untuk ngatur teks yang ada
echo("Anda pengunjung yang ke: ");//menampilkan tulisan anda pengnjung ke
echo($hit);
echo("</b></font>");//menutup tag b dan font
echo("</td></td>");//menutup tag td
echo("</tr></table>");//menutup tag tr dan tabel
fclose($fl);//digunakan untuk menutup file
$fl=fopen($filecounter,"w+");//digunakan untuk mengambil data pada file txt dan fungsi w digunakan untuk menulis data jika tidak ada
$hit=$hit+1;//perintah untuk menambah satu pada data
fwrite($fl,$hit,strlen($hit));//untuk menulis data ke file
fclose($fl);//untuk menutup file
?>
</center>
</div>
<div class="footer">
		
</div>

</body>
</html>