<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(1) == 'dashboard' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'absensi' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('absensi') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Absensi</span>
        </a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'belajar' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('belajar') ?>">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Belajar</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'berita' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('berita') ?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'imageslider' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('imageslider') ?>">
            <i class="fas fa-fw fa-image"></i>
            <span>Image Slider</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'informasi' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('informasi') ?>">
            <i class="fas fa-fw fa-info"></i>
            <span>Informasi</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'jadwal' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('jadwal') ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Jadwal</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'nilai' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('nilai') ?>">
            <i class="fas fa-fw fa-list-ol"></i>
            <span>Nilai</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'pembayaran' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('pembayaran') ?>">
            <i class="fas fa-fw fa-money-bill-alt"></i>
            <span>Pembayaran</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'users' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('users') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'admin' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Admin</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'guruabsen' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('guruabsen') ?>">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Guru Absen</span></a>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(1) == 'kelas' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('kelas') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Kelas</span></a>
    </li>
</ul>
