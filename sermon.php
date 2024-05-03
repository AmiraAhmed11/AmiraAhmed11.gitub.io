<?php
    
    require 'Doas_db.php';
    require 'header.php';
    $page="Home"
    
?>


        <!-- Hero Start -->
        <div class="container-fluid hero-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-header-inner animated zoomIn">
                            <h1 class="display-1 text-dark">Sermons</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Sermons</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Sermon Start -->
        <div class="container-fluid sermon py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Sermons</p>
                    <h1 class="display-3">Join The Islamic Community</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-xl-4">
                        <div class="sermon-item wow fadeIn" data-wow-delay="0.1s">
                            <div class="overflow-hidden p-4 pb-0">
                                <img src="img/sermon-1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="p-4">
                                <div class="sermon-meta d-flex justify-content-between pb-2">
                                    <div class="">
                                        <small><i class="fa fa-calendar me-2 text-muted"></i><a href="" class="text-muted me-2">13 Nov 2023</small></a>
                                        <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted">Admin</small></a>
                                    </div>
                                    <div class="">
                                        <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                        <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                                    </div>
                                </div>
                                <a href="" class="d-inline-block h4 lh-sm mb-3">How to get closer to Allah</a>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-6 col-xl-4">
                        <div class="sermon-item wow fadeIn" data-wow-delay="0.3s">
                            <div class="overflow-hidden p-4 pb-0">
                                <img src="img/sermon-2.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="p-4">
                                <div class="sermon-meta d-flex justify-content-between pb-2">
                                    <div class="">
                                        <small><i class="fa fa-calendar me-2 text-muted"></i><a href="" class="text-muted me-2">13 Nov 2023</small></a>
                                        <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted">Admin</small></a>
                                    </div>
                                    <div class="">
                                        <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                        <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                                    </div>
                                </div>
                                <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of Hajj in Islam</a>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-6 col-xl-4">
                        <div class="sermon-item wow fadeIn" data-wow-delay="0.5s">
                            <div class="overflow-hidden p-4 pb-0">
                                <img src="img/sermon-3.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="p-4">
                                <div class="sermon-meta d-flex justify-content-between pb-2">
                                    <div class="">
                                        <small><i class="fa fa-calendar me-2 text-muted"></i><a href="" class="text-muted me-2">13 Nov 2023</small></a>
                                        <small><i class="fas fa-user me-2 text-muted"></i><a href="" class="text-muted">Admin</small></a>
                                    </div>
                                    <div class="">
                                        <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                        <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                        <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                                    </div>
                                </div>
                                <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of “Piller” of Islam</a>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sermon End -->


        <?php require 'footer.php';  ?>       
