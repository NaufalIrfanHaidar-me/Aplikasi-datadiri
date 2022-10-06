<form action="RumusSegitiga.php" method="POST">
    <h1>Rumus Luas Dan Keliling Segitiga</h1>
    <p>Alas</p>
    <input type="number" name="alas" placeholder="Ex.5" />
    <br>
    <p>Tinggi</p>
    <input type="number" name="tinggi" placeholder="Ex.5" />
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $alas + $alas + $alas ;

        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>"; 
        echo "Luas Segitiga : $luas <br>";
        echo "Keliling Segitiga : $keliling <br>";
    }
?>