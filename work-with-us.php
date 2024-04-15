<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Care - Every Life, Every Heartbeat</title>
    <link rel="stylesheet" href="./css/workWithUs.css">
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
                <li><a href="work-with-us.php" class="active">Work With Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="donate.php" class="donateBtn">Donate</a></li>
            </ul>
        </div>
    </div>

    <div class="Breadcrumbs js-reveal">
        <div class="title">Work With Us</div>
        <p class="linksLadder">Home/<span>Work With Us</span></p>
    </div>

    <div class="mainMessageTxt js-reveal">
        Do something amazing for the animals!
    </div>

    <div class="rowAnimText js-reveal">
        <div class="textCol">
            <p class="subParagraph">
                <span class="Strong">Fundraise:</span>
                Do you have a passion for food? Love seeking thrills? Enjoy running? No matter what excites you, we are
                here to assist you in transforming it into an incredible fundraising opportunity!
            </p>

            <p class="subParagraph">
                By opting to raise funds for Animal Care, you become a valuable contributor to an extraordinary cause,
                playing a crucial role inputting an end to animal suffering and being part of the solution.
            </p>

            <a class="donateBtn" href="get-involved.php">Start Now</a>
        </div>
        <div class="imgCol"></div>
    </div>

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