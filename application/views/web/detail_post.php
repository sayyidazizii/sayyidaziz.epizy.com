<?php $this->load->view('layout/top') ?>

<?php $this->load->view('layout/nav') ?>
<!-- main content -->
<main class="container mt-2">
    <h2 class="fw-bold text-center"><?php echo $post->title ?></h2>

    <div class="container">
        <p class="text-dark"><small class="text-muted"> Oleh Sayyid Aziz | Last update <?php echo $post->created_at ?></small></p>
        <div class="container-fluid">
            <!--<div class="row">
                <div class="col">-->
                <img src="<?php echo base_url('assets/img/') . $post->image ?>" class="card-img-top mt-3" alt="image" style="position: relative;width:70%;margin-left:15%">
                <!--</div>
                <div class="col">-->
                <p class="card-text"><?php echo $post->paragraf ?></p>
              <!-- % <--!</div>-->
            </div>
           
        </div>
        <a href="<?php echo base_url('Post') ?>" class="btn btn-info text-light">Kembali</a>
    </div>
</main>

<!-- end -->
<?php $this->load->view('layout/footer') ?>