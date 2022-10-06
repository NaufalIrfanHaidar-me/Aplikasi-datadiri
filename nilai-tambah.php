<h1>Tambah Data</h1>
<form action="nilai-tambah.php" method="POST">
    <label for="npm">NPM</label><br>
    <input type="number" name="npm" placeholder="Ex. 11223334" /><br>

    <label for="nama_mahasiswa">Nama Mahasiswa</label><br>
    <input type="text" name="nama_mahasiswa" placeholder="Ex. Tegep" /><br>

    <label for="prodi">Prodi</label><br>
    <input type="text" name="prodi" placeholder="Ex. Saintek" /><br>

    <label for="tugas">Nilai Tugas</label><br>
    <input type="number" name="tugas" placeholder="Ex. 80" /><br>

    <label for="uts">Nilai UTS</label><br>
    <input type="number" name="uts" placeholder="Ex. 78" /><br>

    <label for="uas">Nilai UAS</label><br>
    <input type="number" name="uas" placeholder="Ex. 82" /><br><br>

    <input type="submit" name="simpan" value="Simpan Data" />
    <a href="input-nilai.php">Kembali</a> 
</form>

<?php 
    if( isset($_POST["simpan"]) ){
        $npm = $_POST["npm"];
        $nama_mahasiswa = $_POST["nama_mahasiswa"];
        $prodi = $_POST["prodi"];
        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];

        // CREATE - Menambahkan Data ke Database
        $query = "
            INSERT INTO tegep_mahasiswa VALUES
            ('$npm', '$nama_mahasiswa', '$prodi', '$tugas', '$uts', '$uas');
        ";
        
        include ('./nilai-config.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    window.location='input-nilai.php';
                </script>
            ";
        }
    }
?>