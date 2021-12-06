<?php $uri = ucfirst($this->uri->segment(1));
?>
<!-- breadcrumb area start -->
<div class="breadcrumb-area" style="background-image:url(assets/img/page-title-bg.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h1 class="page-title"><?= $uri ?></h1>
                    <ul class="page-list">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li><a href="#"><?= $uri ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area End -->