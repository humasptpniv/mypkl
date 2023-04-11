<main class="main-content" id="main_content">
    <!-- Form Pengajuan -->
    <div class="container-fluid d-flex justify-content-center">
        <div data-aos='fade-down' data-aos-duration="1200" style="position: relative;z-index:2" class="d-flex flex-column">
            <div style="box-shadow:0 2px 12px 0 rgba(0, 0, 0, 0.16)" class="card card-plain mt-3 rounded-3 mb-4 ">
                <div class="card-header pb-0 text-left bg-transparent mb-0">
                    <div class=" col-12 d-flex justify-content-center mt-2 mb-2 rounded overflow-hidden">
                        <img class=" mb-1" style="width:auto;height:8em" src="<?= base_url() ?>media/img/logo/kominfo-logo.png" alt="">
                    </div>
                </div>
                <div class="card-body mt-1">
                    <form role="form" method="post" action="<?= base_url('index.php/') ?>user/ajukan_surat">
                        <div class="row">
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <label class="fs-6">Nama Lengkap</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="nama_lengkap" value="<?=$nama_lengkap?>" required>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <div class="row">
                                    <div class="col-8">
                                        <label class="fs-6">Tempat lahir</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="tl" value="<?=$tl?>" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label class="fs-6 d-block d-md-none text-sm">Tgl. Lahir</label>
                                        <label class="fs-6 d-none d-md-block">Tanggal Lahir</label>
                                        <div class="mb-3">
                                            <input type="date" class="form-control" name="tgl" value="<?=$tgl?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <label class="fs-6">Nomor Induk Kependudukan (NIK)</label>
                                <div class="mb-3">
                                    <input type="number" class="form-control" name="nik" value="<?=$nik?>" required>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <label class="fs-6">NIM / NISN</label>
                                <div class="mb-3">
                                    <input type="number" class="form-control" name="nim_nisn" value="<?=$nim_nisn?>" required>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <label class="fs-6">Alamat</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="alamat" value="<?=$alamat?>" required>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <label class="fs-6">Asal Perguruan Tinggi</label>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="apt" value="<?=$apt?>" required>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label class="fs-6">Jurusan</label>
                                    <input type="text" class="form-control" name="jur" value="<?=$jur?>" required>
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label class="fs-6">Pasfoto</label>
                                    <input type="file" class="form-control" name="fpsp" required accept="image/*">
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label class="fs-6">Foto KTP</label>
                                    <input type="file" class="form-control" name="fktp" required accept="image/*">
                                </div>
                            </div>
                            <div class="col-sm-11 col-md-6 col-lg-6">
                                <div class="mb-3">
                                    <label class="fs-6">Foto KTM</label>
                                    <input type="file" class="form-control" name="fktm" required accept="image/*">
                                </div>
                            </div>
                            <div class="col-6 d-flex mt-2">
                                <div class="justify-content-start">
                                    <p>Pastikan semua form terisi</p>
                                </div>
                            </div>
                            <div class="col-6 mt-2">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-outline-main fw-bold px-3 float-start">Kirim</button>
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