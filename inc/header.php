<?php
    include('db/connection.php');
?>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style-starter.css?v=<?php echo time(); ?>">
<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<!-- jQuery (loaded early for Bootstrap 4 toggler) -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark stroke">
            <h1 class="mb-0">
                <a class="navbar-brand" href="index.php">
                    <i class="fas fa-file-alt"></i> CV Builder
                </a>
            </h1>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-lg-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($page) && $page=='home'){ echo 'link-active';} ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($page) && $page=='Templates'){ echo 'link-active';} ?>" href="templates.php">Templates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($page) && $page=='about'){ echo 'link-active';} ?>" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($page) && $page=='contact'){ echo 'link-active';} ?>" href="contact.php">Contact</a>
                    </li>

                    <?php if(isset($_SESSION["username"])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="DropdownMenu" role="button" data-toggle="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle mr-1"></i><?php echo htmlspecialchars($_SESSION['username']); ?>
                            <i class="fas fa-caret-down ml-1"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-end" aria-labelledby="DropdownMenu">
                            <li><a class="dropdown-item" href="templates.php"><i class="fas fa-th-large mr-2"></i>My Templates</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a></li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a href="auth/login.php" class="btn btn-nav-login ml-lg-2">
                            <i class="fas fa-sign-in-alt mr-1"></i>Login / Register
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container py-1">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!--/header-->

<script>
    // Navbar scroll behavior
    $(window).on("scroll", function () {
        if ($(window).scrollTop() >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    // Mobile menu toggle
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
        $("body").toggleClass("noscroll");
    });

    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
