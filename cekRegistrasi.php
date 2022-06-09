<?php
//Include file koneksi ke database
include "connect.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["uname"];
$password=md5($_POST["pwd"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="insert into user (username,password) values
		('$username','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($db,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>