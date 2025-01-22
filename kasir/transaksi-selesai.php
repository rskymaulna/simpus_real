<?php 

include "../modulphp/function.php";

if(!isset($_GET['bayar'])){
    $idp   = $_GET['idp'];
    $total = $_GET['total'];
    $idk   = $_GET['idk'];
    echo "<script>alert('Pasien belum membayar !'); window.location.href='profil-pasien.php?idp=$idp&idk=$idk';</script>";
}else{

    $idp   = $_GET['idp'];
    $total = $_GET['total'];
    $idk   = $_GET['idk'];
    $bayar = $_GET['bayar'];
    $stats = tampil("SELECT * FROM pasien WHERE id_pasien = $idp")[0];
    if($stats['status_asuransi'] === 'BPJS'){
        $kembalian = 0;
        $bayar     = 0;

        mysqli_query($conn, "INSERT INTO pendapatan (id_kunjungan,  jumlah, bayar, kembalian) VALUES ('$idk', '$total', '$bayar', '$kembalian')");
    
        if(transaksiSelesai($idk) > 0){
            echo "<script>alert('Pembayaran berhasil !');window.location.href='invoice.php?idk=$idk&id=$idp';</script>";
        }else if(transaksiSelesai($idk) === 0){
            echo "<script>alert('Pembayaran berhasil !');window.location.href='invoice.php?idk=$idk&id=$idp';</script>";
        }else{
            echo "<script>alert('Pembayaran Gagal !');window.location.href='profil-pasien.php?idk=$idk&idp=$idp';</script>";
        }
    }else if($stats['status_asuransi'] === 'Non-BPJS'){
        if($total > $bayar){
            echo "<script>alert('Uang yang dibayar kurang dari total bayar !'); window.location.href='profil-pasien.php?idp=$idp&idk=$idk';</script>";
        }else if($total < $bayar) {
            $kembalian = $bayar - $total;
    
            mysqli_query($conn, "INSERT INTO pendapatan (id_kunjungan,  jumlah, bayar, kembalian) VALUES ('$idk', '$total', '$bayar', '$kembalian')");
        
            if(transaksiSelesai($idk) > 0){
                echo "<script>alert('Pembayaran berhasil !');window.location.href='invoice.php?idk=$idk&id=$idp';</script>";
            }else if(transaksiSelesai($idk) === 0){
                echo "<script>alert('Pembayaran berhasil !');window.location.href='invoice.php?idk=$idk&id=$idp';</script>";
            }else{
                echo "<script>alert('Pembayaran Gagal !');window.location.href='profil-pasien.php?idk=$idk&idp=$idp';</script>";
            }
        }
    
    }
     
}   




?>