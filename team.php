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
                            <h1 class="display-1 text-dark">Our Team</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Our Team</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Our Team</p>
                    <h1 class="display-3">Meet Our Organizer</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-xl-5">
                        <div class="team-img wow zoomIn" data-wow-delay="0.1s">
                            <img src="img/team-1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-7">
                        <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                            <h1>Anamul Hasan</h1>
                            <h5 class="fw-normal fst-italic text-primary mb-4">President</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. aliquip ex ea commodo consequat.</p>
                            <div class="team-icon d-flex pb-4 mb-4 border-bottom border-primary">
                                <a class="btn btn-primary btn-lg-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-lg-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary btn-lg-square me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-lg-square"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="team-item wow zoomIn" data-wow-delay="0.2s">
                                    <img src="img/team-2.jpg" class="img-fluid w-100" alt="">
                                    <div class="team-content text-dark text-center py-3">
                                        <div class="team-content-inner">
                                            <h5 class="mb-0">Mustafa Kamal</h5>
                                            <p class="text-dark">Imam</p>
                                            <div class="team-icon d-flex align-items-center justify-content-center">
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square me-2"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-item wow zoomIn" data-wow-delay="0.4s">
                                    <img src="img/team-3.jpg" class="img-fluid w-100" alt="">
                                    <div class="team-content text-dark text-center py-3">
                                        <div class="team-content-inner">
                                            <h5 class="mb-0">Nahiyan Momen</h5>
                                            <p class="text-dark">Teacher</p>
                                            <div class="team-icon d-flex align-items-center justify-content-center">
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square me-2"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-item wow zoomIn" data-wow-delay="0.6s">
                                    <img src="img/team-4.jpg" class="img-fluid w-100" alt="">
                                    <div class="team-content text-dark text-center py-3">
                                        <div class="team-content-inner">
                                            <h5 class="mb-0">Asfaque Ali</h5>
                                            <p class="text-dark">Volunteer</p>
                                            <div class="team-icon d-flex align-items-center justify-content-center">
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-primary btn-sm-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square me-2"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <?php require 'footer.php';  ?>       
