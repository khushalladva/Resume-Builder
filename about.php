<?php
    $page  = 'about';
    $title = 'About | CV Builder';
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Learn about CV Builder — our mission, team, and commitment to helping you land your dream job.">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="assets/images/logo-icon.png">
</head>

<body>
    <?php include('inc/header.php'); ?>

    <!-- breadcrumb -->
    <section class="w3l-about-breadcrumb text-center">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-4">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="title AboutPageBanner">About Us</h2>
                        <p class="inner-page-para mt-2">Learn Anytime, Anywhere. Accelerate Your Future.</p>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//breadcrumb-->

    <!--/w3l-aboutblock1-->
    <section class="w3l-aboutblock1" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-8 left-wthree-img pr-lg-5">
                        <h5 class="title-subw3hny mb-1">About Us</h5>
                        <h3 class="title-w3l">Improving lives through Learning.
                            We are always inspired by the world and people around us.</h3>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-5 about-right-faq align-self">
                        <p>Improve your skills and learn with practical, interview-focused resume templates crafted by professionals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-aboutblock1-->

    <!-- features-section -->
    <section class="w3l-features py-5" id="work">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row main-cont-wthree-2 align-items-center">
                <div class="col-lg-6 feature-grid-left pr-lg-5">
                    <h5 class="title-subw3hny">Why Choose Us</h5>
                    <h3 class="title-w3l mb-4">Our Mission is to Provide a World-class <span class="inn-text">Resume Platform</span></h3>
                    <p class="text-para">Our mission is to help you crack interviews and get your dream job by providing the best resume building platform — elegant, fast, and professional.</p>
                    <a href="contact.php" class="btn btn-style btn-primary mt-lg-5 mt-4">Get in Touch</a>
                </div>
                <div class="col-lg-6 feature-grid-right mt-lg-0 mt-5 pl-lg-5">
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1 box-wrap">
                            <div class="icon"><i class="fas fa-file-alt"></i></div>
                            <h4><a href="#" class="title-head">Professional Templates</a></h4>
                        </div>
                        <div class="grids-1 box-wrap">
                            <div class="icon"><i class="fas fa-user-graduate"></i></div>
                            <h4><a href="#" class="title-head">Career Guidance</a></h4>
                        </div>
                        <div class="grids-1 box-wrap">
                            <div class="icon"><i class="fas fa-download"></i></div>
                            <h4><a href="#" class="title-head">Easy PDF Export</a></h4>
                        </div>
                        <div class="grids-1 box-wrap">
                            <div class="icon"><i class="fas fa-users"></i></div>
                            <h4><a href="#" class="title-head">Expert Support</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //features section -->

    <!--/progress-->
    <section class="w3l-servicesblock w3l-servicesblock1 py-5" id="progress">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 align-self pr-lg-4">
                    <div class="progress-info info1">
                        <h6 class="progress-tittle">UI / UX Design <span>80%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-info info2">
                        <h6 class="progress-tittle">PHP Programming <span>95%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-info info3">
                        <h6 class="progress-tittle">Web Design &amp; Development <span>90%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-info info4">
                        <h6 class="progress-tittle">Graphic Design <span>75%</span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                    <h5 class="title-subw3hny mb-1">Our Skills</h5>
                    <h3 class="title-w3l">What Powers Our <span class="inn-text">Resume Builder</span></h3>
                    <p class="mt-md-4 mt-3">Our platform is built by a passionate team with deep expertise in web technologies, ensuring a smooth, powerful experience from start to finish.</p>
                </div>
            </div>
        </div>
    </section>
    <!--//progress-->

    <!--/join section-->
    <section class="w3l-join-main py-5">
        <div class="container py-md-5 py-2">
            <div class="w3l-project-in">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="bottom-info">
                            <div class="header-section pr-lg-5">
                                <h5 class="title-subw3hny mb-3">Join With Us</h5>
                                <h3 class="title-w3l mb-3">Want to Collaborate?</h3>
                                <p>For joining our team, contact us and send your details — we'd love to hear from you!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self mt-lg-0 mt-sm-5 mt-4">
                        <div class="d-sm-flex justify-content-end">
                            <a href="contact.php" class="btn btn-primary btn-style mr-sm-2">Contact Us</a>
                            <a href="contact.php" class="btn btn-secondary btn-style">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//join section-->

    <?php include('inc/footer.php'); ?>

    <script src="assets/js/theme-change.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>