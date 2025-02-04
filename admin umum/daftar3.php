<?php 

include "../modulphp/function.php";

date_default_timezone_set('Asia/Jakarta'); 
$hari_ini = date("Y-m-d");
$id = $_GET['id_pasien'];
$result = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE DATE(tgl_waktu) = '$hari_ini' AND id_pasien = $id"); 
if(mysqli_num_rows($result) > 0){
    echo"<script>
            alert('Pasien tidak dapat didaftarkan 2 kali !!');
            window.location.href='pasien-terdaftar.php';
        </script>";
}else{
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
}


?>