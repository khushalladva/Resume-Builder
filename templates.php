<?php
    $page = 'Templates';
    $title = 'Resume Templates | CV Builder';
    session_start();

    if(!isset($_SESSION["username"])) {
        header("location:auth/login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Choose from our professional resume templates and build your perfect CV in minutes.">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="assets/images/logo-icon.png">
</head>
<body>

    <?php include('inc/header.php'); ?>

    <div class="templates-hero">
        <div class="container">
            <?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
                <div class="alert alert-success mt-4">
                    <b>Success!</b> The data has been updated. Please select your updated template.
                </div>
            <?php endif; ?>
            <h5 class="title-subw3hny">RESUME TEMPLATES</h5>
            <h2 class="title-w3l">Select Your <span class="inn-text">Job-Winning</span> Resume Template</h2>
            <p class="templates-subtitle">Create your resume in just 5 minutes using our easy-to-use templates</p>
        </div>
    </div>

    <div class="container templates-grid mb-5">
        <div class="row mt-5">
            <div class="col-md-4 mt-2">
                <div class="cv-temp mb-5">
                    <div class="cv-temp-img-wrap">
                        <img src="assets/images/resumeImg2.jpg" alt="Simple Resume Template">
                        <div class="cv-temp-overlay">
                            <form action="checkTemp.php?id=1" method="post">
                                <button class="btn btn-primary btn-lg text-white tmpBtn" id="use-simple-template">
                                    <i class="fas fa-check-circle mr-2"></i>Use This Template
                                </button>
                            </form>
                        </div>
                    </div>
                    <h4 class="cv-temp-name">Simple</h4>
                    <p class="cv-temp-desc">Clean and minimal layout</p>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="cv-temp mb-5">
                    <div class="cv-temp-img-wrap">
                        <img src="assets/images/resumeImg3.jpg" alt="Professional Resume Template">
                        <div class="cv-temp-overlay">
                            <form action="checkTemp.php?id=2" method="post">
                                <button class="btn btn-primary btn-lg text-white tmpBtn" id="use-professional-template">
                                    <i class="fas fa-check-circle mr-2"></i>Use This Template
                                </button>
                            </form>
                        </div>
                    </div>
                    <h4 class="cv-temp-name">Professional</h4>
                    <p class="cv-temp-desc">Modern and polished design</p>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="cv-temp mb-5">
                    <div class="cv-temp-img-wrap">
                        <img src="assets/images/resumeIdea1.jpg" alt="Advanced Resume Template">
                        <div class="cv-temp-overlay">
                            <form action="checkTemp.php?id=3" method="post">
                                <button class="btn btn-primary btn-lg text-white tmpBtn" id="use-advanced-template">
                                    <i class="fas fa-check-circle mr-2"></i>Use This Template
                                </button>
                            </form>
                        </div>
                    </div>
                    <h4 class="cv-temp-name">Advanced</h4>
                    <p class="cv-temp-desc">Feature-rich and creative layout</p>
                </div>
            </div>
        </div>
    </div>

    <?php include('inc/footer.php'); ?>

    <script src="assets/js/theme-change.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
