<?php extract($this->session->userdata('usersetting')); ?>
<style>
  .sidenav.bg-white {
    box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.16) !important;
  }

  .g-sidenav-show:not(.g-sidenav-pinned) .sidenav.bg-transparent {
    border-right-width: 0px !important;
    border-left-width: 0px !important;
  }

  @media (min-width: 768px) {
    .g-sidenav-pinned #midcol,.g-sidenav-pinned #lastcol {
      opacity: 1!important;
    }
  }
  .g-sidenav-pinned #midcol,
  .g-sidenav-pinned #lastcol {
    opacity: 0;
    transition: opacity ease-in 100ms;
  }

  .g-sidenav-show:not(.g-sidenav-pinned) #midcol,
  .g-sidenav-show:not(.g-sidenav-pinned) #lastcol {
    transition: opacity ease-in 800ms;
    opacity: 1;
  }

  .main-text-color {
    color: var(--main-theme-color) !important;
  }

  .main-bg-color {
    background-color: var(--main-theme-color) !important;
  }

  .main-border-color {
    border-color: var(--main-theme-color) !important;
  }

  .bg-grad-main {
    background-image: var(--main-grad);
  }

  .btn-outline-main {
    border-color: var(--main-theme-color) !important;
    color: var(--main-theme-color) !important;
  }

  button[class*='btn-outline-'].active {
    color: white !important;
  }
</style>

<body class="bg-gray-100 g-sidenav-show <?php
                                        if ($navbar_type == 'checked') {
                                          echo "nav-fix";
                                        }
                                        ?>">
  <input form="f_color" type="hidden" name="color" id="color" value="<?= $color ?>">
  <script>
    if ($(window).width() > 991.98) {
      $('body').addClass('g-sidenav-pinned')
    } else {
      $('body').removeClass('g-sidenav-pinned')
    }
    AOS.init();
  </script>

  <aside style="transition: width linear 300ms!important;overflow:hidden;" class="sidenav order-0 navbar navbar-vertical <?= $sidebar_type ?> navbar-expand-xs  border-radius-xl my-3 fixed-start ms-3 position-fixed animate__animated animate__fadeInLeft" id="sidenav-main">
    <div class="sidenav-header bg-white overflow-hidden">
      <div class="row h-100 align-items-center">
        <div class="col-4 d-flex align-items-center">
          <div style="width: 4rem;height:4rem;" data-color="<?= $color ?> " class="mask bg-grad-main bg-gradient-<?= $color ?> opacity-6 mt-2 mb-0 ms-2 rounded d-flex align-items-center justify-content-center">
            <div class="rounded-circle nav-shadow bg-white overflow-hidden"><img style="object-fit: cover;" width="60px" height="60px" src="<?= base_url() ?>media/img/logo/mypkl_logo.png" alt="ig profile" srcset=""></div>
          </div>
        </div>
        <div class="col-8 d-flex flex-column ps-2">
          <strong class="mb-1">My PKL</strong>
          <span class="main-text-color text-sm fw-bold mb-0 pb-0">Halo, <?= explode(' ', $this->session->userdata('userdata')['nama'])[0] ?></span>
          <span class="text-sm fw-light font-italic mt-0 pt-0"><?= $this->session->userdata('userdata')['username'] ?></span>
        </div>
      </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Menu</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= @$m1 ?>" href="<?= base_url("index.php/$role") ?>/dashboard">
            <div class="icon icon-shape icon-sm pb-2 lg-3 pb-xl-3 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-speedometer fs-6 "></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard </span>
          </a>
        </li>
        <?php
        if ($role == 'admin') {
          echo "
            <li class='nav-item'>
            <a class='nav-link " . @$m2 . "' href='" . base_url("index.php/$role") . "/daftar_surat'>
              <div class='icon icon-shape icon-sm pb-2 lg-3 pb-xl-3 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center'>
                <i class='bi bi-clipboard-data fs-6 fw-bold text-dark'></i>
              </div>
              <span class='nav-link-text ms-1'>Daftar Surat</span>
            </a>
          </li>
            ";
        } else if ($role == 'user') {
          echo "<li class='nav-item mt-3'>
            <a class='nav-link " . @$m2 . "' href='" . base_url("index.php/$role") . "/form_pengajuan'>
              <div class='icon icon-shape icon-sm pb-2 lg-3 pb-xl-3 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center'>
                <i class='bi bi-file-text fs-6 fw-bold text-dark'></i>
              </div>
              <span class='nav-link-text ms-1'>Pengajuan PKL</span>
            </a>
          </li>";
          echo "<li class='nav-item mt-3'>
            <a class='nav-link " . @$m3 . "' href='" . base_url("index.php/$role") . "/pengajuan_saya'>
              <div class='icon icon-shape icon-sm pb-2 lg-3 pb-xl-3 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center'>
                <i class='bi bi-envelope-fill fs-6 align-self-center fw-bold text-dark'></i>
              </div>
              <span class='nav-link-text ms-1'>Surat Saya</span>
            </a>
          </li>";
        } else {
        }
        ?>

        <li class="nav-item mt-5">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Halaman Akun</h6>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?= @$m6 ?>" href="<?= base_url("index.php/$role") ?>/profil">
            <div class="icon icon-shape icon-sm pb-2 lg-3 pb-xl-3 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-person-fill fw-bold fs-5"></i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url("index.php/$role") ?>/pengaturan" class="nav-link <?= @$m7 ?>">
            <div class="icon icon-shape icon-sm pb-2 lg-3 pb-xl-3 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-gear-fill fw-bold fs-6"></i>
            </div>
            <span class="nav-link-text ms-1">Pengaturan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?= @$m8 ?>" href="<?= base_url('index.php/') ?>login">
            <div class="icon icon-shape icon-sm pb-2 lg-3 pb-xl-3 shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-power fw-bold fs-5 text-danger"></i>
            </div>
            <span class="nav-link-text ms-1">Keluar</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <!-- Navbar -->
  <div style="z-index: 999;" class="nav-wrapper container-fluid w-100 p-4 pe-1 pe-md-3 pt-3 ps-1 pe-2  ps-md-4 pe-lg-4 ms-lg-0">
    <nav style="transition: all ease-in 300ms!important;" class="navbar rounded-3 position-relative row main-content me-0 me-md-2 me-lg-0 bg-white animate__animated animate__fadeInDown">
      <div class="col-3">
        <div class="row justify-content-start flex-row">
          <div class="col-3">
            <!-- Button Collapse/Expand Sidebar -->
            <div id="iconNavbarSidenav" style="width: 2rem;height:2rem;z-index:999;box-shadow:0 2px 12px 0 rgba(0, 0, 0, 0.16);background:white;" class="text-dark rounded-circle d-flex justify-content-center align-items-center cursor-pointer me-3">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </div>
          <div class="col-9 p-0 d-flex align-items-center">
            <!-- Breadcrumbs -->
            <div class=" d-none d-lg-flex align-self-center flex-row">
              <a href="<?= base_url("index.php/{$this->uri->segment(1)}") ?>" class="breadcrumb-item main-text-color"><?php echo ucfirst($this->uri->segment(1)) ?></a>
              <span class="breadcrumb-item text-sm text-dark active" aria-current="page"><?= ucwords(str_replace('_', ' ', $this->uri->segment(2))) ?></span>
            </div>
          </div>
        </div>
      </div>
      <div id="midcol" class="col-6">
        <div class="d-flex justify-content-center">
          <div class="col-12 w-100 text-center">
            <!-- Page Title -->
            <div class="d-none d-md-block">
              <h5 class="text-bold text-center text-secondary "><?= ucwords($page_title) ?></h5>
            </div>
          </div>
        </div>
      </div>
      <div id="lastcol" class="col-3">
        <div class="row justify-content-end flex-row">
          <div class="col-4 d-flex flex-row justify-content-end">
            <div onclick="$('.dropdown-menu').toggleClass('dropdown-active');" class="nav-item me-4 d-flex align-items-center cursor-pointer ">
              <img width="30px" height="30px" src="<?= base_url() ?>media/img/logo/mypkl_logo.png" alt="profile-img" class="rounded-circle profile-img"><span class=" text-<?= $color ?>" class="text-main" style="position: absolute;top:-43px;margin-left:19px;text-align:center;font-size:39pt;font-weight:bolder">.</span>
            </div>
            <a href="<?= base_url("index.php/$role") ?>/pengaturan" class="nav-link text-body p-0 notif">
              <i class="bi bi-gear-fill fixed-plugin-button-nav cursor-pointer"></i>
            </a>
            <a href="<?= base_url("index.php/login/logout") ?>" class="nav-link text-body ms-2 p-0 notif">
              <i class="bi bi-power fw-bolder cursor-pointer"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <ul class="dropdown-menu animate__animated animate__fadeInDown dropdown-menu-end px-2 py-3  border-1 border-<?= $color ?>" aria-labelledby="dropdownMenuButton">
    <li class="d-flex flex-row justify-content-between pe-2 ps-2 mb-2 ">
      <span>Notifikasi</span>
      <span class="flex-row d-flex d-md-none">
        <a href="<?= base_url("index.php/$role") ?>/pengaturan" class="nav-link text-body p-0 notif">
          <i class="bi bi-gear-fill fixed-plugin-button-nav cursor-pointer "></i>
        </a>
        <a href="<?= base_url("index.php/logout") ?>" class="nav-link text-body p-0 ms-3 notif">
          <i class="bi bi-power fw-bolder cursor-pointer "></i>
        </a>
      </span>
    </li>
    <li class="mb-2 animate__animated animate__fadeInDown">
      <a class="dropdown-item border-radius-md" href="javascript:;">
        <div class="d-flex py-1">
          <div class="my-auto">
            <img src="<?= base_url() ?>vendor/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="text-sm font-weight-normal mb-1">
              <span class="font-weight-bold">New message</span> from Laur
            </h6>
            <p class="text-xs text-secondary mb-0">
              <i class="bi bi-clock me-1"></i>
              13 minutes ago
            </p>
          </div>
        </div>
      </a>
    </li>
    <li class="mb-2 animate__animated animate__fadeInDown">
      <a class="dropdown-item border-radius-md" href="javascript:;">
        <div class="d-flex py-1">
          <div class="my-auto">
            <img src="<?= base_url() ?>vendor/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="text-sm font-weight-normal mb-1">
              <span class="font-weight-bold">New album</span> by Travis Scott
            </h6>
            <p class="text-xs text-secondary mb-0">
              <i class="bi bi-clock me-1"></i>
              1 day
            </p>
          </div>
        </div>
      </a>
    </li>
    <li class="animate__animated animate__fadeInDown">
      <a class="dropdown-item border-radius-md" href="javascript:;">
        <div class="d-flex py-1">
          <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>credit-card</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(453.000000, 454.000000)">
                      <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                      <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="text-sm font-weight-normal mb-1">
              Payment successfully completed
            </h6>
            <p class="text-xs text-secondary mb-0">
              <i class="bi bi-clock me-1"></i>
              2 days
            </p>
          </div>
        </div>
      </a>
    </li>
  </ul>