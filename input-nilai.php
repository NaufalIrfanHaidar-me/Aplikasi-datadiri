<?php
    include('./nilai-config.php');
    echo "<a href='nilai-tambah.php'>Tambah Data</a>";
    echo "<hr>";
    
    // Menampilkan Data Dari Database
    $no = 1;
    $tabledata ="";
    $data = mysqli_query($mysqli,"SELECT * FROM tegep_mahasiswa ");
    while($row = mysqli_fetch_array($data)){
        $total_tugas = (
            $row["tugas"] * 0.4
        );
        $total_uts = (
            $row["uts"] * 0.3
        );
        $total_uas = (
            $row["uas"] * 0.3
        );
        $nilai_akhir = (
            $total_tugas + $total_uts + $total_uas
        );
        $tabledata .="
            <tr>
                <td>".$row["npm"]."</td>
                <td>".$row["nama_mahasiswa"]."</td>
                <td>".$row["prodi"]."</td>
                <td>".$row["tugas"]."</td>
                <td>".$row["uts"]."</td>
                <td>".$row["uas"]."</td>
                <td>".$nilai_akhir."</td>
                <td>
                    <a href='nilai-edit.php?npm=".$row["npm"]."'>Edit</a>
                    &nbsp;-&nbsp;
                    <a href='nilai-hapus.php?&npm=".$row["npm"]."'
                    onclick='return confirm(\"Yakin Dek ?\");'>Hapus</a>
                </td>
            </tr>
        ";
        $no++;
    }

    echo "
        <table cellpadding=5 border=1 cellspacing=0 >
            <tr>
                <th>NPM</th>
                <th>Nama_Mahasiswa</th>
                <th>Prodi</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Aksi</th>
            </tr>
            $tabledata
        </table>
    ";
?>