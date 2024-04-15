<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Care - Every Life, Every Heartbeat</title>
    <link rel="stylesheet" href="./css/donate.css">
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
                <li><a href="work-with-us.php">Work With Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="donate.php" class="donateBtn">Donate</a></li>
            </ul>
        </div>
    </div>

    <div class="Breadcrumbs js-reveal">
        <div class="title">Donate Us</div>
        <!-- <p class="linksLadder">Home/<span>Contact</span></p> -->
    </div>

    <div class="thanksMsg js-reveal">
        Your generosity can make a real difference in the lives of those we serve. By donating to Animal Care, you
        become a vital part of our mission. Every contribution, no matter the size, helps us create positive change and
        improve the well-being of our community.
    </div>

    <div class="thanksMsg js-reveal support_work">
        Your Support is important to our work
    </div>

    <div class="rowAnimText js-reveal">

        <form id="donateForm" onsubmit="return handleDonateSubmit(event);">
            <div class="mainWrapperForm">
                <div class="formItem">
                    <div class="innerFormDiv">
                        <div class="formTopsec">
                            <span class="Title">Animal Sponsorship <br> (Food & Medical Support)</span>
                        </div>
                        <div class="formBottomsec">
                            <div class="Formcontent">
                                <div class="item"><label for="25T"><input type="checkbox" id="25T" class="checkbox"
                                            value="25000"> ₹
                                        25,000</label>
                                    <div class="purposeFor">Cow / Bull</div>
                                </div>
                                <div class="item"><label for="15T"><input type="checkbox" id="15T" class="checkbox"
                                            value="15000"> ₹
                                        15,000</label>
                                    <div class="purposeFor">Dog</div>
                                </div>
                                <div class="item"><label for="12T"><input type="checkbox" id="12T" class="checkbox"
                                            value="12000"> ₹
                                        12,000</label>
                                    <div class="purposeFor">Cat</div>
                                </div>
                                <div class="item"><label for="10T"><input type="checkbox" id="10T" class="checkbox"
                                            value="10000"> ₹
                                        10,000</label>
                                    <div class="purposeFor">Monkey</div>
                                </div>
                                <div class="item"><label for="75H"><input type="checkbox" id="75H" class="checkbox"
                                            value="7500"> ₹
                                        7,500</label>
                                    <div class="purposeFor">Rabbit</div>
                                </div>
                                <div class="item"><label for="75H2"><input type="checkbox" id="75H2" class="checkbox"
                                            value="7500"> ₹
                                        7,500</label>
                                    <div class="purposeFor">Bird</div>
                                </div>
                                <div class="item"><label for="5T"><input type="checkbox" id="5T" class="checkbox"
                                            value="5000"> ₹
                                        5,000</label>
                                    <div class="purposeFor">For a rescue</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="innerFormDiv">
                        <div class="formTopsec">
                            <span class="Title">Animal Welfare</span>
                        </div>
                        <div class="formBottomsec">
                            <div class="Formcontent">
                                <div class="item"><label for="85T"><input type="checkbox" id="85T" class="checkbox"
                                            value="85000"> ₹
                                        85,000</label>
                                    <div class="purposeFor">Ambulance Services</div>
                                </div>
                                <div class="item"><label for="1L25T"><input type="checkbox" id="1L25T" class="checkbox"
                                            value="125000"> ₹
                                        1,25,000</label>
                                    <div class="purposeFor">Medical Equipment & Medicines</div>
                                </div>
                                <div class="item"><label for="8L50T"><input type="checkbox" id="8L50T" class="checkbox"
                                            value="850000"> ₹
                                        8,50,000</label>
                                    <div class="purposeFor">Buy an Ambulance</div>
                                </div>
                                <div class="otherTxt">
                                    <input type="number" value="other" name="otherAmt" placeholder="Other Amount"
                                        class="checkbox" id="OtrAmt">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formItem">
                    <div class="innerFormDiv shelterSection">
                        <div class="formTopsec">
                            <span class="Title">Help us to build/Maintain shelter</span>
                        </div>
                        <div class="formBottomsec">
                            <div class="Formcontent">
                                <div class="wrapper">
                                    <div class="item"><label for="HLP20T"><input type="checkbox" class="checkbox"
                                                id="HLP20T" value="20000"> ₹
                                            20,000</label></div>
                                    <div class="item"><label for="HLP50T"><input type="checkbox" class="checkbox"
                                                id="HLP50T" value="50000"> ₹
                                            50,000</label></div>
                                    <div class="item"><label for="HLP1L"><input type="checkbox" class="checkbox"
                                                id="HLP1L" value="100000"> ₹
                                            1,00,000</label></div>
                                </div>

                                <div class="wrapper">
                                    <div class="item"><label for="HLP30T"><input type="checkbox" class="checkbox"
                                                id="HLP30T" value="30000"> ₹
                                            30,000</label></div>
                                    <div class="item"><label for="HLP10T"><input type="checkbox" class="checkbox"
                                                id="HLP10T" value="10000"> ₹
                                            10,000</label></div>
                                    <div class="item"><label for="HLP2L50T"><input type="checkbox" class="checkbox"
                                                id="HLP2L50T" value="250000"> ₹
                                            2,50,000</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="innerFormDiv">
                        <div class="formTopsec">
                            <span class="Title">Sign Up As a Member</span>
                        </div>
                        <div class="formBottomsec">
                            <div class="Formcontent">
                                <div class="item"><label for="MEM15T"><input type="radio" class="radio" id="MEM15T"
                                            name="membership" value="15000">
                                        ₹ 15,000</label>
                                    <div class="purposeFor">Five Years</div>
                                </div>
                                <div class="item"><label for="MEM95H"><input type="radio" class="radio" id="MEM95H"
                                            name="membership" value="9500">
                                        ₹ 9,500</label>
                                    <div class="purposeFor">Three Years</div>
                                </div>
                                <div class="item"><label for="MEM6T"><input type="radio" class="radio" id="MEM6T"
                                            name="membership" value="6000"> ₹
                                        6000</label>
                                    <div class="purposeFor">Two Years</div>
                                </div>
                                <div class="item"><label for="MEM3T"><input type="radio" class="radio" id="MEM3T"
                                            name="membership" value="3000"> ₹
                                        3000</label>
                                    <div class="purposeFor">One Year</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="innerFormDiv allTTL">
                        <div class="ttlContrib">
                            <div class="txt">Total Contribution: </div>
                            <div id="AmountTTL"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottomAddressDetails">
                <div class="leftFormCont">
                    <div class="inputWrapper"><input type="text" name="name" placeholder="Your Name" required></div>
                    <div class="inputWrapper"><input type="text" name="phone" placeholder="Phone Number" required></div>
                    <div class="inputWrapper"><input type="email" name="email" placeholder="Your Email" required></div>
                    <div class="inputWrapper"><input type="text" name="address" placeholder="Address" required></div>
                    <div class="inputWrapper"><input type="text" name="panNum" placeholder="PAN Number" required></div>
                    <div class="inputWrapper termsCondition">
                        <input type="checkbox" id="acceptTnC" checked required
                            oninvalid="this.setCustomValidity('Please select this option to proceed')">
                        <label for="acceptTnC" style="cursor:pointer">
                            I am willing to be contacted via phone Or email for programs updates and repeat
                            contributions for Animal Care
                        </label>
                    </div>
                    <input type="submit" value="Submit">
                </div>
                <div class="RytImgCont"></div>
            </div>
        </form>



        <!-- <div class="DonateForm textCol">
            <form id="donateForm" onsubmit="return handleDonateSubmit(event);">

                <div class="wrapNameEmail">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="amtRow">
                    <label for="fiveH" class="eachAmt"><input id="fiveH" type="radio" name="amount" value="500">
                        ₹500</label>
                    <label for="OneT" class="eachAmt"><input id="OneT" type="radio" name="amount" value="1000">
                        ₹1000</label>
                    <label for="25H" class="eachAmt"><input id="25H" type="radio" name="amount" value="2500">
                        ₹2500</label>
                    <label for="other" class="eachAmt"><input id="other" type="radio" name="amount" value="other">
                        Other</label>
                </div>
                <div class="DogprayMsgtxt js-reveal">
                    <div class="DogIcon"></div>
                    <div class="Msgtxt">Only in 2500 INR, you can sponsor a dog's monthly food requirement.</div>
                </div>
                <div class="AmtPanRow js-reveal">
                    <div class="icoInput">
                        <div class="ico">
                            <i class="fa fa-inr" aria-hidden="true"></i>
                        </div>
                        <input type="number" placeholder="Your Amount" required id="otherAmt">
                    </div>

                    <div class="icoInput">
                        <div class="ico">
                            <i class="fa-solid fa-credit-card"></i>
                        </div>
                        <input type="text" name="panNum" placeholder="PAN No." required>
                    </div>
                </div>
                <div class="submit"><input type="submit" id="donateNow" value="Donate Now"></div>
            </form>
        </div> -->
        <!-- <div class="imgCol"></div> -->
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
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>


        let dataArray = [];
        $(document).ready(function () {
            $('#donateForm').submit(false);

            function pushUniquePurpose(element) {
                if (!dataArray.includes(element)) {
                    dataArray.push(element);
                }
            }

            $('#OtrAmt').on('keyup', function () {
                $('#AmountTTL').text($(this).val());
            });

            $('#donateForm .mainWrapperForm input[type="checkbox"],#donateForm .mainWrapperForm input[type="radio"]').on('change', function () {

                let total = 0;


                let valueChk = $(this).val();
                if (valueChk != "other") {
                    $('#OtrAmt').val("").attr('disabled', true).removeAttr('required');
                } else {
                    $('#OtrAmt').attr('required', true).attr('disabled', false);
                }

                // Calculate total from checkboxes
                $('.checkbox:checked').each(function () {
                    total += parseInt($(this).val());
                });

                // Calculate total from radio buttons
                $('.radio:checked').each(function () {
                    total += parseInt($(this).val());
                });

                // Update the total value in the HTML
                $('#AmountTTL').text(total.toLocaleString('en-IN'));
                let purpose = $(this).closest('label').next('div.purposeFor').text() ? $(this).closest('label').next('div.purposeFor').text() : "Section Name: Help us to build/Maintain shelter";
                let sectionName = $(this).closest('.innerFormDiv').find('div.formTopsec .Title').text();

                if ($(this).is(':checked')) {
                    pushUniquePurpose(purpose);
                } else {
                    dataArray = dataArray.filter(item => item !== purpose);
                }
                let checkedElemLen = $(this).closest(".Formcontent").find('input[type="checkbox"]:checked').length;
                let valtoDelete = $(this).closest(".innerFormDiv").find(".formTopsec .Title").text();


                // console.log($(this).closest(".Formcontent").find('input[type="checkbox"]:checked').length)

            });

        });

        function handleDonateSubmit(event) {
            event.preventDefault();
            let amount = Number($('#AmountTTL').text().replace(/,/g, ''));
            let name = $('input[name="name"]').val();
            let phone = $('input[name="phone"]').val();
            let email = $('input[name="email"]').val();
            let address = $('input[name="address"]').val();
            let panNum = $('input[name="panNum"]').val();

            var formData = {
                name, phone, email, address, panNum, amount, dataArray
            };

            console.log(formData);

            debugger;
            $.ajax({
                type: "POST",
                // url: "http://localhost:4500/api/donor/save-acf",
                url: "https://beta.quilldevelopers.com/api/donor/save-acf",
                contentType: 'application/json',
                data: JSON.stringify(formData),
                success: function (response) {
                    // const keyId = 'rzp_test_H5PK5biOGDqAR0'; // test key
                    const keyId = 'rzp_live_JXjJG4d1BVFN9J';
                    const options = {
                        key: keyId,
                        amount: response.order.amount, // Amount in paisa (e.g., 1000 for ₹10)
                        currency: 'INR',
                        name: 'Animal Care (NGO)',
                        description: 'Support Animal Care',
                        image: 'https://animalcareindia.org.in/Images/home/Logo-woutShad.png',
                        // callback_url: `http://localhost:4500/api/donor/paymentverification?name=${name}&phone=${phone}&email=${email}&address=${address}&PAN=${panNum}&purpose=${dataArray}`,
                        callback_url: `https://https://beta.quilldevelopers.com//api/donor/paymentverification?name=${name}&phone=${phone}&email=${email}&address=${address}&PAN=${panNum}&purpose=${dataArray}`,
                        theme: {
                            color: '#70B3B9'
                        },
                        order_id: response.order.id,
                    };

                    const razor = new (window).Razorpay(options);
                    razor.on('payment.failed', function (response) {
                        alert(response.error.description);
                    });

                    razor.open();
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                },
                contentType: "application/json"
            });

            $('#donateForm')[0].reset();
            $('#AmountTTL').text("");
        };
        $.fn.scrollReveal();
    </script>
</body>

</html>