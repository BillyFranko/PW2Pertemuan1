<?php
//Variable Lokal
//Membuat Variable
$nama_depan = "Bill";
$namaDepan = "Bil";
$namaBelakang = "Fr";
$umur = 17;
$umurjuga = 17.23; //for float or double
$hadir = false;
$Salary = null;

//echo "Nama Lengkap : ". $nama_depan ." ".$namaBelakang ;
//echo "Nama Lengkap : $namaDepan $namaBelakang";
echo "Nama Lengkap : ${namaDepan} ${namaBelakang}<br>";
echo "Umur : $umur Tahun<br>";
$umur = 20+1;
//echo "Umur Sekarang : $umur Tahun";
unset($umur);
echo "Umur Sekarang : $umur Tahun<br>";

//Static Variable
define("TEMPATLAHIR", "Palembang");
echo "TempatLahir : " . TEMPATLAHIR;

//Variable Global
/*
Session -> $_SESSION['nama']
Cookie -> $_COOKIE['namacookie']
Post -> $_POST['npm]
Get -> $_GET['npm]
Server -> $_SERVER[]
*/
?>