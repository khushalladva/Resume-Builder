<?php
    include('../db/connection.php');
    session_start();

    if(isset($_SESSION["username"])) {
        header("location:http://localhost/resume-Builder/templates.php");
        exit();
    }

    if(isset($_POST['login'])) {
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        $query = mysqli_query($con, "SELECT * FROM register WHERE email='$mail' AND password='$pass'");
        $check = mysqli_num_rows($query);

        if($check > 0) {
            $session_Data = mysqli_fetch_array($query);
            $_SESSION['user_id']   = $session_Data[0];
            $_SESSION['username']  = $session_Data[1];
            $_SESSION['contact']   = $session_Data[2];
            $_SESSION['address']   = $session_Data[3];
            $_SESSION['email']     = $session_Data[4];
            $_SESSION['password']  = $session_Data[5];
            $_SESSION['user_img']  = $session_Data[6];
            unset($_SESSION['success']);
            header("location:http://localhost/resume-Builder/templates.php");
            exit();
        } else {
            $login_error = "Invalid email or password. Please try again.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CV Builder</title>
    <link rel="icon" href="../assets/images/logo-icon.png">
    <link rel="stylesheet" href="../assets/css/login.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>

<body>
<section class="forms">
    <div class="container">

        <?php if(isset($_SESSION['success'])): ?>
            <div style="padding-top:20px;">
                <div class="alert alert-success">
                    <b>Success!</b> Your account has been successfully created. You can now proceed to login.
                </div>
            </div>
        <?php endif; ?>

        <?php if(isset($login_error)): ?>
            <div style="padding-top:20px;">
                <div class="alert alert-danger">
                    <b>Error!</b> <?php echo htmlspecialchars($login_error); ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- logo -->
        <div class="logo">
            <a class="brand-logo" href="../index.php">
                <i class="fas fa-file-alt"></i> CV Builder
            </a>
        </div>
        <!-- //logo -->

        <div class="forms-grid">
            <!-- login -->
            <div class="login">
                <span class="fas fa-sign-in-alt"></span>
                <strong>Welcome Back!</strong>
                <span>Sign in to your account</span>

                <form method="post" class="login-form">
                    <fieldset>
                        <div class="form">
                            <div class="form-row">
                                <span class="fas fa-envelope"></span>
                                <label class="form-label" for="login-email">Email</label>
                                <input type="email" id="login-email" class="form-text" name="email" required>
                            </div>
                            <div class="form-row">
                                <span class="fas fa-lock"></span>
                                <label class="form-label" for="login-password">Password</label>
                                <input type="password" id="login-password" class="form-text" name="password" required>
                            </div>
                            <div class="form-row bottom">
                                <div class="form-check">
                                    <input type="checkbox" id="remember" name="remember" value="remember">
                                    <label for="remember">Remember me?</label>
                                </div>
                                <a href="register.php" class="forgot">Create Account!</a>
                            </div>
                            <div class="form-row button-login">
                                <button class="btn btn-login" name="login" id="login-btn">
                                    Login <span class="fas fa-arrow-right"></span>
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- //login -->
        </div>
    </div>
</section>

</body>
</html>
<?php unset($_SESSION['success']); ?>
