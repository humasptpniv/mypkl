<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Media Uploader - PT Perkebunan Nusantara IV</title>
    <meta content="By Prayogi Wiranata - Humas PTPN IV" name="description">
    <meta content="humasptpniv" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('vendor/assets/img') ?>/icons/Logo_PTPN4.png" rel="icon">
    <link href="<?= base_url('vendor/assets/img') ?>/icons/Logo_PTPN4.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="<?= base_url('vendor/') ?>assets/fonts/">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('vendor/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('vendor/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <script src="<?= base_url('vendor/assets/') ?>js/jquery-3.6.0.min.js"></script>
    <link href="<?= base_url('vendor/assets/') ?>css/dropzone.css" rel="stylesheet">
    <script src="<?= base_url('vendor/assets/') ?>js/dropzone.js"></script>
    <!-- Template Main CSS File -->
    <link href="<?= base_url('vendor/') ?>assets/css/style.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="<?= base_url('vendor/') ?>assets/js/jquery-3.6.0.min.js"></script>
</head>


<body>

    <!-- ======= Header ======= -->
    <header style="background-color:var(--main-bg-color)" id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1> -->
            <div class="d-inline align-items-center justify-content-center">
                <a href="<?= base_url('index.php/home') ?>" class="logo me-auto text-light fw-bold pe-2"><img style="transform: translateY(-25%);"  src="<?= base_url('vendor/assets/img') ?>/icons/Logo_PTPN4.png" alt="" class="img-fluid ms-3"> PTPN IV</a>
            </div>
            <nav id="navbar" class="navbar bg-primary">

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" value="rad'.$i.'" id="rad'.$i.'">
        <label for="rad'.$i.'" class="btn btn-outline-primary">Radio '.$i.'</label>
    </div>
    <section id="portfolio" class="portfolio section-bg mt-3 pt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <?php  ?>
                <h2>Media Uploader</h2>
            </div>
            <div style="background-color: var(--main-color-violet);" class="rounded pb-5 ps-2 pe-2">
                <h3 class="text-light text-center lead pt-3">Pilih Folder</h3>
                <ul id="portfolio-flters" class="d-flex justify-content-center rounded" data-aos="fade-up" data-aos-delay="100">
                    <?php
                    $daftar_distrik = array_flip($daftar_distrik);
                    foreach ($fname as $key => $value) {
                        if (isset($daftar_distrik[$value])) {
                            if ($key == 0) {
                                $checked = 'checked';
                            } else {
                                $checked = null;
                            }
                            echo '<li class="text-light rounded-pill curpo p-1">
                        <label for="' . $value . '" class="curpo p-2 pt-2 pb-1"><input form="image-upload" class="curpo " type="radio"  value="' . $value . '" name="folder" id="' . $value . '" autocomplete="off" ' . $checked . '> ' . $daftar_distrik[$value] . '</label></li>';
                        }
                    }
                    ?>
                </ul>

                <form style="border:dashed 1px grey" action="uploader/image_uploader" enctype="multipart/form-data" class="dropzone form form-control rounded h-25 pt-2" id="image-upload" method="POST">
                    <input id="fold" type="hidden" name="folder" value="">
                </form>
            </div>
        </div>
    </section>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Arsha</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>



                    <div class="container footer-bottom clearfix">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>



                    </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('vendor/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

<script type="text/javascript">
    Dropzone.options.imageUpload = {
        autoProcessQueue: false,
        maxFilesize: 100,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        init: function() {
            let mdz = this;
            $('#portfolio-flters>li label').click(function(e) {
                mdz.removeAllFiles();
                if ($('#dz-plac').is(':empty')) {
                    $('#dz-plac').html('<div  style="height:2px;transform:translateY(100%);width:max-content;padding-bottom:20px;border: solid 3px grey;border-top:none;border-bottom-right-radius:5px;border-bottom-left-radius:5px;" ><div class="drop-placeholder bi bi-arrow-down fs-2 fw-bold text-secondary"></div></div><br><h3 class="text-secondary lead mt-2">Drop Files Here</h3>');
                }
            });
            this.on('drop', function(file, resp) {
                $('#fold').val($('input[name="folder"]:checked').val())
                console.log("OK")
                $('#dz-plac').html('')
                setTimeout(() => {
                    console.log($('#fold').val());
                    mdz.processQueue();
                }, 100);
            });
        }
    };

    $('#portfolio-flters>li').click(function() {
        $(this).addClass('filter-active');
        $(this).siblings().removeClass('filter-active');
        $('#fold').val($('input[name="folder"]:checked').val())
    })
</script>

</html>