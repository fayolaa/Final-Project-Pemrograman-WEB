<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">

<div class="menu1">
	<ul>
		<a href="index.html">BACK";
	</ul>
</div>


<div class="menu2">
<center>
<br><br><br><br><br><br><br><br><br><br>
<?php
$fp = fopen("pendatarpasport.txt","a+");////fungsi dari fopen adalah untuk mengambil atau membuka data pada txt dan data yang ada tetap disimpan
$nama = $_POST['nama'];//digunakan untuk menyimpan data nama dan disimpan pada veriabel nama
echo "<tr></tr>";
$nik = $_POST['nik'];//digunakan untuk menyimpan data nik dan disimpan pada veriabel nik
$alamat = $_POST['alamat'];//digunakan untuk menyimpan data alamat dan disimpan pada veriabel alamat
$nohp = $_POST['nohp'];//digunakan untuk menyimpan data no hp dan disimpan pada veriabel nohp
$email = $_POST['email'];//digunakan untuk menyimpan data email dan disimpan pada veriabel email
$file = $_FILES["file"]["name"];//variabel yang digunakan untuk mengecek nama variabel untuk mengupload
$tmp_name = $_FILES["file"]["tmp_name"];//variabel yang digunakan untuk mengecek tempat variabel diupload
move_uploaded_file($tmp_name,"gambar/".$file);//mengupload file gambar dan disimpad pada file gambar

fputs($fp,"$nama|$nik|$alamat|$nohp|$email|$file\n");//memasukan/menulis semua file kedalam notepad
fclose($fp);//menutup data txt
echo "<br><br><br>";//memberi garis baru 
echo "<h2> Terima Kasih telah mendaftar </h2><br>";//output yang dihasilkan
?>

</center>
</div>

</body>
</html>