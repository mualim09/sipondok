
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href=""> Sistem Informasi Pondok Pesantren  </a>
            </div>
            <div class="navbar-collapse collapse in" id="navbar-collapse" aria-expanded="true">
<ul class="nav navbar-nav navbar-right">
    <!-- Notifications -->
    <li class="dropdown pull-right log">
        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo base_url('template/images/sipond.jpeg'); ?>" alt="">Admin
            <span class="material-icons">expand_more</span>
        </a>
        <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li>
                <a href="<?php echo base_url('index.php/welcome/profile/'); ?>"> 
                    <i class="material-icons">person</i> Profile</a>
            </li>
            <li>
                <a href="<?php echo base_url();?>index.php/login/logout">
                    <i class="material-icons">last_page</i> Keluar</a>
            </li>
        </ul>
    </li>
    <!-- #END# Notifications -->
</ul>
</div>
            </div>
        </div>
    </nav>
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                   <img src="<?php echo base_url() ?>template/images/sipond.jpeg" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Achmad Yachdi Fauzan</div>
                    <div class="email">gue.yadi@gmail.com</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu Utama SIPond</li>
                    <?php echo $itusajja_sidebar ?>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 Sistem Informasi Ponpes - <a href="javascript:void(0);">SIPond</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>