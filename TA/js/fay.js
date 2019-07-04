
function sayHello(){// membuat fungsi pop up
    console.log("Hai selamat datang jangan lupa bahagia");//untuk menampilkan kata hai selamat datang jangan lupa bahagia
}

sayHello() // memanggil fungsi 
  var sayHello = () => alert("Hai selamat datang jangan lupa bahagia");// maka akan menghasilkan Hai selamat datang jangan lupa bahagia

function cari() {
var kata = document.formcari.keyword.value;//menampung data input sebelumnya dalam variabel data
var hasil = "http://www.google.com/search?q=" + kata ;//menampung link google ke dalam variabel yang ada
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')//membuka halaman/jendela baru yang isinya menampilkan kata kunci yang dicari 
}

function date(){
	var datee = new Date();//menampung tanggal yang ada
	document.getElementById("fay").innerHTML = datee;//untuk menampilkan tanggal
}

function myFunction(){
                alert('Data anda tersimpan');//untuk menampilkan pop up yang akan muncul dan bertulisan data anda telah tersimpan
                document.location.href = "proses.php";//berpindaj ke halaman proses
              }

