<?php
    $nama = "Wardah";
    $nilai = 99.99;
?>

<?php
        if($nilai >= 60){
            $ket = "Lulus";
        }
        else{
            $ket = "Gagal";
        }

        echo "Siswa bernama { $nama } dengan nilai { $nilai }
        dinyatakan { $ket }";
?>