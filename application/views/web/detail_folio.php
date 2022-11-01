<?php $this->load->view('layout/top') ?>

<?php $this->load->view('layout/nav') ?>
<!-- main content -->
<main class="container mt-2">
    <h2 class="fw-bold text-center"><?php echo $folio->title ?></h2>

    <div class="container">
    <p class="text-dark"><small class="text-muted"> Oleh Sayyid Aziz | Last update <?php echo $folio->created_at ?></small></p>
        <div class="container-fluid">
        <img src="<?php echo base_url('assets/img/') . $folio->image ?>" class="card-img-top mt-3" alt="image" >
        </div>
        <div class="card-body">
            <p class="card-text"><?php echo $folio->paragraf ?></p>
            </a>
        </div>
        <a href="<?php echo base_url('Portfolio') ?>" class="btn btn-info text-light">Kembali</a>
    </div>
</main>

<!-- end -->
<?php $this->load->view('layout/footer') ?>