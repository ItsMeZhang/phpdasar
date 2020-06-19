<?php //ini adalah tag php

// Pertemuan 2- PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

//print function
//echo "Ivan Chandra Sutanto";
//print "Ivan Chandra Sutanto";
//print_r("Ivan Chandra Sutanto");

//print kata sekaligus menampilkan informasi jumlah kata dan tipe data
//var_dump("Ivan Chandra Sutanto");

//print dengan boolean
//echo true; // menghasilkan 1
//echo false; // isinya kosong

//menggunakan print dengan simbol ' (petik satu) dan " (petik dua)
//echo "Jum'at"; //ketika print kata dengan simbol ' (petik satu)
//echo 'Jum'at'; //error karena hanya mengenali kata 'jum'

// penulisan sintaks php
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

//Variable dan Tipe Data
//Variable -> Menampung Nilai
//nama variable tidak boleh ada spasi
//Menggunakan tanda $
// tidak memerlukan tipe data dalam mendefinisikan sebuah variable
//aturan -> tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Ivan Chandra Sutanto";

//interpolasi -> dapat membaca variable yang telah di definisikan sebelumnya, di indiksikan dengan pemakaian simbol kutip dua (")
//echo "Hai tuanku 1, $nama </br>"; // mencetak Ivan Chandra Sutanto
//echo 'Hai tuanku 2, $nama'; //hanya mencetak $nama


//operator
//aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// operator penggabung string / concatenation / concat
// tindai dengan titik (.)

//$nama_depan = "Ivan Chandra";
//$nama_belakang = "Sutanto";
//echo $nama_depan . " " . $nama_belakang; //Mekanisme Cetak Nama Depan -> Spasi -> Nama Belakang

//Assignment
// ditandai dengan simbol =, +=, -=, *=, /=, %=, .=
//misal
//$x = 1;
//$x -=5;
//echo $x; //hasilnya -4

//contoh lain
//$nama = "Ivan Chandra"
//$nama .= " ";
//$nama .= "Sutanto";
//echo $nama //hasilnya Ivan Chandra Sutanto

//Perbandingan
// <, >, <=, >=, ==, !=
//var_dump(1<5); //hasilnya true
//var_dump(1>5); //hasilnya false
//var_dump(1==5); //hasilnya false
//var_dump(1=="1"); //hasilnya true, karena operator perbandingan tidak mengecek tipe data, hanya membaca nilainya saja sama atau tidak

//kecuali ingin mengecek tipe data kita dapat memakai operator identifier
// ditandai dengan simbol ===, !===
//var_dump(1==="1");

//Logika
//&&, ||, !
//$x = 30;
//var_dump($x < 20 && $x % 2 == 0) //jika menggunakan operator && (AND) mengharuskan kedua kondisi memenuhi, maka TRUE. Jika salah satu tidak memenuhi, maka FALSE
//var_dump($x < 20 || $x % 2 == 0) //jika menggunakan operator || (OR) bila hanya 1 kondisi yang memenuhi maka TRUE. bila tidak memenuhi kedua kondisi maka FALSE

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- PHP di dalam HTML -->
    <h1>Halo, Selamat Datang <?php echo $nama;?></h1>
    <p><?php echo "Paragraf 1"; ?> </p>

    <!-- HTML di dalam PHP -->
    <?php
    echo "<h1>Halo, Selamat Datang Ivan Chandra Sutanto</h1>"
    ?>
</body>
</html>
