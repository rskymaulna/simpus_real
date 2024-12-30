<?php 
$conn = mysqli_connect("localhost", "root", "", "puskesmas");

function tampil($query){
    global $conn;
    $array  = [];
    $result = mysqli_query($conn, $query);
    while($arr = mysqli_fetch_assoc($result)){
        $array [] = $arr;
    } 
    return $array;
}

function tambahPasien($data){
    global $conn;
    $nama         = $data['nama'];
    $nik          = $data['nik'];
    $jenisK       = $data['jenis_kelamin'];
    $alamat       = $data['alamat'];
    $no_telp      = $data['no_telp'];
    $no_telpk     = $data['no_telp_k'];
    $asuransi     = $data['asuransi'];
    $no_asuransi  = $data['no_asuransi'];
    $tempat_lahir = $data['tempat_lahir'];
    $status_nikah = $data['status_nikah'];
    $tgl_lahir    = $data['tgl_lahir'];
    $foto         = upFoto();

    if(!$foto){
        return false;
    }

    $query = "INSERT INTO 
                pasien 
                (nama_pasien, tgl_lahir, jenis_kelamin, no_telp, alamat, status_pernikahan, no_telp_kerabat, status_asuransi, nik, tempat_lahir, no_asuransi, foto) 
                VALUES 
                ('$nama', '$tgl_lahir', '$jenisK', '$no_telp','$alamat', '$status_nikah', '$no_telpk', '$asuransi', '$nik', '$tempat_lahir', '$no_asuransi', '$foto')";

    mysqli_query($conn, $query);

    var_dump(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upFoto(){
    $nama = $_FILES['foto']['name'];
    $eror = $_FILES['foto']['error'];
    $size = $_FILES['foto']['size'];
    $tmpN = $_FILES['foto']['tmp_name'];

    
    //mengecek apakah file sudah diupload atau belum
    if($eror === 4){
        echo "<script>alert('foto belum diunggah, harap unggah foto terlebih dahulu!');</script>";

        return false;
    }

    //mengecek size dari file foto yang diunggah
    if($size > 1000000){
        echo "<script>alert('file yang diunggah harus berukuran kurang dari 1MB!');</script>";

        return false;
    }

    //mengecek ekstensi file 
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensifoto  = explode(".", $nama);
    $ekstensifoto  = strtolower(end($ekstensifoto));

    if(!in_array($ekstensifoto, $ekstensiValid)){
        echo "<script>alert('file yang dipload hanya jpg, jpeg, dan png');</script>";

        return false;
    }

    //mengupload file ke database dan direktori

    $namafoto = uniqid().".".$ekstensifoto;

    move_uploaded_file($tmpN, "../image/pasien/$namafoto");

    return $namafoto;
}

?>