<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>vendor/assets/img/logos/mypkl_logo.png">
    <link rel="icon" type="image/png" href="<?= base_url() ?>vendor/assets/img/logos/mypkl_logo.png">
    <title>
        <?= $page_title ?>
    </title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--     Fonts and icons     -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link id="pagestyle" href="<?= base_url() ?>vendor/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<style>
    .card.card-plain {
        backdrop-filter: blur(5px);
        background-color: #ffffffe3;
    }



    @media all and (min-width: 1024px) and (max-width: 1280px) {}

    @media all and (min-width: 768px) and (max-width: 1024px) {}

    @media all and (min-width: 480px) and (max-width: 768px) {
        .page-header {
            background-image: url('<?= base_url() ?>vendor/assets/img/kominfo.jpg');
        }

        .container-fluid {
            backdrop-filter: blur(10px);
        }
    }

    @media all and (max-width: 480px) {
        .page-header {
            background-image: url('<?= base_url() ?>vendor/assets/img/kominfo.jpg');
        }

        .container-fluid {
            backdrop-filter: blur(10px);
        }
    }


    /* Portrait */
    @media screen and (orientation:portrait) {
        /* Portrait styles here */
    }

    /* Landscape */
    @media screen and (orientation:landscape) {
        /* Landscape styles here */
    }


    /* CSS for iPhone, iPad, and Retina Displays */

    /* Non-Retina */
    @media screen and (-webkit-max-device-pixel-ratio: 1) {}

    /* Retina */
    @media only screen and (-webkit-min-device-pixel-ratio: 1.5),
    only screen and (-o-min-device-pixel-ratio: 3/2),
    only screen and (min--moz-device-pixel-ratio: 1.5),
    only screen and (min-device-pixel-ratio: 1.5) {}

    /* iPhone Portrait */
    @media screen and (max-device-width: 480px) and (orientation:portrait) {}

    /* iPhone Landscape */
    @media screen and (max-device-width: 480px) and (orientation:landscape) {}

    /* iPad Portrait */
    @media screen and (min-device-width: 481px) and (orientation:portrait) {}

    /* iPad Landscape */
    @media screen and (min-device-width: 481px) and (orientation:landscape) {}
</style>

<body>
    <main style="height: 100%;" class="main-content">
        <section>
            <div class="page-header min-vh-75">
                <div class="container-fluid">
                    <div style="height: 100vh;" id="row_parent" class="row">
                        <!-- Login -->
                        <div id="login" style="position: relative;z-index:2" class="col-xl-4 me-xl-1 col-lg-4 col-md-8 d-flex flex-column animate__animated animate__fadeInLeft  mx-auto">
                            <div class="card card-plain mt-3 rounded mb-4">
                                <div class="card-header pb-0 text-left bg-transparent mb-0">
                                    <div class="d-none col-12 d-flex justify-content-center mt-2 mb-2 rounded overflow-hidden">
                                        <img class="rounded mb-1" style="object-fit: cover;width:100%;height:5em" src="<?= base_url() ?>vendor/assets/img/logos/mypkl_logo.png" alt="">
                                    </div>
                                    <h3 class="font-weight-bolder text-info text-gradient mb-2">Selamat Datang Kembali</h3>
                                    <p class="mb-0">Silakan Masukkan Nama Pengguna (Username) dan Kata Sandi Anda</p>
                                </div>
                                <div class="card-body mt-1">
                                    <form method="post" action="<?=base_url('index.php/')?>login/check_login" role="form">
                                        <label class="mt-1">Nama Pengguna</label>
                                        <div class="mb-3">
                                            <input autocomplete="username" type="text" class="form-control" 
                                            name="username" placeholder="Nama Pengguna..." aria-label="Username" aria-describedby="username" required>
                                            <label for="username"><small class="text-danger">Email tidak terdaftar</small></label>
                                        </div>
                                        <label>Kata Sandi</label>
                                        <div class="mb-3">
                                            <input id="password" type="password" class="form-control" placeholder="Kata Sandi..." aria-label="Password" aria-describedby="password-addon" required>
                                            <i onclick="$('#password').get(0).type==('text')?$('#password').get(0).type=('password'):$('#password').get(0).type=('text');$(this).toggleClass('text-primary')" style="transform: translate(-15px,-39px);cursor:pointer" class="bi bi-eye-fill float-end fs-5"></i>
                                            <label for="password-addon"><small class="text-danger">Password salah</small></label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                            <label class="form-check-label" for="rememberMe">Ingat Email</label>

                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Belum Punya Akun?
                                        <a onclick="$('#login').addClass('d-none');$('#register').removeClass('d-none')" class="text-info text-gradient font-weight-bold cursor-pointer">Daftar Sekarang</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Login -->

                        <!-- Register -->
                        <div id="register" style="position: relative;z-index:2" class="col-xl-4 me-xl-1 col-lg-4 col-md-8 d-flex flex-column mx-auto d-none animate__animated animate__fadeInLeft">
                            <div class="card card-plain mt-3 rounded mb-4">
                                <div class="card-header pb-0 text-left bg-transparent mb-0">
                                    <div class="d-none col-12 d-flex justify-content-center mt-2 mb-2 rounded overflow-hidden">
                                        <img class="rounded mb-1" style="object-fit: cover;width:100%;height:5em" src="<?= base_url() ?>vendor/assets/img/logos/mypkl_logo.png" alt="">
                                    </div>
                                    <h3 class="font-weight-bolder text-info text-gradient mb-2">Daftarkan Akun Anda</h3>
                                    <p class="mb-0">Silakan Isi Data Berikut Dengan Benar</p>
                                </div>
                                <div class="card-body mt-1">
                                    <form role="form">
                                        <label>Nama</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Nama" aria-label="Name" aria-describedby="email-addon">
                                        </div>
                                        <label>Alamat Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                        <div class="mb-3">
                                            <label>Kata Sandi</label>
                                            <input type="text" class="form-control" placeholder="Kata Sandi" aria-label="Password" aria-describedby="password-addon">
                                        </div>
                                        <div class="form-check form-check-gradient text-left">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Saya setuju dengan <a href="javascript:;" class="text-info font-weight-bolder">Syarat dan Ketentuan</a>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn bg-gradient-info w-100 my-4 mb-2">Daftarkan Akun</button>
                                        </div>
                                        <p class="text-sm mt-3 mb-0">Sudah punya akun? <a onclick="$('#register').addClass('d-none');$('#login').removeClass('d-none')" class="text-info cursor-pointer font-weight-bolder">Masuk</a></p>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- End Register -->

                        <!-- Image -->
                        <div class="col-md-7 ">
                            <div style="width:75%;" class="oblique position-absolute top-0 h-100 d-lg-block d-none me-n8">
                                <div class="animate__animated animate__fadeInRight animate__slow oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('<?= base_url() ?>vendor/assets/img/kominfo.jpg');background-position:center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="register" class="min-vh-100 mb-1 d-none">
            <div class="container">

            </div>
        </section> -->
    </main>
    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>vendor/assets/js/plugins/jquery.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/js/core/bootstrap.min.js"></script>
</body>
<script>
</script>
</html>