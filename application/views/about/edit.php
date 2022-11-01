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
                            <h1 class="h3 mb-0 text-gray-800">Edit About</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>


                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                            </div>
                            <div class="card-body">
                                <?php echo form_open("Adm/updateabout", array('enctype'=>'multipart/form-data')); ?>
                                <label class="form-label" hidden>Id</label>
                                <input class="form-control" hidden type="text" name="id" value="<?php echo $about->id;?>" required>
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $about->name;?>" required>
                                <label class="form-label">Job</label>
                                <input class="form-control" type="text" name="current_job" value="<?php echo $about->current_job;?>" required>
                                <label class="form-label">Address</label>
                                <input class="form-control" type="text" name="address" value="<?php echo $about->address;?>" required>
                                <label class="form-label">Phone</label>
                                <input class="form-control" type="text" name="phone" value="<?php echo $about->phone;?>" required>
                                <label class="form-label ">Email</label>
                                <input class="form-control mb-3" type="text" name="email" value="<?php echo $about->email;?>" required>
                                <label class="form-label ">School</label>
                                <input class="form-control mb-3" type="text" name="school" value="<?php echo $about->school;?>" required>
                                <label class="form-label ">Image</label>
                                <input class="form-control" type="file" name="image" />
                                <input class="btn btn-primary mt-2  mb-3" type="submit" name="submit" value="Simpan">
                                <a href="<?php echo base_url('Adm/About')?> " class="btn btn-secondary mt-2 mb-3">Batal</a>
                        
                            </form>
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