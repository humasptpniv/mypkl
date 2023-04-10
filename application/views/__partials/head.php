<!DOCTYPE html>
<?php extract($this->session->userdata('usersetting')); ?>
<html style="--main-theme-color:var(--bs-<?= $color ?>);--main-grad:var(--gradient-<? $color ?>)" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>vendor/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url() ?>vendor/assets/img/favicon.png">
  <title>
    <?= $page_title ?>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url() ?>vendor/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url() ?>vendor/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="<?= base_url() ?>vendor/assets/css/aos.css" rel="stylesheet" />
  <!-- Bootstrap Icon -->
  <link href="http://localhost/asset/bi/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Jquery -->
  <script src="<?= base_url() ?>vendor/assets/js/plugins/jquery.min.js"></script>
  <script src="<?= base_url() ?>vendor/assets/js/plugins/aos.js"></script>

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>vendor/assets/css/animate.css" />
  <link rel="stylesheet" href="<?= base_url() ?>vendor/assets/css/glightbox.min.css" />
  <link id="pagestyle" href="<?= base_url() ?>vendor/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>