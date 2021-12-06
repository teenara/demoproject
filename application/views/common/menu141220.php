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
                <a href="index.html" class="logo">
                    <img src="<?= assets('assets/img/logo.png') ?>" alt="logo">
                </a>
            </div>
            <ul class="navbar-nav">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="<?= base_url('about') ?>">About</a>
                </li>
                <li>
                    <a href="<?= base_url('services') ?>">Services</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar area end -->