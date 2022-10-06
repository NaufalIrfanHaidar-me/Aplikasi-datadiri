<?php
    echo "
    <marquee>
        <h1>AGIL MUHAMMAD HAMZAH - SISWA</h1>
    </marquee>   
     ";

    // variabel
    $nama = "AGIL MUHAMMAD HAMZAH";
    $kelas = "XI RPL 2";
    $nilai = 99.99;

    echo "Nama : ". $nama;
    echo "<br>";
    echo "kelas : ". $kelas;
    echo "<br>";
    echo "Nilai : $nilai";

    // Oprator jumlah
    echo "<br><br>";
    $angka1 = 5;
    $angka2 = 10;

    $hasil = $angka1 + $angka2;
    echo "Hasil Dari Penjumlahan : $hasil";

    // Rumus Luas Segitiga
    echo "<br><br>";
    $alas = 8;
    $tinggi = 20;

    $rumus = 0.5 * $alas * $tinggi;
    echo "Hasil rumus : $rumus";

    // Rumus Lingkaran
    echo "<br><br>";
    $phi = 3.14; 
    $r = 7;

    $lingkaran = $phi * $r * $r;
    echo "Hasil Luas : $lingkaran";

    // Rumus Volum Balok
    echo "<br><br>";
    $p = 14 ;
    $l = 8;
    $t = 12;
     
    $volume_balok = $p * $l * $t;
    echo "Hasil Volume_Balok : $volume_balok";
?>