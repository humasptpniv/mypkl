<main class="main-content" id="main_content">
    <!-- Form Pengajuan -->
    <div class="container-fluid d-flex justify-content-center overflow-scroll">
        <div id="register" style="position: relative;z-index:2" class="d-flex flex-column animate__animated animate__fadeInUp">
            <div style="box-shadow:0 2px 12px 0 rgba(0, 0, 0, 0.16)" class="card card-plain mt-3 rounded-3 mb-4 ">
                <div class="card-header pb-0 text-left bg-transparent mb-0">
                    <div class=" col-12 d-flex justify-content-center mt-2 mb-2 rounded overflow-hidden">
                        <img class=" mb-1" style="width:auto;height:8em" src="<?= base_url() ?>media/img/logo/kominfo-logo.png" alt="">
                    </div>
                </div>
                <div class="card-body mt-1">
                    <form role="form">
                        <div class="row">
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <label class="fs-6">Nama Lengkap</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nama" aria-label="Name" aria-describedby="email-addon">
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <label class="fs-6">Nomor Induk Kependudukan (NIK)</label>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <label class="fs-6">Nomor Induk Mahasiswa (NIM)</label>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <label class="fs-6">Nomor Handphone (HP)</label>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <label class="fs-6">Asal Perguruan Tinggi</label>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label class="fs-6">Kata Sandi</label>
                                    <input type="text" class="form-control" placeholder="Kata Sandi" aria-label="Password" aria-describedby="password-addon">
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="row">
                                    <div class="col-6 justify-content-center justify-content-md-start">
                                        <div class="bg-main"><img height="200px" src="<?= base_url() ?>media/img/logo/kominfo-logo.png" alt=""></div>
                                    </div>
                                    <div class="col-6 justify-content-center justify-content-md-start">
                                        <button type="submit" class="btn btn-ouline-main text-bold px-3 mb-2 float-start btn-outline-dark text-dark">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Register -->
</main>