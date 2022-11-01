<?php $this->load->view('system/top') ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view('system/sidebar') ?>
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
                    <?php $this->load->view('system/navbar') ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>


                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table caption-top">
                                    <div class="caption mb-3">
                                    </div>
                                    <div class="caption mb-3">
                                            <a class="btn btn-primary" href="<?php echo base_url('Adm/addport') ?>">Tambah Portofolio</a>
                                        </div>


                                    <thead>
                                        <tr>
                                            <th hidden scope="col">Id </th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Slug</th>
                                            <th scope="col">Paragraf</th>
                                            <th scope="col">image</th>

                                            <?php if ($_SESSION['is_login'] == true) { ?>
                                                <th scope="col">Aksi</th>
                                            <?php } ?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 0;
                                        foreach ($portfolio as $row) {
                                            $count = $count + 1;

                                        ?>
                                            <tr>
                                                <th hidden scope="row"><?php echo $row->id ?></th>
                                                <td><?php echo  $row->title ?></td>
                                                <td><?php echo  $row->paragraf ?></td>
                                                <td><?php echo  $row->slug ?></td>
                                                <td><img src="<?php echo base_url('assets/img/') . $row->image ?>" style="position: relative;width:50%"></td>

                                                <?php if ($_SESSION['is_login'] = true) { ?>
                                                    <td><a href="<?php echo base_url('/Adm/editport') ?>/<?php echo $row->id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                                        <a href="<?php echo base_url('Adm/deleteporto') ?>/<?php echo $row->id ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                                    </td>
                                                <?php } ?>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>

                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <?php $this->load->view('system/footer') ?>
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <a class="btn btn-primary" href="<?php echo site_url() ?>/SessLog/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <?php $this->load->view('system/bottom') ?>