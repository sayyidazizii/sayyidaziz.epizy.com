<header>
    <div class="card-body bg-info  text-center  text-light md-5 fw-bold">
        PERSONAL PROFILE SAYYID AZIZ
    </div>

    <div class="container mt-2">
        <div class="card-body shadow rounded">
            <nav class="navbar fw-bold navbar-expand-lg navbar-light bg-white ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url('Home') ?>"><i class="uil uil-home"></i>Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Portfolio') ?>"><i class="uil uil-bag"></i>Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Post') ?>"><i class="uil uil-blogger"></i>Post</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Message') ?>"><i class="uil uil-message"></i>Message</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('About') ?>"><i class="uil uil-info-circle"></i>About Me</a></li>
                        
                        <?php  if($this->session->userdata('is_login') == true){?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Saya</a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('Adm') ?>">Pengaturan</a>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo base_url('Home/logout') ?>" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</header>