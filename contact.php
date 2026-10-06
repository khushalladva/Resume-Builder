<?php
    session_start();
    $page = 'contact';
    $title = 'Contact | CV Builder';

    $contact_success = false;
    $contact_error = false;

    if(isset($_POST['submit'])) {
        include('db/connection.php');
        $name    = $_POST['name'];
        $sub     = $_POST['subject'];
        $email   = $_POST['sender'];
        $contact = $_POST['phone'];
        $msg     = $_POST['message'];

        $query = mysqli_query($con, "INSERT INTO contact (username, subject, email, phone, msg)
            VALUES ('$name', '$sub', '$email', '$contact', '$msg')");

        if($query) {
            $to      = "khushalladva149@gmail.com";
            $from    = "noreply@cvbuilder.com";
            $headers = "From:" . $from;
            mail($to, $sub, $msg, $headers);
            $contact_success = true;
        } else {
            $contact_error = true;
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Get in touch with CV Builder. We'd love to hear your feedback and answer your questions.">
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
                        <h2 class="title AboutPageBanner">Contact Us</h2>
                        <p class="inner-page-para mt-2">Build Your Future, Anytime, Anywhere. Craft Your Resume with Confidence</p>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//breadcrumb-->

    <!-- contact section -->
    <div class="w3l-contact-10 py-5" id="contact">
        <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
            <div class="container">
                <div class="heading text-center mx-auto">
                    <h5 class="title-subw3hny text-center">Contact Our Team</h5>
                    <h3 class="title-w3l">Got Any <span class="inn-text">Questions?</span></h3>
                </div>

                <div class="contacts-5-grid-main mt-5">
                    <div class="contacts-5-grid">
                        <div class="map-content-5">
                            <div class="d-grid grid-col-2">
                                <div class="contact-type">
                                    <div class="address-grid">
                                        <h6><span class="fas fa-map-marked-alt"></span> Address</h6>
                                        <p>Rajkot, Gujarat, India</p>
                                    </div>
                                    <div class="address-grid">
                                        <h6><span class="fas fa-envelope-open-text"></span> Email</h6>
                                        <a href="mailto:khushalladva149@gmail.com" class="link1">khushalladva149@gmail.com</a>
                                    </div>
                                    <div class="address-grid">
                                        <h6><span class="fas fa-phone-alt"></span> Phone</h6>
                                        <a href="tel:+919328171578" class="link1">+91 9328171578</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-inner-cont mt-5">
                    <?php if($contact_success): ?>
                        <div class="alert alert-success">
                            <b>Success!</b> Your message has been sent successfully. Thank you for contacting us.
                        </div>
                    <?php elseif($contact_error): ?>
                        <div class="alert alert-danger">
                            <b>Failed!</b> Something went wrong. Please try again.
                        </div>
                    <?php endif; ?>

                    <form action="#contact" method="post" class="signin-form">
                        <div class="form-grids">
                            <div class="form-input">
                                <input type="text" name="name" id="contact-name" placeholder="Enter your name *" required>
                            </div>
                            <div class="form-input">
                                <input type="text" name="subject" id="contact-subject" placeholder="Enter subject" required>
                            </div>
                            <div class="form-input">
                                <input type="email" name="sender" id="contact-email" placeholder="Enter your email *" required>
                            </div>
                            <div class="form-input">
                                <input type="tel" name="phone" id="contact-phone" placeholder="Enter your phone number *" required>
                            </div>
                        </div>
                        <div class="form-input">
                            <textarea name="message" id="contact-message" placeholder="Type your query here..." required></textarea>
                        </div>
                        <div class="text-right">
                            <button name="submit" id="contact-submit" class="btn btn-style btn-primary">
                                <i class="fas fa-paper-plane mr-2"></i>Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--//contact section-->

    <!-- Google Map -->
    <div class="contacts-sub-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d461.52086507180337!2d70.77961886505433!3d22.271665964689557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca442843ad8d%3A0x431b308e61d2cf65!2sMahapuja%20Dham!5e0!3m2!1sen!2sin!4v1754923109174!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                title="Our location on Google Maps"></iframe>
    </div>

    <?php include('inc/footer.php'); ?>

    <script src="assets/js/theme-change.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
