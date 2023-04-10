<?php extract($this->session->userdata('usersetting'));?>
<main id="main_content" style="transition: all linear 200ms;" class="main-content position-relative max-height-vh-100 h-100  border-radius-lg ">
  <style>
    .card:hover{
        transform: scale(1)!important;
    }
  </style>

    <div  class="container-fluid">
        <div class="animate__animated animate__fadeInLeft page-header min-height-300 border-radius-xl mt-4" style="background-image: url('http://localhost/mypkl/vendor/assets/img/curved-images/curved0s.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-<?=$color?> opacity-6"></span>
        </div>
        <div   class="card card-body blur shadow-blur mx-4 mt-n10 overflow-hidden animate__animated animate__fadeInUp">
            <div class="row gx-4">
                <div class="col-auto animate__animated animate__fadeInRight">
                    <div class="avatar avatar-xl position-relative">
                        <img src="http://localhost/mypkl/vendor/assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto ">
                    <div class="h-100">
                        <h5 class="mb-3">
                            <?=$this->session->userdata('nama')?>
                        </h5>
                        
                        <ul class="list-group bg-transparent">
                            <li class="list-group-item bg-transparent border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nama Lengkap:</strong> &nbsp; <?=$this->session->userdata('nama')?></li>
                            <li class="list-group-item bg-transparent border-0 ps-0 text-sm"><strong class="text-dark">NIM:</strong> &nbsp; <?=$this->session->userdata('nim')?></li>
                            <li class="list-group-item bg-transparent border-0 ps-0 text-sm"><strong class="text-dark">NIK:</strong> &nbsp; <?=$this->session->userdata('nik')?></li>
                            <li class="list-group-item bg-transparent border-0 ps-0 text-sm"><strong class="text-dark">Nama pengguna:</strong> &nbsp; <?=$this->session->userdata('username')?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>