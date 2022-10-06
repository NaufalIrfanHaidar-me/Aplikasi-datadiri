<?php
    if ( isset($_GET["npm"]) ){
        $npm = $_GET["npm"];
        
        $query = "
            DELETE FROM tegep_mahasiswa
            WHERE npm = '$npm';
        ";

        include ('./nilai-config.php');
        $delete = mysqli_query($mysqli, $query);

        if ($delete){
            echo "
                <script>
                    alert('Data berhasil dihapus');
                    window.location='input-nilai.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data gagal dihapus');
                    window.location='nilai-edit.php?npm=$npm';
                </script>
            ";
        }
    }
?>