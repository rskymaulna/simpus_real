<?php 
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>window.location.href='../login-dulu-abang.php';</script>";

}


if($_SESSION['peran'] !== 'Admin Poli Umum'){
    echo "<script>
                alert('Opsi login yang dipilih tidak sesuai dengan peran admin !');
                window.location.href='../login/login.php';
        </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Poli Umum</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/custom.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
        <style>
            /* Gunakan font soft */
            body {
                font-family: 'Poppins', sans-serif;
            }

            /* Styling untuk input multi select */
            .select2-container--default .select2-selection--multiple {
                background-color: #f8f8ff !important; /* Warna latar belakang lebih soft */
                border: 1px solid #dcdcdc !important;
                border-radius: 8px !important;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1) !important;
                font-weight: 400 !important;
                font-size: 14px !important;
            }

            /* Opsi yang dipilih */
            .select2-container--default .select2-selection--multiple .select2-selection__choice {
                background-color: blueviolet !important;
                color: white !important;
                border: none !important;
                font-weight: 400 !important;
                border-radius: 5px !important;
                padding: 5px 10px !important;
            }

            /* Warna teks dalam dropdown saat dipilih */
            .select2-container--default .select2-results__option--selected {
                background-color: blueviolet !important;
                color: white !important;
                font-weight: 400 !important;
            }

            /* Warna hover opsi */
            .select2-container--default .select2-results__option--highlighted {
                background-color: #8a2be2 !important; /* Warna lebih gelap saat hover */
                color: white !important;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark nav-bar-color">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SIMPUS</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>