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
                            <h1 class="display-1 text-dark">Events</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Events</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Events Start -->
        <div class="container-fluid event py-5">
            <div class="container py-5">
                <h1 class="display-3 mb-5 wow fadeIn" data-wow-delay="0.1s">Upcoming <span class="text-primary">Events</span></h1>
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>01 Jan 2045</h6>
                            <p class="mb-0">Fri 06:55</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Milad Un Nabi</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                                aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                            <a href="#" class="btn btn-primary px-3">Join Now</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-1.jpg" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.3s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>01 Jan 2045</h6>
                            <p class="mb-0">Wed 11:30</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Eid Ul Fitr</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                                aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                            <a href="#" class="btn btn-primary px-3">Join Now</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-2.jpg" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
                <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-3 col-lg-2 pe-0">
                        <div class="text-center border-bottom border-dark py-3 px-2">
                            <h6>01 Jan 2045</h6>
                            <p class="mb-0">Thu 11:30</p>
                        </div>
                    </div>
                    <div class="col-9 col-lg-6 border-start border-dark pb-5">
                        <div class="ms-3">
                            <h4 class="mb-3">Eud Ul Azha</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                                aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                            <a href="#" class="btn btn-primary px-3">Join Now</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="overflow-hidden mb-5">
                            <img src="img/events-3.jpg" class="img-fluid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Events End -->


        <?php require 'footer.php';  ?>       
