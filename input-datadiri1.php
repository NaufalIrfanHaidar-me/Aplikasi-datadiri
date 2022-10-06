<?php
    include('./input-config.php');
    echo "<a href='input-datadiri-tambah.php'>Tambah Data</a>";
    echo "<hr>";

    // Menampilkan Data Dari Database
    $no = 1;
    $tabledata ="";
    $data = mysqli_query($mysqli,"SELECT * FROM transaksi ");
    while($row = mysqli_fetch_array($data)){
        $total_hargabeli = (
            $row["qty"] *
            $row["hargabeli"]
        );
        $total_hargajual = (
            $row["qty"] *
            $row["hargajual"]
        );
        $laba = ($total_hargajual-$total_hargabeli);
        $presentase_laba = (
            $laba / 
            $total_hargabeli
        )*100;
        $tabledata .="
            <tr>
                <td>".$row["kode_barang"]."</td>
                <td>".$row["tanggal"]."</td>
                <td>".$row["pembeli"]."</td>
                <td>".$row["namabarang"]."</td>
                <td>".$row["qty"]."</td>
                <td>".$row["hargabeli"]."</td>
                <td>".$row["hargajual"]."</td>
                <td>".$total_hargabeli."</td>
                <td>".$total_hargajual."</td>
                <td>".$laba."</td>
                <td>".$presentase_laba."%</td>
                <td>
                    <a href='input-datadiri-edit.php?kode_barang=".$row["kode_barang"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a href='input-datadiri-hapus.php?&kode_barang=".$row["kode_barang"]."'
                    onclick='return confirm(\"Yakin Dek ?\");'>Hapus</a>
                </td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table cellpadding=5 border=1 cellspacing=0 >
            <tr>
                <th>kode_barang</th>
                <th>tanggal</th>
                <th>pembeli</th>
                <th>namabarang</th>
                <th>qty</th>
                <th>hargabeli</th>
                <th>hargajual</th>
                <th>total_hargabeli</th>
                <th>total_hargajual</th>
                <th>total_laba</th>
                <th>presentase_laba</th>
                <th>Aksi</th>
            </tr>
            $tabledata
        </table>
    ";
?>
