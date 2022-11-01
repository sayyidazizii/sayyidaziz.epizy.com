
 <?php $this->load->view('system/top')?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('system/sidebar')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <?php $this->load->view('system/navbar')?>
                     <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <body id="page-top">
<!-- alert session -->
<?php $sukses = $this->session->flashdata('sukses'); ?>
                <?php if (isset($sukses)) : ?>
                    <div class="alert alert-success mt-2">
                        Selamat<strong> Login Berhasil</strong>
                    </div>
                <?php endif ?>
                <?php $tambah = $this->session->flashdata('tambah'); ?>
                <?php if (isset($tambah)) : ?>
                    <div class="alert alert-success mt-2">
                        Berhasil Tambah User
                    </div>
                <?php endif ?>
                <?php $edit = $this->session->flashdata('edit'); ?>
                <?php if (isset($edit)) : ?>
                    <div class="alert alert-warning mt-2">
                        Data Berhasil di edit
                    </div>
                <?php endif ?>
                <?php $hapus = $this->session->flashdata('hapus'); ?>
                <?php if (isset($hapus)) : ?>
                    <div class="alert alert-danger mt-2">
                        Data Berhasil Hapus
                    </div>
                <?php endif ?>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Home</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>


                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                                </div>
                                <div class="card-body">
                                <div class="table-responsive">
                                <table class="table caption-top">
                        <div class="caption mb-3">
                        </div>

                    <thead>
                            <tr>
                                <th hidden scope="col">Id </th>
                                <th scope="col">Title</th>
                                <th scope="col">Paragraf</th>
                                <th scope="col">Hero</th>

                                <?php if ($_SESSION['is_login'] == true){?>
                                <th scope="col">Aksi</th>
                                <?php }?>

                            </tr>
                    </thead>
                        <tbody>
                        <?php
                        $count = 0;
                        foreach ($home as $row) {
                            $count= $count + 1;				
                        
                        ?>
                            <tr>
                                <th hidden scope="row"><?php echo $row->id ?></th>
                                <td><?php echo  $row->title?></td>
                                <td><?php echo  $row->paragraf?></td>
                                <td><img src="<?php echo base_url('assets/img/').$row->hero?>" style="position: relative;width:30%"></td>

                                <?php if ($_SESSION['is_login'] = true){?>
                                <td><a href="<?php echo base_url('/Adm/halaman_edit') ?>/<?php echo $row->id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="<?php echo base_url('Adm/fungsiDelete') ?>/<?php echo $row->id ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                                <?php }?>
                            </tr>
                        <?php }?>
                        </tbody>
                        </table>
                                </div>
                                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('system/footer')?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo site_url()?>/SessLog/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('system/bottom')?>