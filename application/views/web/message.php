<?php $this->load->view('layout/top') ?>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->

<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">

<?php $this->load->view('layout/nav') ?>
<!-- main content -->
<main class="container mt-2">
    <h2 class="fw-bold text-center">Send Your Message </h2>
    <div class="card">
        <div class="card-body shadow">
            <?php echo form_open("Message/insert", array('enctype' => 'multipart/form-data')); ?>
            <input class="form-control mb-2" name="username" type="text" placeholder="username" required>
            <div class="form-floating">
                <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Message</label>
            </div>
            <div class="row">
                <div class="col" style="position:relative;margin-left:75%;">
                    <button type="submit" class="btn btn-info mt-2"><i class="fas fa-arrow-right text-light"></i></button>
                </div>
            </div>
            <form>

                <a href="<?php echo base_url('/Message/All') ?>" class="text-info">Lihat Daftar Message </a>
        </div>
    </div>
</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
<!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>


<!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
    di dalam session sukses  -->
<?php if (@$_SESSION['sukses']) { ?>
    <script>
        swal("Pesan Terkirim!", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses']);
} ?>
<!-- end -->
<?php $this->load->view('layout/footer') ?>