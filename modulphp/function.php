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

function editPasien($id, $data){
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

    if($_FILES['foto']['error'] === 4){
        $foto  = $data['foto lama'];
    }else {
        $foto  = upFoto();
    }

    $query = "UPDATE pasien SET nama_pasien = '$nama', nik = '$nik', jenis_kelamin = '$JenisK', alamat = '$alamat', no_telp = '$no_telp', no_telp_kerabat = '$no_telpk', status_asuransi = '$asuransi', no_asuransi = '$no_asuransi', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', status_pernikahan = '$status_nikah' WHERE id_pasien = $id";
   
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusPasien($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM data_klinis WHERE id_pasien = $id");
    mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien = $id");
    
    return mysqli_affected_rows($conn);
}

//<-----SESI FUNCTION DOKTER------->

function tambahDokter($data){
    global $conn;
    $nama          = $data['nama'];
    $no_induk      = $data['no_induk'];
    $id_bidang     = $data['id_bidang'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $spesialisasi  = $data['spesialisasi'];
    $no_telp       = $data['no_telp'];
    $alamat        = $data['alamat'];
    $tempat_lahir  = $data['tempat_lahir'];
    $tgl_lahir     = $data['tgl_lahir'];
    $foto          = upfotoDokter();

    if(!$foto){
        return false;
    }

    $query = "INSERT INTO dokter (id_bidang, no_induk_dokter, nama_dokter, tempat_lahir, tgl_lahir, jenis_kelamin, spesialisasi, no_telp, alamat, foto) VALUES ('$id_bidang', '$no_induk', '$nama', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$spesialisasi', '$no_telp', '$alamat', '$foto')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upFotoDokter(){
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

    move_uploaded_file($tmpN, "../image/dokter/$namafoto");

    return $namafoto;
}

function otomatisasiKodeDokter(){
    global $conn;

    //OTOMATISASI KODE DOKTER POLI UMUM
    $dokterpu = tampil("SELECT  dokter.id_dokter, dokter.id_bidang, bidang.kode_bidang From dokter INNER JOIN bidang ON dokter.id_bidang = bidang.id_bidang WHERE dokter.id_bidang = 1");
    $ipu = 1;
    foreach($dokterpu as $dokter){
        $id = $dokter['id_dokter'];
        $kode_dokter = $dokter['kode_bidang']."D-".$ipu;
        $ipu++;
        mysqli_query($conn, "UPDATE dokter SET kode_dokter = '$kode_dokter' WHERE id_dokter  = $id");
    }

    //OTOMATISASI KODE DOKTER POLI GIGI
    $dokterpg = tampil("SELECT  dokter.id_dokter, dokter.id_bidang, bidang.kode_bidang From dokter INNER JOIN bidang ON dokter.id_bidang = bidang.id_bidang WHERE dokter.id_bidang = 2");
    $ipg = 1;
    foreach($dokterpg as $dokter){
        $id = $dokter['id_dokter'];
        $kode_dokter = $dokter['kode_bidang']."D-".$ipg;
        mysqli_query($conn, "UPDATE dokter SET kode_dokter = '$kode_dokter' WHERE id_dokter  = $id");
        $ipg++;
    }

    //OTOMATISASI KODE DOKTER POLI GIGI
    $dokterpk = tampil("SELECT  dokter.id_dokter, dokter.id_bidang, bidang.kode_bidang From dokter INNER JOIN bidang ON dokter.id_bidang = bidang.id_bidang WHERE dokter.id_bidang = 3");
    $ipk = 1;
    foreach($dokterpk as $dokter){
        $id = $dokter['id_dokter'];
        $kode_dokter = $dokter['kode_bidang']."D-".$ipk;
        mysqli_query($conn, "UPDATE dokter SET kode_dokter = '$kode_dokter' WHERE id_dokter  = $id");
        $ipk++;
    }
}

function editDokter($id, $data){
    global $conn;
    $nama          = $data['nama'];
    $no_induk      = $data['no_induk'];
    $id_bidang     = $data['id_bidang'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $spesialisasi  = $data['spesialisasi'];
    $no_telp       = $data['no_telp'];
    $alamat        = $data['alamat'];
    $tempat_lahir  = $data['tempat_lahir'];
    $tgl_lahir     = $data['tgl_lahir'];

    if($_FILES['foto']['error'] === 4){
        $foto = $data['foto_lama'];
    }else {
        $foto = upfotoDokter();
    }

    $query = "UPDATE dokter SET nama_dokter = '$nama', no_induk_dokter = '$no_induk', id_bidang = '$id_bidang', jenis_kelamin = '$jenis_kelamin', spesialisasi = '$spesialisasi', no_telp = '$no_telp', alamat = '$alamat', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', foto = '$foto' WHERE id_dokter = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusDokter($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM dokter WHERE id_dokter = $id");
    return mysqli_affected_rows($conn);
}



//SESI FUNCTION JADWAL

function tambahJadwalDokter($data){
    global $conn;
    $nama        = $data['nama_dokter'];
    $bidang      = $data['nama_bidang'];
    $hari        = $data['hari'];
    $jam_mulai   = $data['jam_mulai'];
    $jam_selesai = $data['jam_selesai'];

    mysqli_query($conn, "INSERT INTO jadwal_dokter (id_dokter, id_bidang, hari, jam_mulai, jam_selesai) VALUES ('$nama', '$bidang', '$hari', '$jam_mulai', '$jam_selesai')");

    return mysqli_affected_rows($conn);
}
?>