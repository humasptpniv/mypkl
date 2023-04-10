<link rel="stylesheet" href="<?= base_url() ?>/vendor/assets/css/datatables/datatables.min.css">
<script src="<?= base_url() ?>/vendor/assets/js/plugins/datatables/datatables.js"></script>
<main id="main_content" class="main-content">
    <section id="daftar_surat">
        <div class="container-fluid py-4  animate__animated animate__fadeInUp">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4 me-2">
                        <div class="card-header pb-0">
                            <h6>Daftar Surat Permohonan PKL</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div  class="table-responsive p-3">
                                <table  id="tabel_surat" class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 w-1">No</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Siswa</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NIM</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody style="height: 200px;overflow-y:auto">

                                        <?php
                                        for ($i = 1; $i < 9; $i++) {
                                            echo "<tr>
   <td class='opacity-7'>
       $i
   </td>
   <td class='opacity-7'>
       <div class='d-flex px-2 py-1'>
           <div>
               <img src='" . base_url() . "vendor/assets/img/team-2.jpg' class='avatar avatar-sm me-3' alt='user1'>
           </div>
           <div class='d-flex flex-column justify-content-center'>
               <h6 class='mb-0 text-sm'>John Michael</h6>
               <p class='text-xs text-secondary mb-0'>john@creative-tim.com</p>
           </div>
       </div>
   </td>
   <td class='opacity-7'>
       <p class='text-xs font-weight-bold mb-0'>Manager</p>
       <p class='text-xs text-secondary mb-0'>Organization</p>
   </td class='opacity-7'>
   <td class='align-middle text-center'>
       <span class='text-secondary text-xs font-weight-bold'>23/04/18</span>
   </td class='opacity-7'>
   <td class='align-middle text-center text-sm'>
       <span class='badge badge-sm bg-gradient-success'>Online</span>
   </td>
   <td class='align-middle opacity-7'>
       <a href='javascript:;' class='text-secondary font-weight-bold text-xs' data-toggle='tooltip' data-original-title='Edit user'>
           Edit
       </a>
   </td>
</tr>";
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    $('#tabel_surat').DataTable({
        "language": {
            "url": "<?= base_url() ?>/vendor/assets/js/plugins/datatables/indonesian.json"
        }
    })
</script>