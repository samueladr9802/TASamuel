<?php
    if (isset($_GET["p"])) {
        $p = $_GET["p"];
        if ($p == "success")
            echo '<script>alert("Registrasti Berhasil, Silahkan Login Kembali.")</script>';
        else if ($p == "login-failed") {
            echo '<script>alert("Username atau Password Salah")</script>';
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="plugin/bs5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/checkbox.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="icon/css/all.min.css">
    
    <title>Indonesian Statistics || Beranda</title>
</head>

<body>

    <div class="container-fluid">

        <!-- Form Register -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 bg-vector">
                    <div class="card-body p-0">
                        <div class="row">
                            <!-- cover -->
                            <div class="col-sm d-none d-lg-block">
                                <div class="p-5 position-relative">
                                    <div class="text-center mt-5">
                                        <h1 class="h1 judul text-bold">INDONESIAN STATISTICS</h1>
                                        <p class="desc">
                                            "Aplikasi Pendataan Penduduk dan Kuisioner Online Berbasis
                                            Web dan Mobile"
                                        </p>
                                    </div>
                                    <center>
                                        <img src="assets/vector-cover-light.png" width="100%">
                                    </center>
                                </div>

                            </div>

                            <!-- form control -->
                            <div class="col-sm">
                                <div class="card border-0 shadow card-login">
                                    <div class="card-body p-0">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">SignUp</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                                    <form method="POST" name="myForm" action="php/login.php">

                                                        <div class="row justify-content-center mt-5">
        
                                                            <div class="text-center mt-5">
                                                                <h1 class="h2 judul text-bold">LOGIN</h1>
                                                            </div>
        
                                                            <div class="col-lg-10 col-md-10 mt-5">
                                                                <div class="input-container mx-2">
                                                                    <i class="far fa-user icon"></i>
                                                                    <input class="input-field" type="text" placeholder="Username"
                                                                        name="usrnm" required>
                                                                </div>
                                                            </div>
        
                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="input-container mx-2" id="show_hide_password">
                                                                    <i class="fas fa-lock icon"></i>
                                                                        <input class="input-field toggle-container" type="password" id="password"
                                                                        placeholder="Password" name="pwd" required>
                                                                        <span>
                                                                            <i class="far fa-eye-slash icon-toggle" aria-hidden="true" id="eye"
                                                                            onclick="toggle();"></i>
                                                                        </span>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="d-flex justify-content-between mx-3">
                                                                    <div class="form-group my-4">
                                                                        <label class="container font-check">Remember Me
                                                                            <input type="checkbox">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <a href="#" class="link my-4">Forgot Password?</a>
                                                                </div>
                                                            </div>
        
                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="d-grid gap-2 mx-2">
                                                                    <button type="submit"
                                                                        class="btn btn-red rounded-pill shadow mb-4"><i
                                                                            class="fas fa-lock"></i>
                                                                        MASUK</button>
                                                                </div>
                                                            </div>
                                                        </div>
        
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                                                    <form method="POST" name="myForm" action="php/register.php">
        
                                                        <div class="row justify-content-center mt-5">
            
                                                            <div class="text-center mt-5">
                                                                <h1 class="h2 judul text-bold">SIGN UP</h1>
                                                            </div>
            
                                                            <div class="col-lg-10 col-md-10 mt-5">
                                                                <div class="input-container mx-2">
                                                                    <i class="far fa-user icon"></i>
                                                                    <input class="input-field" type="text" placeholder="Username"
                                                                        name="usrnm" required>
                                                                </div>
                                                            </div>
            
                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="input-container mx-2" id="show_hide_password">
                                                                    <i class="fas fa-lock icon"></i>
                                                                        <input class="input-field toggle-container" type="password" id="password-one"
                                                                        placeholder="Password" name="pwd" required>
                                                                        <span>
                                                                            <i class="far fa-eye-slash icon-toggle" aria-hidden="true" id="eye-one"
                                                                            onclick="togglepswsatu();"></i>
                                                                        </span>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="input-container mx-2" id="show_hide_password">
                                                                    <i class="fas fa-lock icon"></i>
                                                                        <input class="input-field toggle-container" type="password" id="password-two"
                                                                        placeholder="Re-type Password" name="repwd" required>
                                                                        <span>
                                                                            <i class="far fa-eye-slash icon-toggle" aria-hidden="true" id="eye-two"
                                                                            onclick="togglepswdua();"></i>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="input-container mx-2">
                                                                    <i class="fas fa-id-card-alt icon"></i>
                                                                    <input class="input-field" type="text" placeholder="No. KK"
                                                                        name="familycardnumber" required>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="input-container mx-2">
                                                                    <i class="fas fa-id-card icon"></i>
                                                                    <input class="input-field" type="text" placeholder="No. KTP Kepala Keluarga"
                                                                        name="idnumber" required>
                                                                </div>
                                                            </div>
            
                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="input-container mx-2">
                                                                    <i class="far fa-id-badge icon"></i>
                                                                    <input class="input-field" type="text" placeholder="Nama Lengkap (sesuai KTP)"
                                                                        name="fullname" required>
                                                                </div>
                                                            </div>
            
                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="input-container mx-2">
                                                                    <i class="fas fa-phone icon"></i>
                                                                    <input class="input-field" type="text" placeholder="No.HP"
                                                                        name="phone" required>
                                                                </div>
                                                            </div>
            
                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="d-flex mx-2">
                                                                    <div class="form-group my-4">
                                                                        <label class="container font-check">Saya telah membaca
                                                                            dan menyetujui perjanjian yang telah
                                                                            dibuat oleh instansi terkait
                                                                            <input type="checkbox" id="myCheck" onclick="checkedbox();">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="d-grid gap-2 mx-2">
                                                                    <button type="submit" class="btn btn-red rounded-pill shadow mb-4" id="btnsubmit"><i class="fas fa-paper-plane"></i>
                                                                        DAFTAR</button>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
            
                                                    </form>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="plugin/bs5/dist/js/bootstrap.bundle.js"></script>
    <script src="js/javascript.js"></script>
</body>

</html>