<?php
    include('../db/connection.php');
    session_start();

    if(isset($_SESSION["username"])) {
        header("location:http://localhost/resume-Builder/index.php");
        exit();
    }

    if(isset($_POST['btn'])) {
        $name     = $_POST['username'];
        $phone    = $_POST['con'];
        $add      = $_POST['address'];
        $mail     = $_POST['email'];
        $pass     = $_POST['password'];
        $filename = $_FILES["txtfile"]["name"];
        $oldLocation = $_FILES["txtfile"]["tmp_name"];
        $newlocation = "../assets/images/" . $filename;
        move_uploaded_file($oldLocation, $newlocation);

        $query = mysqli_query($con, "INSERT INTO register (username, contact, address, email, password, user_img)
            VALUES ('$name', '$phone', '$add', '$mail', '$pass', '$filename')");

        if($query) {
            $_SESSION['success'] = "success";
            header("location:http://localhost/resume-Builder/auth/login.php");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Create a free CV Builder account and start building your professional resume today.">
    <title>Register | CV Builder</title>
    <link rel="icon" href="../assets/images/logo-icon.png">
    <link rel="stylesheet" href="../assets/css/login.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>

<body>
<section class="forms">
    <div class="container">
        <!-- logo -->
        <div class="logo">
            <a class="brand-logo" href="../index.php">
                <i class="fas fa-file-alt"></i> CV Builder
            </a>
        </div>
        <!-- //logo -->
        <div class="forms-grid">
            <!-- register -->
            <div class="register">
                <span class="fas fa-user-circle"></span>
                <strong>Create Account!</strong>
                <span>Join us and build your resume</span>

                <form method="post" class="register-form" enctype="multipart/form-data">
                    <fieldset>
                        <div class="form">
                            <div class="form-row">
                                <span class="fas fa-user"></span>
                                <label class="form-label" for="reg-name">Full Name</label>
                                <input type="text" id="reg-name" class="form-text" name="username" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-phone"></span>
                                <label class="form-label" for="reg-contact">Contact</label>
                                <input type="number" id="reg-contact" class="form-text" name="con" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-map-marker-alt"></span>
                                <label class="form-label" for="reg-address">Address</label>
                                <input type="text" id="reg-address" class="form-text" name="address" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-envelope"></span>
                                <label class="form-label" for="reg-email">E-mail</label>
                                <input type="email" id="reg-email" class="form-text" name="email" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-lock"></span>
                                <label class="form-label" for="reg-password">Password</label>
                                <input type="password" id="reg-password" class="form-text" name="password" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-image"></span>
                                <label class="form-label" for="reg-image">Profile Image</label>
                                <input type="file" id="reg-image" class="form-text" name="txtfile" accept="image/*" required>
                            </div>
                            <div class="form-row button-login">
                                <button class="btn btn-login" name="btn" id="register-btn">
                                    Create Account <span class="fas fa-arrow-right"></span>
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <span class="create-account">Already have an account? <a href="login.php" class="forgot">Login</a></span>
            </div>
            <!-- //register -->
        </div>
    </div>
</section>
</body>
</html>
