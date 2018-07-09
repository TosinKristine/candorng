<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Candor | Contact</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="content/images/favicon.png" />
	<link rel='stylesheet' id='font-awesome-css' href='https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css?ver=4.9.4'
	    type='text/css' media='all' />
	<link rel="stylesheet" href="content/css/font.css">
	<link rel="stylesheet" href="content/css/bootstrap/dist/css/bootstrap.css" />
	<link href="content/css/normalize.css" rel="stylesheet" />
	<link href="content/css/icons.css" rel="stylesheet" />
	<link href="content/css/style.css" rel="stylesheet" />
	<link href="content/css/custom.css" rel="stylesheet" />
	<link href="content/css/animate.css" rel="stylesheet" />
</head>
<body id="page-contact" class="contact overview light">
             
	<?php include_once ("includes/header.html")?>

    <section id="contact-form">
        <div class="contentContainer">

            <h1>Based in Lagos, working worldwide.</h1>

            <div class="form-wrap">


                <!--! BEGIN CONTACT FORM -->

                <form id="contactForm" method="post">
                    <input type="hidden" name="subject" value="Contact Form Submission from W.S. Cumby Website">
                    <input type="hidden" name="recipient" value="spierce@cumby.com">

                    <div class="form-fields">

                        <div class="field-wrap">
                            <label>Full Name</label>
                            <input type="text" name="name" data-type="req">
                        </div>

                        <div class="fs row spaced">
                            <div class="field-wrap">
                                <label>Phone</label>
                                <input type="text" name="phone" data-type="req">
                            </div>

                            <div class="field-wrap">
                                <label>Email</label>
                                <input type="email" name="email" data-type="req">
                            </div>
                        </div>

                        <label class="ta">Message</label>
                        <textarea name="message" data-type="req"></textarea>
                    </div>

                    <button type="submit" class="cta-btn">
                        <p>SEND</p>
                        <span class="icon icon-arrow-right"></span>
                    </button>
                </form>

                <!-- END CONTACT FORM -->


                <div class="form-cover"></div>
                <div class="thanks">
                    
                    <div class="txt">
                        <h3>Thank You!</h3>
                        <p>We will be in contact shortly.</p>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <!--! END FORM -->





    <!--! - SECTION: 1 CONTACT DETAILS -->

    <section id="contact-details">
        <div class="contentContainer">

            <div class="row main spaced">
                <div class="col" data-num="1">
                    <h4>71 B, Mainland Way</h4>
                    <p>Dolphin Esate
                        <br /> Ikoyi, Lagos Nigeria
                        <br /> p. 0809.900.7711
                </div>
                <div class="col" data-num="2">
                    <h4>New Business Inquiries Contact</h4>
                    <p>
                        <br /> Business Development Team
                        <br />
                        <a href="mailto:info@candor.ng">info@candor.ng</a>
                        <br /> 0809.900.7711</p>
                </div>
                <div class="col" data-num="3">
                    <p>For General Information
                        <a href="mailto:info@candor.ng">info@candor.ng</a>
                    </p>
                </div>
                 </div>

        </div>
    </section>


	<?php include_once ("includes/footer.html")?>

</body>

</html>