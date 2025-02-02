<?php 

include "../modulphp/function.php";


$id = $_GET['id_pasien'];
mysqli_query($conn, "INSERT INTO pendaftaran (id_pasien, antrian) VALUES ('$id', 1)");
if(mysqli_affected_rows($conn) > 0){
    echo"<script>
            alert('Pasien berhasil didaftarkan !');
            window.location.href='data-pendaftaran.php';
        </script>";
}else{
    echo"<script>
            alert('Pasien Gagal didaftarkan !');
        </script>";
}

?>