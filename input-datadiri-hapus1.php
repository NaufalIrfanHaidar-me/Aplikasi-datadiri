<?php
    if ( isset($_GET["kode_barang"]) ){
        $kode_barang = $_GET["kode_barang"];
        
        $query = "
            DELETE FROM transaksi
            WHERE kode_barang = '$kode_barang';
        ";

        include ('./input-config.php');
        $delete = mysqli_query($mysqli, $query);

        if ($delete){
            echo "
                <script>
                    alert('Data berhasil dihapus');
                    window.location='input-datadiri.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data gagal dihapus');
                    window.location='input-datadiri-edit.php?kode_barang=$kode_barang';
                </script>
            ";
        }
    }
?>