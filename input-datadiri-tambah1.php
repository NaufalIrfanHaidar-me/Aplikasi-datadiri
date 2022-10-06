<h1>Tambah Data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="kode_barang">Kode Barang</label><br>
    <input type="number" name="kode_barang" placeholder="Ex. 12003102" /><br>

    <label for="tanggal">Tanggal</label><br>
    <input type="date" name="tanggal" /><br>

    <label for="pembeli">Pembeli</label><br>
    <input type="text" name="pembeli" /><br>

    <label for="namabarang">Nama Barang</label><br>
    <input type="text" name="namabarang" placeholder="Ex. Aqua" /><br><br>

    <label for="qty">Qty</label><br>
    <input type="number" name="qty" placeholder="Ex. 80.56" /><br><br>

    <label for="hargabeli">Harga Beli</label><br>
    <input type="number" name="hargabeli" placeholder="Ex. 80.56" /><br><br>

    <label for="hargajual">Harga Jual</label><br>
    <input type="number" name="hargajual" placeholder="Ex. 80.56" /><br><br>


    <input type="submit" name="simpan" value="Simpan Data" />
    <a href="input-datadiri.php">Kembali</a> 
</form>

<?php 
    if( isset($_POST["simpan"]) ){
        $kode_barang = $_POST["kode_barang"];
        $tanggal = $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $namabarang = $_POST["namabarang"];
        $qty = $_POST["qty"];
        $hargabeli = $_POST["hargabeli"];
        $hargajual = $_POST["hargajual"];

        // CREATE - Menambahkan Data ke Database
        $query = "
            INSERT INTO transaksi VALUES
            ('$kode_barang', '$tanggal', '$pembeli', '$namabarang', '$qty', '$hargabeli', '$hargajual');
        ";
        
        include ('./input-config.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    window.location='input-datadiri.php';
                </script>
            ";
        }
    }
?>