<?php
    session_start();
    $page = 'create-resume';
    $title = 'Create Resume | CV Builder';

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
    <meta name="description" content="Create a new professional resume with CV Builder.">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="assets/images/logo-icon.png">
</head>
<body>

    <?php include('inc/header.php'); ?>

    <div class="resume-head">
        <div class="container text-center py-4">
            <h4 class="title-subw3hny text-white mb-2">RESUMES</h4>
            <h2 class="h3 font-weight-bold text-white mb-1">Ready to create a powerful resume that gets noticed?</h2>
            <p class="text-white-50 mb-0">Start with our streamlined resume builder</p>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <a href="resume.php" style="text-decoration:none;">
                    <div class="createCon mx-auto">
                        <i class="fas fa-plus-circle"></i>  
                        <h5 class="pt-2">New Resume</h5>
                        <p class="text-muted small mt-1 mb-0">Click to start building your CV</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php include('inc/footer.php'); ?>

    <script src="assets/js/theme-change.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>