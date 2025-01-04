<?php 
include "../modulphp/function.php";
$id = $_GET['id'];
if(hapusJadwal($id) > 0){
    echo "<script>alert('Data berhasil dihapus !'); window.location.href='jadwal-dokter.php';</script>";
}
else{
    echo "<script>alert('Data gagal dihapus !');</script>";
}

?>