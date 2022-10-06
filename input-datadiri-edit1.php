<?php
    if ( isset($_GET["kode_barang"]) ){
        $kode_barang = $_GET["kode_barang"];
        $check_kode_barang = "SELECT * FROM transaksi WHERE kode_barang = '$kode_barang'; ";
        include('./input-config.php');
        $query = mysqli_query($mysqli, $check_kode_barang);
        $row = mysqli_fetch_array($query);

    }
?>
<h1>Edit Data</h1>
<form action="input-datadiri-edit.php" method="POST">
    <label for="kode_barang">Kode Barang</label><br>
    <input value="<?php echo $row["kode_barang"]; ?>" type="number" name="kode_barang" placeholder="Ex. 12003102" readonly/><br>

    <label for="tanggal">Tanggal</label><br>
    <input value="<?php echo $row["tanggal"]; ?>" type="date" name="tanggal" /><br>

    <label for="pembeli">Pembeli</label><br>
    <input value="<?php echo $row["pembeli"]; ?>" type="text" name="pembeli" /><br>

    <label for="namabarang">Nama Barang</label><br>
    <input value="<?php echo $row["namabarang"]; ?>" type="text" name="namabarang" placeholder="Ex. Ilyas" /><br>

    <label for="qty">Qty</label><br>
    <input value="<?php echo $row["qty"]; ?>" type="number" name="qty" placeholder="Ex. 80.56" /><br>

    <label for="hargabeli">Harga Beli</label><br>
    <input value="<?php echo $row["hargabeli"]; ?>" type="number" name="hargabeli" placeholder="Ex. 80.56" /><br>

    <label for="hargajual">Harga Jual</label><br>
    <input value="<?php echo $row["hargajual"]; ?>" type="number" name="hargajual" placeholder="Ex. 80.56" /><br><br>


    <input type="submit" name="edit" value="Edit Data" />
    <a href="input-datadiri.php">Kembali</a> 
</form>

<?php 
    if ( isset($_POST["edit"]) ){
        $kode_barang = $_POST["kode_barang"];
        $tanggal = $_POST["tanggal"];
        $pembeli = $_POST["pembeli"];
        $namabarang = $_POST["namabarang"];
        $qty = $_POST["qty"];
        $hargabeli = $_POST["hargabeli"];
        $hargajual = $_POST["hargajual"];

        // EDIT - Memperbaharui Data
        $query = "
            UPDATE transaksi SET kode_barang = '$kode_barang',
            tanggal = '$tanggal',
            pembeli = '$pembeli',
            namabarang = '$namabarang',
            qty = '$qty',
            hargabeli = '$hargabeli',
            hargajual = '$hargajual'
            WHERE kode_barang = '$kode_barang';
        ";

        include ('./input-config.php');
        $edit = mysqli_query($mysqli, $query);

        if ($edit){
            echo "
                <script>
                    alert('Data berhasil diperbaharui');
                    window.location='input-datadiri.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data gagal diperbaharui');
                    window.location='input-datadiri-edit.php?kode_barang=$kode_barang';
                </script>
            ";
        }
    }
    
?>