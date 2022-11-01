<?php $this->load->view('layout/top') ?>

<?php $this->load->view('layout/nav') ?>
<!-- main content -->
<main class="container mt-2">
  <h2 class="fw-bold text-center">Portfolio</h2>
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="" method="POST">
        <div class="input-group mb-3">
          <select class="form-select" name="search">
            <option value="<?php echo $search ?>"><?php echo $search ?></option>
            <option value="semua">semua</option>
            <option value="terbaru">terbaru</option>
            <option value="lampau">lampau</option>
          </select>
          <button class="btn btn-info text-light" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-4 g-1">
    <?php foreach ($portfolio as $row) { ?>
      <div class="col">
        <div class="card shadow h-100">
          <img src="<?php echo base_url('assets/img/') . $row->image ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="<?php echo base_url('Portfolio/detail/') . $row->id ?>" class="text-decoration-none text-dark">
              <h5 class="card-title"><?php echo $row->title ?></h5>
              <p class="card-text"><?php echo $row->slug ?></p>
            </a>
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col">
                <small class="text-muted">Last update <?php echo $row->created_at ?></small>
              </div>
              <div class="col">
                <a href="<?php echo base_url('Portfolio/detail/') . $row->id ?>" class="btn btn-info text-light">read more</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</main>

<!-- end -->
<?php $this->load->view('layout/footer') ?>