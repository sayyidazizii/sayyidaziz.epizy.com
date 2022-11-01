<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url()?>/Adm/">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin <sup>System</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url()?>/Adm/">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menu
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Pages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-box"></i>
        <span>Data Home</span>
    </a>
    <div id="Pages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Page Menu:</h6>
            <!-- admin dan kasir -->
            <?php if ($_SESSION['is_login'] = true ){?>
            <a class="collapse-item" href="<?php echo site_url()?>/Adm/Home">View </a>
            <?php    
                }
            ?>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Toko"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-home"></i>
        <span>Data Portofolio</span>
    </a>
    <div id="Toko" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <?php if ($_SESSION['is_login'] = true ){?>
            <h6 class="collapse-header">Page Menu:</h6>
            <!-- admin dan kasir -->
            <a class="collapse-item" href="<?php echo site_url()?>/Adm/portfolio">View</a>
            <?php    
                }
            ?>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Post</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Page:</h6>
            <?php if ($_SESSION['is_login'] = true ){?>
            <a class="collapse-item" href="<?php echo site_url()?>/Adm/post">View</a>
            <?php    
            }
            ?>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Data About</span>
    </a>
    <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Page:</h6>
            <?php if ($_SESSION['is_login'] = true ){?>
            <a class="collapse-item" href="<?php echo site_url()?>/Adm/About">Profile</a>
            <a class="collapse-item" href="<?php echo site_url()?>/Adm/Skill">Skill</a>
            <a class="collapse-item" href="<?php echo site_url()?>/Adm/Sosmed">Sosmed</a>
            <?php    
            }
            ?>
        </div>
    </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="<?php echo base_url()?>assets/admin/img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2">Result View</p>
    <a class="btn btn-success btn-sm"  href="<?php echo base_url('') ?>" target="_blank">view</a>
</div>

</ul>
<!-- End of Sidebar -->
