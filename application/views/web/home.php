<?php $this->load->view('layout/top') ?>

<?php $this->load->view('layout/nav') ?>
<!-- main content -->
<?php foreach ($home as $row) { ?>
    <main class="container">
        <div class="row p-4 pb-0 align-items-center rounded-3">
            <div class="col-md-5 mt-2">
                <img src="<?php echo base_url('assets/img/') . $row->hero ?>" class="img-fluid rounded float-end  shadow-sm" alt="random">
            </div>
            <div class="col-md-6 text-center text-lg-start">
                <h1 class="display-6 fw-bold lh-1 mt-2 mb-3"><?php echo $row->title ?> </h1>
                <p class="col-lg-10 fs-4">
                    <?php echo $row->paragraf ?> </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button class="btn btn-info btn-lg px-4 me-md-2 text-light fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">Show Navigation</button>
                    <a href="<?php echo base_url('Message') ?>" class="btn btn-outline-secondary btn-lg px-4 fw-bold" type="button">Reach Me</a>
                </div>
            </div>

        </div>
    </main>
<?php } ?>
<!-- end -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Navigation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="navbar-nav ms-auto mt-2 text-info text-center align-start mt-lg-0">
                    <li class="nav-item active"><a class="nav-link text-info" href="<?php echo base_url('Home') ?>"><i class="uil uil-home"></i>Home</a></li>
                    <li class="nav-item"><a class="nav-link text-info" href="<?php echo base_url('Portfolio') ?>"><i class="uil uil-bag"></i>Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link text-info" href="<?php echo base_url('Post') ?>"><i class="uil uil-blogger"></i>Post</a></li>
                    <li class="nav-item"><a class="nav-link text-info " href="<?php echo base_url('Message') ?>"><i class="uil uil-message"></i>Message</a></li>
                    <li class="nav-item"><a class="nav-link text-info" href="<?php echo base_url('About') ?>"><i class="uil uil-info-circle"></i>About Me</a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer') ?>