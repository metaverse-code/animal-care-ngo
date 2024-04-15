<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Care - Every Life, Every Heartbeat</title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/secondary_nav.css">
    <link rel="stylesheet" href="./css/fadeScroll.css">
    <link rel="stylesheet" href="./css/hamMenu.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        .message {
            margin-top: 20px;
            font-weight: bold;
        }

        .success {
            color: green;
        }

        .failure {
            color: red;
        }
    </style>
</head>

<body>
    <div class="navbarReuse js-reveal">
        <div class="logoContainer"></div>
        <div class="logBgMobile mobile">
            <i class="fa-solid fa-bars" onclick="handleMobileMenu();"></i>
        </div>
        <div class="mobileMenuContent"><i class="fa-solid fa-x" onclick="handleCloseNav();"></i>
            <div id="bindDrpdowndata"></div>
        </div>

        <div class="navbarCustom">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="our-work.php">Our Work</a></li>
                <li><a href="get-involved.php">Get Involved</a></li>
                <li><a href="work-with-us.php">Work With Us</a></li>
                <li><a href="contact.php" class="active">Contact Us</a></li>
                <li><a href="donate.php" class="donateBtn">Donate</a></li>
            </ul>
        </div>
    </div>
    <div class="Breadcrumbs js-reveal">
        <div class="title">Contact Us</div>
        <p class="linksLadder">Home/<span>Contact</span></p>
    </div>

    <div class="thanksMsg js-reveal">
        Thank you for your interest in connecting with us. We welcome your inquiries, feedback, and collaboration
        opportunities. Please feel free to reach out to us.
    </div>
    <p class="bePartText js-reveal emailId">
        E-mail: info@animalcareindia.org.in
    </p>
    <div class="address js-reveal">
        <p class="title">SWASTIK APARTMENT</p>
        <p>RZF-988/16, flat no. 204, Second floor, Ambedkar Marg, </p>
        <p>Rajnagar part-2,Palam Colony, New Delhi -110077</p>
        <p>Contact: +91 9315982650</p>
    </div>

    <div class="rowAnimText js-reveal">
        <div class="contactForm textCol">
            <form action="" method="post" action="<?php echo $SERVER['PHP_SELF']; ?>">
                <div><input type="text" name="name" placeholder="Name" required></div>
                <div><input type="email" name="email" placeholder="Email" required></div>
                <div><input type="text" name="phone" placeholder="Phone" required></div>
                <div><textarea name="message" id="message" cols="30" rows="2" placeholder="Message" required></textarea>
                </div>
                <div class="submit"><input type="submit" name="esubmit" value="Send Inquiry"></div>
            </form>


            <?php
            if (isset($_POST['esubmit'])) {
                $to = "tech.animalcare@gmail.com";
                $subject = "Enquiry: Animal Care Website";
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];

                $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

                $headers = "From: $email\r\n" .
                    "Reply-To: $email\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                if (mail($to, $subject, $body, $headers)) {
                    echo '<div class="message success">Email has been sent successfully.</div>';
                } else {
                    echo '<div class="message failure">Email sending failed.</div>';
                }


            }
            ?>
        </div>
        <div class="imgCol"></div>
    </div>

    <p class="bePartText js-reveal">
        Be a part of Animal Care and help us create a better world for animals. Donate now and make a difference.
        <a class="donateBtn" href="get-involved.php">Donate</a>
    </p>

    <div class="footer js-reveal">
        <footer>
            <div class="innerFtrContainer">
                <div class="item logoSocial">
                    <div class="logo"></div>
                    <div class="socialIcons">
                        <a target="_blank" href="https://www.facebook.com/animalcareindia.org.in">
                            <div class="fb"><i class="fa-brands fa-facebook-f"></i></div>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/animalcareindia.org.in/">
                            <div class="insta"><i class="fa-brands fa-instagram"></i></div>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/@animalcareindia">
                            <div class="yt"><i class="fa-brands fa-youtube"></i></div>
                        </a>
                    </div>
                    <div class="footerIntro">
                        Welcome to animal care, where compassion meets dedication. Every creature
                        finds solace and support in our loving hands.
                    </div>
                </div>
                <div class="item siteMap">
                    <p class="FooterTitleTxt">SITE MAP</p>
                    <ul class="siteMapUL Home">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="our-work.php">Our Work</a></li>
                        <li><a href="get-involved.php">Get Involved</a></li>
                        <li><a href="work-with-us.php">Work With Us</a></li>

                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="terms-and-conditions.php">Terms and Conditions</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="shipping-delivery.php">Shipping and Delivery</a></li>
                        <li><a href="cancellation-refund.php">Cancellation and Refund</a></li>
                    </ul>
                </div>

                <div class="item address home">
                    <p class="title">SWASTIK APARTMENT</p>
                    <p>RZF-988/16, flat no. 204, Second floor,</p>
                    <p>Ambedkar Marg, Rajnagar part-2,Palam</p>
                    <p>Colony,New Delhi -110077</p>
                    <p>Contact: +91 9315982650</p>
                    <p>E-mail: info@animalcareindia.org.in</p>
                </div>
            </div>
            <div class="copyright">Copyright © 2024 Animal Care</div>
        </footer>
    </div>
    <script src="JS/jquery.scroll-reveal.js"></script>
    <script src="JS/mobileMenu.js"></script>
    <script>
        $.fn.scrollReveal();
    </script>

</body>

</html>