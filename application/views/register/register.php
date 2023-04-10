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

<body >
    <section id="register" class="min-vh-100 mb-1">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('<?= base_url() ?>vendor/assets/img/curved-images/curved14.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-5 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="text-center mb-0 mt-3">
                            <h5>Daftarkan Akun</h5>
                            <p>Silakan isi data berikut dengan benar!</p>
                        </div>
                        <div class="card-body mt-0">
                            <form role="form text-left">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nama" aria-label="Name" aria-describedby="email-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                </div>
                                <div class="mb-3">
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
                                <p class="text-sm mt-3 mb-0">Sudah punya akun? <a href="<?=base_url('index.php/')?>login" class="text-info font-weight-bolder">Masuk</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>vendor/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>vendor/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url() ?>vendor/assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>