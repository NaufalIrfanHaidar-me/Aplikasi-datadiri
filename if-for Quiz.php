<?php
        // Nama: Naufal Irfan Haidar
        // Kelas: XI - RPL 2

        // Membuat Pola Segitiga Mengarah Keatas
        $star=10;
        for( $a=$star;$a>0;$a--){
            for($i=1; $i<=$a; $i++){
               echo "&nbsp";
        }
        for($a1=$star;$a1>=$a;$a1--){
          echo"*";
        }
          echo"<br>";
         }
         echo "<hr>";

         // Membuat Pola Segitiga Rata Kiri
         $star=10;
         for($a=$star;$a>0;$a--){
              for($b=$star;$b>=$a;$b--){
                   echo "*";
               }
            echo "<br>";
        }
        echo "<hr>";

        // Membuat Pola Segitiga Rata Kanan
        $star=10;
        for($a=$star;$a>0;$a--){
               for($i=1; $i<=$a; $i++){
                   echo " &nbsp";
               }
               for($a1=$star;$a1>=$a;$a1--){
                   echo"*";
               }
           echo"<br>";
        }
        echo "<hr>";

        // Membuat Pola Segitiga Mengarah Kebawah
        $star=10;
        for($a=1; $a<=$star; $a++){
              for($b=1; $b<=$a; $b++){
                   echo "&nbsp";
         }
              for($c=$star; $c>=$a; $c-=1){
                    echo "*";
            }
            echo "<br>";
        }
        echo "<hr>";

        // Membuat Pola Segitiga Mengarah Kebawah Rata Kanan
        $star=10;
        for($a=1; $a<=$star; $a++){
             for($i=1; $i<=$a; $i++){
                   echo " &nbsp";
              }
              for($c=$star; $c>=$a; $c-=1){
                     echo "*";
              }
             echo "<br>";
        }
        echo "<hr>";

        // Membuat Pola Segitiga Mengarah Kebawah Rata Kiri
        $star=10;
        for($a=1; $a<=$star; $a++){
              for($c=$star; $c>=$a; $c-=1){
                     echo "*";
              }
               echo "<br>";
        }
        echo "<hr>";

        // Membuat Pola Belah Ketupat
        $star=10;
    for($a=1; $a<=$star; $a++){
          for($b=$star; $b>=$a; $b-=1){
                 echo "&nbsp";
          }
          for($c=1; $c<=$a; $c++){
                 echo "*";
          }
                echo "<br>";
                }
                for($a=1; $a<=$star; $a++){
                for($b=1; $b<=$a; $b++){
                     echo "&nbsp";
                }
                for($c=$star; $c>=$a; $c-=1){
                     echo "*";
                }
         echo "<br>";
         }
         echo "<hr>";

         //  Angka 1 sampai 5 berurutan ke kiri
         for ($i=1;$i<=5;$i++){
            for ($j=$i;$j>=1;$j--){
                echo $j;
            }
            echo "<br>";
        }
?>