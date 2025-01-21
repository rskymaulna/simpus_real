<?php 

include "../modulphp/function.php";
$idp   = $_GET['idp'];
$total = $_GET['total'];
$bayar = $_GET['bayar'];
$idk   = $_GET['idk'];

if(!isset($bayar)){
    echo "<script>alert('Uang bayar belum diinput !'); window.location.href='profil-pasien.php?idp=$id&idk=$idk';</script>";
}else{
    if($total > $bayar){
        echo "<script>alert('Uang yang dibayar kurang dari total bayar !'); window.locatiob.href='profil-pasien.php?idp=$id&idk=$idk';</script>";
    }else if($total < $bayar) {
        $kembalian = $bayar - $total;
    }
    
    
    mysqli_query($conn, "INSERT INTO pendapatan (id_kunjungan,  jumlah, bayar, kembalian) VALUES ('$idk', '$total', '$bayar', '$kembalian')");
    
    if(transaksiSelesai($idk) > 0){
        echo "<script>alert('Pembayaran berhasil !');window.location.href='invoice.php?idk=$idk&id=$idp';</script>";
    }else if(transaksiSelesai($idk) === 0){
        echo "<script>alert('Pembayaran berhasil !');window.location.href='invoice.php?idk=$idk&id=$idp';</script>";
    }else{
        echo "<script>alert('Pembayaran Gagal !');window.location.href='profil-pasien.php?idk=$idk&id=$idp';</script>";
    }
}



?>