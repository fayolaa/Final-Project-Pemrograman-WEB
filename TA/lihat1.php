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
<br><br><br>
	            <table class="table table-striped table-bordered table-hover dataTables-example" >
	            	<thead class='alert-success'>
	            		<tr>
                        <th><center>Nama </center></th>
                        <th><center>NIK</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>No.HP</center></th>
                        <th><center>E-Mail</center></th>
                        <th ><center>Foto</center></th>

                    </tr>
                    </thead>
                    <tbody>
<?php
error_reporting(0);
$fp = fopen("pendatarpasport.txt","r");//fungsi dari fopen adalah untuk mengambil atau membuka data pada txt dan r+ artinya pointer dimulai dari file yang paling awal
while ($isi = fgets($fp,80))//pada bagian ini dilakukan perulangan sedangkan fungsi gets digunakan untuk mengambil data
{
$pisah = explode("|",$isi);//bagian ini menggunakan tanda pemisah | karena bagian ini merupakan bagian pemisah dari data data yang ada 
echo"<tr>";//bagian digunakan untuk membuat baris dalam suatu tabel
echo "<td><center> $pisah[0]</center></td>";//menampilkan data di atas yang  berupa nama yang berada pada index ke 0
echo "<td><center> $pisah[1]</center></td>";//menampilkan data di atas yang  berupa nik yang berada pada index ke 1
echo "<td><center> $pisah[2]</center></td>";//menampilkan data di atas yang  berupa alamat yang berada pada index ke 2
echo "<td><center> $pisah[3]</center></td>";//menampilkan data di atas yang  berupa no.hp yang berada pada index ke 3
echo "<td><center> $pisah[4]</center></td>";//menampilkan data di atas yang  berupa email yang berada pada index ke 4
echo "<td><center><img src=gambar/$pisah[5] width=200 height=200 ></td></tr>
<td>&nbsp;<hr></center></td><td>&nbsp;<hr></td>";//menampilkan  di atas berupa foto yang berada pada index ke 5
}
?>
</tbody>
</table>
</div>

<div class="footer">
		
</div>

</body>
</html>