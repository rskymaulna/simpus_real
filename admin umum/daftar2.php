<?php 
include "../modulphp/function.php";

$pasien = tampil("SELECT * FROM pasien ORDER BY id_pasien DESC LIMIT 1")[0];
$id     = $pasien['id_pasien'];
mysqli_query($conn, "INSERT INTO pendaftaran (id_pasien, antrian) VALUES ('$id', 1)");

if(mysqli_affected_rows($conn) > 0){
    echo "<script>
                alert('Data berhasil ditambahkan !');
                window.location.href='data-pendaftaran.php';
            </script>";
}else {
    echo "<script>
                alert('Data gagal ditambahkan !');
            </script>";
}

?>