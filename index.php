<?php
    $page = 'home';
    $title = 'Home | CV Builder';
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Build a professional resume in minutes with our easy-to-use CV Builder. Choose from stunning templates and download as PDF.">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="assets/images/logo-icon.png">
</head>

<body>
    <?php include('inc/header.php'); ?>

    <!--/Banner-Start-->
    <section class="bannerw3l-hnyv">
        <div class="banner-layer">
            <div class="box">
                <div></div><div></div><div></div><div></div><div></div>
                <div></div><div></div><div></div><div></div><div></div>
            </div>
            <img src="assets/images/slider-img.jpg" alt="Resume Banner" width="70%">
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <p class="hero-tagline">Effortlessly create a professional and polished resume</p>
                        <h2 class="hero-title">Build Your Professional<br>Resume in Minutes</h2>
                        <a href="auth/login.php" class="btn btn-style transparant-btn mt-md-5 mt-4">
                            <i class="fas fa-rocket mr-2"></i>Create Resume
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3apply-admission">
            <img src="assets/images/cv-banner.png" alt="CV Banner">
        </div>
    </section>
    <!--//Banner-End-->

    <!-- Features Section -->
    <section class="w3l-bottom-grids-6 py-5 mt-5" id="grids">
        <div class="container py-md-5 py-2">
            <h5 class="title-subw3hny text-center pt-5">PROFESSIONAL RESUME BUILDER</h5>
            <h3 class="title-w3l text-center pb-2">Win Your <span class="inn-text">Dream Job</span></h3>

            <div class="grids-area-hny row text-left pt-lg-5 mt-lg-5">
                <div class="col-lg-4 col-md-6 grids-feature pr-lg-5">
                    <div class="area-box">
                        <span class="fas fa-file"></span>
                        <h4><a href="checkTemp.php" class="title-head">Create Resume With Ease</a></h4>
                        <p>Build your resume online in minutes without even leaving your web browser.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-5">
                    <div class="area-box">
                        <span class="fas fa-laptop-code"></span>
                        <h4><a href="#grids" class="title-head">We Care About Your Data</a></h4>
                        <p>Anything you share with us is well protected with our 256-bit SSL encryption.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-5 pl-lg-5">
                    <div class="area-box">
                        <span class="fas fa-file-pdf"></span>
                        <h4><a href="#grids" class="title-head">Download as PDF</a></h4>
                        <p>Download your resume in PDF and other common formats with just a click.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Features Section -->

    <!-- About Section -->
    <section class="w3l-homeblock1" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row cwp23-grids align-items-center">
                    <div class="col-lg-6">
                        <h5 class="title-subw3hny">Elevate Your Resume</h5>
                        <h3 class="title-w3l">Unlock Your Career Potential with Our Versatile Resume Templates</h3>
                        <h6 class="mt-md-4 mt-4">At CV Builder, we understand that a visually appealing and well-structured resume is essential for making a lasting impression in the competitive job market. We offer a wide range of meticulously designed resume templates to cater to your unique professional needs.</h6>
                        <a href="about.php" class="btn btn-style btn-primary mt-lg-5 mt-4">Learn More</a>
                    </div>
                    <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                        <div class="cwp23-text-cols row">
                            <div class="column col-6">
                                <div class="column-w3-img position-relative">
                                    <a href="#"><img src="assets/images/img2.jpg" alt="Premium Designs" class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Premium Designs</a></h4>
                                    </div>
                                </div>
                                <div class="column-w3-img position-relative mt-4">
                                    <a href="#"><img src="assets/images/2.jpg" alt="Interview-Ready Resume" class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Interview-Ready Resume</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column col-6">
                                <div class="column-w3-img position-relative">
                                    <a href="#"><img src="assets/images/1.jpg" alt="Effortless Resumes" class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Effortless Resumes</a></h4>
                                    </div>
                                </div>
                                <div class="column-w3-img position-relative mt-4">
                                    <a href="#"><img src="assets/images/img41.jpg" alt="Quick Resume Creation" class="radius-image img-fluid"></a>
                                    <div class="edu-info">
                                        <h4 class="edu-heading-title"><a href="#">Quick Resume Creation</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//About Section-->

    <!-- Stats Section -->
    <section class="w3l-stats-main" id="stats">
        <div class="container">
            <div class="row stats-con py-lg-0 py-5">
                <div class="col-lg-6 stats-content-right mb-lg-0 mb-lg-5 mb-2 mt-5">
                    <a href="#grids" class="d-block zoom"><img src="assets/images/banner2.png" alt="Resume Builder" class="img-fluid"></a>
                </div>
                <div class="col-lg-6 bottom-info">
                    <div class="project-header-section text-left">
                        <h3 class="title-w3l">Maximize the Impact of Your First Impression</h3>
                        <p class="mt-3 pr-lg-5">In today's competitive landscape, the significance of a strong first impression cannot be underestimated. To secure the attention of potential employers, it is essential to apply resume-worthy strategies that accentuate your unique qualities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="w3l-project" id="subscribe">
        <div class="container-fluid mx-lg-0">
            <div class="row">
                <div class="col-lg-6 bottom-info">
                    <div class="project-header-section text-left">
                        <h3 class="title-w3l">Every great career starts with a powerful resume</h3>
                        <p class="mt-3 pr-lg-5">Create a professional CV effortlessly within minutes using our resume builder. Our platform ensures a seamless experience to craft your perfect resume.</p>
                        <a href="auth/login.php" class="btn btn-style btn-primary mt-5">
                            <i class="fas fa-rocket mr-2"></i>Create Resume Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 subcribe-img mb-5"></div>
            </div>
        </div>
    </section>
    <!--//CTA Section-->

    <?php include('inc/footer.php'); ?>

    <!-- Scroll to top button -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        window.onscroll = function () { scrollFunction(); };
        function scrollFunction() {
            document.getElementById("movetop").style.display =
                (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ? "block" : "none";
        }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script src="assets/js/theme-change.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
