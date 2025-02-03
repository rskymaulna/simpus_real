<?php 

include "../modulphp/function.php";


$id = $_GET['id_pasien'];
mysqli_query($conn, "UPDATE pendaftaran SET antrian = 0 WHERE id_pasien = $id");
if(mysqli_affected_rows($conn) > 0){
    echo"<script>
            alert('Pasien berhasil dikeluarkan dari daftar !');
            window.location.href='data-pendaftaran.php';
        </script>";
}else{
    echo"<script>
            alert('Pasien gagal dikeluarkan dari daftar !');
            window.location.href='data-pendaftaran.php';
        </script>";
}

?>