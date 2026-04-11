<?php 
  session_start();

  $page = 'contact'; ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php $title = 'Contact'; ?></title>
  <link rel="icon" href="/assets/images/logo-icon.png" type="/assets/images/logo-icon.png">
    <link rel="icon" href="/assets/images/logo-icon.png">
</head>

<body>
  <!--header-->
  <?php
  include('inc/header.php');
  ?>
  <!--/header-->
  
  <!-- breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Contact Us </h2>
            <p class="inner-page-para mt-2">
            Build Your Future, Anytime, Anywhere. Craft Your Resume with Confidence</p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//breadcrumb-->
  <!-- contacts-5-grid -->
  <div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-lg-4">
      <div class="container">
        <div class="heading text-center mx-auto">
          <h5 class="title-subw3hny text-center">Contact our team</h5>
          <h3 class="title-w3l">Got any <span class="inn-text">Questions? </span></h3>
        </div>
        <div class="row">
          <div class="container mt-3">
          <div class="col-md-12">
          <h3 class="text-center">Seeking suggestions to elevate our resume builder website and deliver a more polished and user-friendly experience. Your professional insights are appreciated!</h3>
          </div>
          </div>
        </div>
        <div class="contacts-5-grid-main mt-5">
          <div class="contacts-5-grid">
            <div class="map-content-5">
              <div class="d-grid grid-col-2">
                <div class="contact-type">
                  <div class="address-grid">
                    <h6><span class="fas fa-map-marked-alt"></span> Address</h6>
                    <p>Rajkot,Gujrat,India</p>

                  </div>
                  <div class="address-grid">
                    <h6><span class="fas fa-envelope-open-text"></span> Email</h6>
                    <a href="mailto:khushalladva149@gmail.com" class="link1">khushalladva149@gmail.com </a>

                  </div>
                  <div class="address-grid">
                    <h6><span class="fas fa-phone-alt"></span> Phone</h6>
                    <a href="tel:+91 9328171578" class="link1">+91 9328171578</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="form-inner-cont mt-5">
          <form action="#" method="post" class="signin-form">
            <div class="form-grids">
              <div class="form-input">
                <input type="text" name="name" placeholder="Enter your name *" required="" />
              </div>
              <div class="form-input">
                <input type="text" name="subject" placeholder="Enter subject " required />
              </div>
              <div class="form-input">
                <input type="email" name="sender" placeholder="Enter your email *" required />
              </div>
              <div class="form-input">
                <input type="text" name="phone" placeholder="Enter your Phone Number *" required />
              </div>
            </div>
            <div class="form-input">
              <textarea name="message" placeholder="Type your query here" required=""></textarea>
            </div>
            <div class="text-right">
              <button name="submit" class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>

          <?php
            if(isset($_POST['submit']))
            {
              
              $to = "khushalladva149@gmail.com";
                $name = $_POST['name'];
                $sub  = $_POST['subject'];
                $email = $_POST['sender'];
                $contact = $_POST['phone'];
                $msg = $_POST['message'];
                $from = "someonelse@example.com";
                $headers = "From:" . $from;

                $query = mysqli_query($con,"insert into contact (username,subject,email,phone,msg)
                values ('$name','$sub','$email','$contact','$msg');
                ");
                if($query > 0)
                {
                  // Email sending code
                                    
                  $mailSent = mail($to, $sub, $msg, $headers);

                  if ($mailSent) {
                    echo "Email sent successfully.";
                   } else {
                       echo "Email could not be sent.";
                 }

                  echo "<meta http-equiv='refresh' content='0'>";
                  echo "<script>alert('Your message has been sent successfully. Thank you for contacting us.')</script>";
                }
                else
                {
                  echo "<script>alert('Failed! Try again')</script>";
                }
            }
          ?>


        </div>
      </div>
    </div>
    <!-- //contacts-5-grid -->
  </div>

  <div class="contacts-sub-5">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d461.52086507180337!2d70.77961886505433!3d22.271665964689557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca442843ad8d%3A0x431b308e61d2cf65!2sMahapuja%20Dham!5e0!3m2!1sen!2sin!4v1754923109174!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1699.891256116314!2d70.78094479304457!3d22.27230457690396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbde245fdd41%3A0xa12caf1ea68307b9!2sZUDIO%20-%20R%20K%20Prime%2C%20Rajkot!5e0!3m2!1sen!2sin!4v1754922858133!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
  </div>


  <!-- Footer -->
  <?php
  include('inc/footer.php');
  ?>
  <!-- Footer -->

  <script>
     //Main navigation Active Class Add Remove
     $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!--//MENU-JS-->
    <script src="assets/js/bootstrap.min.js"></script>
  </script>
</body>

</html>
