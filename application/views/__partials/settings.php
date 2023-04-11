<?php extract($this->session->userdata('usersetting')); ?>
<main id="main_content" class="main-content">
    <div class="container-fluid mb-4">
        <div style="height:calc(100vh - 7rem);box-shadow:0 2px 12px 0 rgba(0, 0, 0, 0.16);width:100%" class="card animate__animated animate__fadeInDown  px-3 card-plain mt-3 rounded-3 mb-4 pt-0 bg-white overflow-hidden">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('http://localhost/mypkl/vendor/assets/img/curved-images/curved0s.jpg'); background-position-y: 50%;">
                <span data-color="<?= $color ?> " class="mask bg-grad-main main-bg-color opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n10 overflow-hidden animate__animated animate__fadeInUp">
                <div class="fixed-plugin">
                    <div class="col-auto animate__animated animate__fadeIn">
                        <div class="w-100 mt-2 ">
                            <div class="card-body pt-sm-3 pt-0">
                                <!-- Sidebar Backgrounds -->
                                <div class="row justify-content-evenly">
                                    <div class="col">
                                        <div>
                                            <h6 class="mb-0">Warna Tema :</h6>
                                        </div>
                                        <div href="javascript:void(0)" class="switch-trigger background-color">
                                            <div class="badge-colors my-2 text-start">
                                                <span class="badge filter bg-gradient-primary <?php if ($color == 'primary') {
                                                                                                    echo 'active';
                                                                                                } ?>" onclick="sidebarColor(`primary`);$(this).addClass('active');$(this).siblings().removeClass('active')"></span>
                                                <span class="badge filter bg-gradient-dark <?php if ($color == 'dark') {
                                                                                                echo 'active';
                                                                                            } ?>" onclick="sidebarColor(`dark`);$(this).addClass('active');$(this).siblings().removeClass('active')"></span>
                                                <span class="badge filter bg-gradient-info <?php if ($color == 'info') {
                                                                                                echo 'active';
                                                                                            } ?>" onclick="sidebarColor(`info`);$(this).addClass('active');$(this).siblings().removeClass('active')"></span>
                                                <span class="badge filter bg-gradient-success <?php if ($color == 'success') {
                                                                                                    echo 'active';
                                                                                                } ?>" onclick="sidebarColor(`success`);$(this).addClass('active');$(this).siblings().removeClass('active')"></span>
                                                <span class="badge filter bg-gradient-warning <?php if ($color == 'warning') {
                                                                                                    echo 'active';
                                                                                                } ?>" onclick="sidebarColor(`warning`);$(this).addClass('active');$(this).siblings().removeClass('active')"></span>
                                                <span class="badge filter bg-gradient-danger <?php if ($color == 'danger') {
                                                                                                    echo 'active';
                                                                                                } ?>" onclick="sidebarColor(`danger`);$(this).addClass('active');$(this).siblings().removeClass('active')"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Sidenav Type -->
                                        <div class="">
                                            <h6 class="mb-1">Tipe Sidebar :</h6>
                                        </div>
                                        <div class="w-100">
                                            <?php
                                            if ($sidebar_type == 'bg-transparent') {
                                                echo '<button data-color="' . $color . '" class="btn btn-outline-main w-100 bg-grad-main px-3 mb-2 active  " data-class="bg-transparent" onclick="sidebarType(this)">Transparan</button>
                                            <button data-color="' . $color . '" class="btn btn-outline-main w-100 px-3 mb-2 " data-class="bg-white" onclick="sidebarType(this)">Solid</button>';
                                            } else {
                                                echo '<button data-color="' . $color . '" class="btn btn-outline-main w-100 px-3 mb-2  " data-class="bg-transparent" onclick="sidebarType(this)">Transparan</button>
                                            <button data-color="' . $color . '" class="btn btn-outline-main active w-100 bg-grad-main px-3 mb-2 " data-class="bg-white" onclick="sidebarType(this)">Solid</button>';
                                            }
                                            ?>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Navbar Fixed -->
                                        <div class="d-flex flex-md-row flex-row">
                                            <div class="form-check form-switch ps-0">
                                                <input <?= $navbar_type ?> class="form-check-input mt-1 ms-auto" type="checkbox" onclick="$(this).prop('checked')?$('#navbar-type').val('checked'):$('#navbar-type').val('');">
                                            </div> <span>
                                                <h6 class="mb-0 ms-2">Navbar Statis </h6>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="text-sm d-block mt-2">Perubahan akan disimpan ketika anda menekan tombol "Simpan"</p>
                                    <form action="<?= base_url('index.php/') ?>setting/save_setting" method="post" id="f_color">
                                        <input type="hidden" name="sidebar-type" id="sidebar-type" value="<?= $sidebar_type ?>">
                                        <input type="hidden" name="navbar-type" id="navbar-type" value="<?= $navbar_type ?>">
                                        <input type="hidden" name="id_setting" value="<?= $id_setting ?>">
                                        <input type="hidden" name="current" value="<?= $this->uri->segment(1) ?>/<?= $this->uri->segment(2) ?>">
                                        <button type="submit" class="btn main-bg-color text-light px-3 fw-bold mb-2 float-start" data-class="bg-white">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>