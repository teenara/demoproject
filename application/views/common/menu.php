<!-- navbar area start -->
<nav class="navbar navbar-area navbar-expand-lg nav-style-01">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper mobile-logo">
                <a href="index.html" class="logo">
                    <img src="<?= assets('assets/img/logo.png') ?>" alt="logo">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Riyaqas_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="Riyaqas_main_menu">
            <div class="logo-wrapper desktop-logo">
                <a href ="<?= base_url()?>" class="logo">
                    <img src="<?= assets('assets/img/logo.png') ?>" alt="logo">
                </a>
            </div>
            <ul class="navbar-nav">
                <li>
                    <a href="<?= base_url() ?>">Home</a>
                </li>
                <li>
                    <!-- <a href="</?= base_url('about') ?>">About</a> -->
                    <a href="<?= base_url()?>.#about-us">About</a>
                </li>
                <li>
                    <a href="<?= base_url('services') ?>">Services</a>
                </li>
                <li>
                    <a href="<?= base_url('work-approach') ?>">Our Approach</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Products</a>
                    <ul class="sub-menu">
                        <!-- <li><a href="<?= base_url('lms') ?>">Learning Management System</a></li> -->
                        <!--<li><a href="<?= base_url('fcm') ?>">Facility Management System</a></li>-->
                        <li><a href="<?= base_url('wellness') ?>">Wellness</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url('contact-us') ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar area end -->