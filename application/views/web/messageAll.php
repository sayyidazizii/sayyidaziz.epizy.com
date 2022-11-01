<?php $this->load->view('layout/top') ?>

<?php $this->load->view('layout/nav') ?>
<!-- main content -->
<main class="container mt-2">
    <h2 class="fw-bold text-center">All Message</h2>
    <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search Username.." name="search" value="">
          <button class="btn btn-info text-light" type="submit">Search</button>
        </div>
      </form>
    <div class="card mb-2">
        <div class="card-body shadow ">
            <a href="<?php echo base_url('/Message') ?>" class="btn btn-info text-light">Kembali</a>
            <div class="row row-cols-1 row-cols-md-4 g-1 mt-2">

                <?php
                $no = $this->uri->segment('3') + 1;
                foreach ($message as $row) {
                ?>
                    <div class="col">
                        <div class="card  h-100">
                            <div class="card-body">
                                <h5 hidden><?php echo $no++;  ?></h5>
                                <p class="card-title"><i><?php echo $row['username'] ?></i></p>
                                <p class="card-text"><?php echo $row['message'] ?></p>
                                </a>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <small class="text-muted">Created at <?php echo $row['created_at'] ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php echo $pagination; ?>
</main>

<!-- end -->
<?php $this->load->view('layout/footer') ?>