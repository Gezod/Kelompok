<?php 
include_once "connection2.php";

function autonumber($id_terakhir, $panjang_kode, $panjang_angka) {
 
    // mengambil nilai kode ex: KNS0015 hasil KNS
    $kode = substr($id_terakhir, 0, $panjang_kode);
 
    // mengambil nilai angka
    // ex: KNS0015 hasilnya 0015
    $angka = substr($id_terakhir, $panjang_kode, $panjang_angka);
 
    //menambahkan nilai angka dengan 1
    // kemudian memberikan string 0 agar panjang string angka menjadi 4
    // ex: angka baru = 6 maka ditambahkan strig 0 tiga kali
    // sehingga menjadi 0006
    $angka_baru = str_repeat("0", $panjang_angka - strlen($angka+1)).($angka+1);
 
    // menggabungkan kode dengan nilang angka baru
    $id_baru = $kode.$angka_baru;
 
    return $id_baru;
}

$sql = $connection2->prepare("SELECT * FROM pengurus ORDER BY no_ktp DESC");
$sql->execute();
// $hasil->fetch(PDO::FETCH_LAZY);
$tampil = $sql->fetch();

$hasil = autonumber($tampil['no_ktp'], 1, 3); // hasil D002


if (isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['jabatan'] ) && isset($_POST['jabat_sejak']) && isset($_POST['jabat_sampai'])) {
	$hehe = $connection2->prepare("INSERT INTO pengurus(no_ktp, nama, alamat, jabatan, jabat_sejak, jabat_sampai) VALUES(?, ?, ?, ?,?,?)");
	$hehe->execute([$hasil, $_POST['nama'], $_POST['alamat'], $_POST['jabatan'], $_POST['jabat_sejak'], $_POST['jabat_sampai']]);

	if ($hehe) {
		echo "gagal input";
	}
	header("Location: /Magang/index2.php");
}else{
	echo "form tidak boleh kosong";
}



 ?>