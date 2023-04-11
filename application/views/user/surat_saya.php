<?php extract($this->session->userdata('userdata')); ?>
<main class="main-content" id="main_content">
    <!-- Surat Saya -->
    <div class="ps-1 pe-2 px-md-0 px-md-4 d-flex justify-content-center ">
        <div  style="height:calc(100vh - 6rem);box-shadow:0 2px 12px 0 rgba(0, 0, 0, 0.16);width:100%" class="card card-plain mt-3 rounded-3 mb-4 pt-0 bg-white overflow-hidden">
            <div class="d-flex flex-row rounded-bottom navbar mt-0 mb-2 justify-content-start">
                <div class="justify-content-start ms-2">
                    <div class="d-none d-md-flex flex-row w-100 mt-2">
                        <div class="justify-content-center justify-content-md-start ms-lg-2 rounded ">
                            <a data-gallery='portfolioGallery' href="<?= base_url() ?>vendor/assets/img/ivancik.jpg" class="glightbox portfolio-lightbox preview-link">
                                <img class="rounded" width="100vw" height="100vw" style="object-fit:cover" src="<?= base_url() ?>vendor/assets/img/ivancik.jpg" alt="">
                            </a>
                        </div>
                        <div class="ms-4">
                            <h4 class="fw-bold"><?= 'Agus Hapsari' ?></h4>
                            <h6 class="fw-bold"><?= 'Politeknik Negeri Medan' ?></h6>
                            <h6 class="fw-bold"><?= 'Teknik Komputer' ?></h6>
                        </div>
                    </div>
                    <div class="d-block d-md-none">
                        <div class="justify-content-center mx-auto rounded ">
                            <a data-gallery='portfolioGallery' href="<?= base_url() ?>vendor/assets/img/ivancik.jpg" class="glightbox portfolio-lightbox preview-link">
                                <img class="mb-1 ms-6 ps-1 rounded" width="90vw" height="90vw" style="object-fit:cover" src="<?= base_url() ?>vendor/assets/img/ivancik.jpg" alt="">
                            </a>
                        </div>
                        <h5 class="fw-bold"><?= 'Agus Hapsari Andalas' ?></h5>
                        <p class="fw-bold text-sm"><?= 'Politeknik Negeri Medan' ?></p>
                        <p class="fw-bold text-sm"><?= 'Teknik Komputer Dan Jaringan' ?></p>
                    </div>
                </div>
            </div>
            <div class="card-body mt-1 table-responsive px-0">
                <div class="mt-1">
                    <div class="table-responsive">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead></thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Nama Lengkap</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">LOREM IPSUM DOLOR SIT AMET CONSTECTEUR</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Tempat, Tanggal Lahir</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">LOREM IPSUM DOLOR SIT AMET CONSTECTEUR</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">NIK</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">LOREM IPSUM DOLOR SIT AMET CONSTECTEUR</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">NIM / NISN</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">LOREM IPSUM DOLOR SIT AMET CONSTECTEUR</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Alamat</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">LOREM IPSUM DOLOR SIT AMET CONSTECTEUR</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Asal Perguruan Tinggi</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">LOREM IPSUM DOLOR SIT AMET CONSTECTEUR</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Jurusan</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">LOREM IPSUM DOLOR SIT AMET CONSTECTEUR</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Pasfoto</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <div>
                                            <img src="<?= base_url() ?>vendor/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Foto KTP</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <div>
                                            <img src="<?= base_url() ?>vendor/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Foto KTM</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <div>
                                            <img src="<?= base_url() ?>vendor/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Surat Saya -->
<script>
    $('body').css('overflow-y','hidden');
</script>
</main>