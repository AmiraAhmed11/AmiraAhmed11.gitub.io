<?php

require 'Doas_db.php';
require 'header.php';
$page="Activites"

?>

<!-- Hero Start -->
       <div class="container-fluid hero-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="hero-header-inner animated zoomIn">
                            <h1 class="display-1 text-dark">Activites</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Activity</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Activities Start -->
        <div class="container-fluid activities py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
        
                    <h1 class="display-3">Here Are Our Activities</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-mosque fa-4x text-dark"></i>
                            <div class="ms-4">
                                <h4>Prayer Times</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam.</p>
                                <a href="prayer times.php" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-donate fa-4x text-dark"></i>
                            <div class="ms-4">
                                <h4>Charity & Donation</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam.</p>
                                <a href="" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-quran fa-4x text-dark"></i>
                            <div class="ms-4">
                                <h4>Quran Learning</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam.</p>
                                <a href="" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-book fa-4x text-dark"></i>
                            <div class="ms-4">
                                <h4>Hadith & Sunnah</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam.</p>
                                <a href="" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-book-open fa-4x text-dark"></i>
                            <div class="ms-4">
                                <h4>Doas</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam.</p>
                                <a href="Doas.php" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-hands fa-4x text-dark"></i>
                            <div class="ms-4">
                                <h4>Help Orphans</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam.</p>
                                <a href="" class="btn btn-primary px-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Activities Start -->


    


        <?php require 'footer.php';  ?>       
