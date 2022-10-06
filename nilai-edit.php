<?php
    if ( isset($_GET["npm"]) ){
        $npm = $_GET["npm"];
        $check_npm = "SELECT * FROM tegep_mahasiswa WHERE npm = '$npm'; ";
        include('./nilai-config.php');
        $query = mysqli_query($mysqli, $check_npm);
        $row = mysqli_fetch_array($query);

    }
?>
<h1>Edit Data</h1>
<form action="nilai-edit.php" method="POST">
    <label for="npm">NPM</label><br>
    <input value="<?php echo $row["npm"]; ?>" type="number" name="npm" placeholder="Ex. 11223334" readonly/><br>

    <label for="nama_mahasiswa">Nama</label><br>
    <input value="<?php echo $row["nama_mahasiswa"]; ?>" type="text" name="nama_mahasiswa" placeholder="Ex. Tegep" /><br>

    <label for="prodi">Prodi</label><br>
    <input value="<?php echo $row["prodi"]; ?>" type="text" name="prodi" placeholder="Ex. Saintek" /><br>

    <label for="tugas">Nilai Tugas</label><br>
    <input value="<?php echo $row["tugas"]; ?>" type="number" name="tugas" placeholder="Ex. 80" /><br>

    <label for="uts">Nilai UTS</label><br>
    <input value="<?php echo $row["uts"]; ?>" type="number" name="uts" placeholder="Ex. 78" /><br>

    <label for="uas">Nilai UAS</label><br>
    <input value="<?php echo $row["uas"]; ?>" type="number" name="uas" placeholder="Ex. 82" /><br>

    <input type="submit" name="edit" value="Edit Data" />
    <a href="input-nilai.php">Kembali</a> 
</form>

<?php 
    if ( isset($_POST["edit"]) ){
        $npm = $_POST["npm"];
        $nama_mahasiswa = $_POST["nama_mahasiswa"];
        $prodi = $_POST["prodi"];
        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];

        // EDIT - Memperbaharui Data
        $query = "
            UPDATE tegep_mahasiswa SET nama_mahasiswa = '$nama_mahasiswa',
            prodi = '$prodi',
            tugas = '$tugas',
            uts = '$uts',
            uas = '$uas'
            WHERE npm = '$npm';
        ";

        include ('./nilai-config.php');
        $edit = mysqli_query($mysqli, $query);

        if ($edit){
            echo "
                <script>
                    alert('Data berhasil diperbaharui');
                    window.location='input-nilai.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data gagal diperbaharui');
                    window.location='nilai-edit.php?npm=$npm';
                </script>
            ";
        }
    }
    
?>