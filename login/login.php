<?php 

include "../modulphp/function.php"; 

$bidangs = tampil("SELECT * FROM bidang WHERE id_bidang BETWEEN 1 AND 6");

if(isset($_POST['submit'])){
    $user   = $_POST['user'];
    $pass   = $_POST['pass'];
    $role   = $_POST['role'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user'");

    if(mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);

        if(password_verify($pass, $row['pass'])){
            header("Location: ../admin umum/dashboard.php");
            exit;
        }
    }

    $error = true;
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
        <title>Login - SB Admin</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <style>
        .custom-checkbox .form-check-input {
            width: 14px;
            height: 14px;
        }
        .custom-checkbox .form-check-label {
            font-size: 0.8rem;
        }
    </style>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?php if(isset($error)) : ?>
                                            <p style="color: red;"><small><i>*username/password salah</i></small></p>
                                        <?php endif; ?>
                                        <form action="" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control w-100" name="user" id="inputEmail" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">Username/Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="pass" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form mb-3">
                                                <select name="role" id="" class="p-3 form-select form-select-sm">
                                                    <option value="">--Pilih Opsi Login--</option>
                                                    <?php foreach($bidangs as $bidang) : ?>
                                                        <?php if($bidang['nama_bidang'] === "Administrasi") : ?>
                                                            <option value="admin umum">Admin Utama</option>
                                                        <?php else : ?>
                                                            <option value="<?= strtolower($bidang['nama_bidang'])?>">Admin <?= $bidang['nama_bidang'] ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-check custom-checkbox mb-3">
                                                <input class="form-check-input form-check-input-sm" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center margin-10 mt-4 mb-3">
                                                <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                                <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer" style="margin-top: 40px;">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Puskesmas kelompok Satu 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
