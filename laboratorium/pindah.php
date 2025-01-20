<?php 
include "../modulphp/function.php";
    if(pindahAp($_GET) > 0){
        echo "<script>alert('Pasien berhasil dipindahkan !'); window.location.href='index.php';</script>";
    }
    else{
        echo "<script>alert('Pasien gagal dipindahkan !'); window.location.href='index.php';</script>";
    }
    pindahAp($_GET);
    var_dump($_GET);
?>