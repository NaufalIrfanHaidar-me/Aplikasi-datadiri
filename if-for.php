<?php

    //Percabangan (IF ELSE)
    $nilai = 75;
    echo "Nilai kamu = $nilai <br>";
    echo "Maka status Kamu = ";

    if ($nilai > 75) {
            echo "Lulus Beneran";
    } else if ($nilai == 75){
            echo "Lulus KKM";
    } else {
            echo "Tidak Lulus";
    }

    echo "<hr>";

    $nilai_web = 78;
    $nilai_pbo = 80;
    echo "Nilai web Kamu = $nilai_web <br>";
    echo "Nilai PBO Kamu = $nilai_pbo <br>";
    echo "Nilai Kelulusan Kamu = ";
    if ($nilai_web >= 80 AND $nilai_pbo >= 80) {
            echo "Lulus Nilai Produktif 2 Mapel";
    } else if ($nilai_web >= 80 OR $nilai_pbo >= 80) {
            echo "Lulus Nilai Produktif Salah Satu Mapel";
    } else {
            echo "Tidak lulus Nilai Produktif";
    }

    echo "<hr>";

    //Perulangan (while, Do while, For)
    $i = 1;
    while ($i < 5){
            echo "Hello World ! ke - $i <br>";
            $i++; //Assigment +1
    }

    echo "<hr>";

    $no = 1;
    do{
        echo "Halo Dunia ! <br>";
        $no++;
    } while ($no < 5);

    echo "<hr>";

    $nomor = 1;
    for ($nomor; $nomor < 5; $nomor++ ) {
        echo "Kamsamidha ! <br>";
    }

    echo "<hr>";

    //praktikum IF Didalam FOR
    echo "Case 1 = Menentukan Angka Ganjil & Genap <br>";
    $angka = 1;
    for ($angka; $angka <= 10; $angka++){
        if ($angka % 2 == 0) {
            echo "$angka = Bilangan Genap <br>";
        } else {
            echo "$angka = Bilangan Ganjil <br>";
        }
    }
    echo "<hr>";
    //Praktikum  FOR Didalam FOR
    echo "Case 2 = Angka Berulang <br>";
    $x = 1;
    $y = 1;
    for ($x; $x <= 9; $x++){
        for ($y = $x; $y <= 9; $y++){
            echo $x;
        }   
            echo "<br>";
    }
?>