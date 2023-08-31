<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url('assets/img/mipa.png'); ?>" style="width: 2em; height: 2em;">
                </div>
                <div class="sidebar-brand-text mx-1">e-Assessment</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('administrator/dashboard_dosen') ?>">
                    <i class="fas fa-solid fa-bars"></i>
                    <span>Beranda Dosen</span></a>
            </li>

            <!-- HALAMAN DOSEN -->
            <!-- PENILAIAN -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('administrator/nilsemhas') ?>">
                    <i class="fas fa-solid fa-bars"></i>
                    <span>Penilaian Seminar Hasil</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-solid fa-bars"></i>
                    <span>Penilaian Ujian Skripsi</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-6 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('administrator/nilskripsi_kbim') ?>"> Komisi Pembimbing</a>
                        <a class="collapse-item" href="<?php echo base_url('administrator/nilskripsi_kuji') ?>"> Komisi Ujian</a>
                    </div>
            </li>


            <!-- JADWAL-->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSchedule" aria-expanded="true" aria-controls="collapseSchedule">
                    <i class="fas fa-solid fa-bars"></i>
                    <span>Jadwal</span>
                </a>
                <div id="collapseSchedule" class="collapse" aria-labelledby="collapseSchedule" data-parent="#accordionSidebar">
                    <div class="bg-white py-6 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('administrator/jwsemhas') ?>"> Seminar Hasil</a>
                        <a class="collapse-item" href="<?php echo base_url('administrator/jwskripsi') ?>"> Ujian Skripsi</a>
                    </div>
            </li>


            <!-- LOGOUT -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('administrator/auth/logout') ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
        </ul>
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




                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-solid fa-user mr-2"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama'); ?></span>

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('administrator/auth/logout') ?>">
                                    <i class="nav-icon fas fa-sign-out-alt ml-2"></i>
                                    Logout
                                </a>
                                <a class="dropdown-item" href="<?php echo base_url('administrator/auth/ganti_password') ?>">
                                    <i class="nav-icon fas fa-sign-out-alt ml-2"></i>
                                    Ganti Password
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->