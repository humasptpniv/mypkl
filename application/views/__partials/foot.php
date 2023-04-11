
</body>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>vendor/assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>vendor/assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url() ?>vendor/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>vendor/assets/js/plugins/chartjs.min.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url() ?>vendor/assets/js/soft-ui-dashboard.js?v=1.0.3"></script>
<script src="<?= base_url() ?>vendor/assets/js/plugins/glightbox.min.js"></script>
<script>
    try {
        const glightbox = GLightbox({
            selector: ".glightbox",
        });
    } catch (error) {
        console.log(error)
    }
    <?php echo $this->session->userdata('info-message');
    $this->session->unset_userdata('info-message');
    ?>
</script>

</html>