<?php $this->load->view('layout/top') ?>

<?php $this->load->view('layout/nav') ?>
<!-- main content -->
<main class="container mt-2">
    <h2 class="fw-bold text-center">About Me</h2>
    <div class="card">
        <div class="card-body shadow">
            <div class="row">

                <?php
                $avatar = 0;
                foreach ($about as $row) {
                    $avatar = $row->image;
                ?>

                    <div class="col mt-5">
                        <img src="<?php echo base_url('assets/img/') . $row->image ?>" class="img-fluid rounded-circle float-end " data-bs-toggle="modal" data-bs-target="#staticBackdrop" alt="profile" style="position:relative;width:50%;margin-right:25%">
                    </div>
                    <div class="col">
                        <h1 class="display-4 fw-bold lh-1 mb-3"></h1>
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item fw-bold">Name :</li>
                            <li class="list-group-item "><?php echo $row->name ?></li>
                            <li class="list-group-item fw-bold">Address :</li>
                            <li class="list-group-item"><?php echo $row->address ?></li>
                            <li class="list-group-item fw-bold">Whatsapp :</li>
                            <li class="list-group-item"><?php echo $row->phone ?></li>
                            <li class="list-group-item fw-bold">Current Job :</li>
                            <li class="list-group-item"><?php echo $row->current_job ?></li>
                            <li class="list-group-item fw-bold">Email :</li>
                            <li class="list-group-item"><?php echo $row->email ?></li>
                            <li class="list-group-item fw-bold">Graduate :</li>
                            <li class="list-group-item"><?php echo $row->school ?></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="card-body shadow mt-2">
        <h2 class="text-center fw-bold">Beloved</h2>
            <div class="row">
                <?php foreach ($skill as $s) { ?>
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold text-white" style="background-color: <?php echo $s->bgcolor?>;"><?php echo $s->skill ?></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
    </div>
    
    <div class="card-body rounded shadow mt-2">
        <h2 class="text-center fw-bold">Social Media</h2>
        <div class="card-body text-center">
            <div class="row">
                <div class="col">
                    <div class="row">
                    <?php
                foreach ($sosmed as $row) {
                ?>
                        <div class="col">
                        <a href="<?php echo $row->link?>" target="_blank" class="text-decoration-none"><i class="<?php echo $row->sosmed?>"></i></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

 




</main>

<!-- end -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="<?php echo base_url('assets/img/') . $avatar ?>" class=" rounded float-end " data-bs-toggle="modal" data-bs-target="#staticBackdrop" alt="profile" style="position:relative;width:100%;margin-right:0">
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer') ?>