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
                            <h1 class="display-1 text-dark">Contact</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 text-uppercase text-primary">Get In Touch</p>
                    <h1 class="display-3">Contact For Any Queries</h1>
                    <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                </div>
                <div class="row g-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="col-sm-6">
                        <input type="text" class="form-control bg-transparent p-3" placeholder="Your Name">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control bg-transparent p-3" placeholder="Your Email">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control bg-transparent p-3" placeholder="Subject">
                    </div>
                    <div class="col-12">
                        <textarea class="w-100 form-control bg-transparent p-3" rows="6" cols="10" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary border-0 py-3 px-5" type="button">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Start -->


<?php require 'footer.php';  ?>       
