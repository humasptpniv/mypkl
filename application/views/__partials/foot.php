<script src="<?= base_url() ?>vendor/assets/js/plugins/glightbox.min.js"></script>

</body>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>vendor/assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>vendor/assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url() ?>vendor/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>vendor/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?= base_url() ?>vendor/assets/js/plugins/chartjs.min.js"></script>
 <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="<?= base_url() ?>vendor/assets/js/soft-ui-dashboard.js?v=1.0.3"></script>
 <script>
      /**
     * Initiate  glightbox
     */
    try {
        const glightbox = GLightbox({
            selector: ".glightbox",
        });
    } catch (error) {}
        sidebarColor('<?=$color?>')
    
 </script>
</html>