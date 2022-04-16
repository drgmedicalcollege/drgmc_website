<!DOCTYPE html>
<html lang="zxx">
<?php include 'header_hi.php'; ?>
<body id="top">
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-5 text-lg">संपर्क में रहो</h1>
                    <!-- <ul class="list-inline breadcumb-nav">
                      <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
                      <li class="list-inline-item"><span class="text-white">/</span></li>
                      <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form start -->
<section class="section contact-info pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>हमें कॉल करें</h5>
                    +91 78877212345 | 0721257259 | 0721257257
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>हमे ईमेल करे</h5>
                    drghospitalamravati@gmail.com <br>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>स्थान</h5>
                    मरडी रोड अमरावती, महाराष्ट्र<br>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">संपर्क करें</h2>
                    <div class="divider mx-auto my-4"></div>
<!--                    <p class="mb-5">Laboriosam exercitationem molestias beatae eos pariatur, similique, excepturi-->
                    <!--                        mollitia sit perferendis maiores ratione aliquam?</p>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="contact-form" class="contact__form " method="post" action="mail.php">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control"
                                       placeholder="आपका पूरा नाम">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control"
                                       placeholder="आपका ईमेल पता">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject" id="subject" type="text" class="form-control"
                                       placeholder="आपका प्रश्न विषय">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" class="form-control"
                                       placeholder="आपकी दूरभाष संख्या">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="8"
                                  placeholder="आपका संदेश"></textarea>
                    </div>
                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit"
                               value="मेसेज भेजें"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.2494872249563!2d77.8432011151573!3d20.94249378604523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd6a15336993787%3A0xfced50511c90d593!2sDr.%20Rajendra%20Gode%20Ayurved%20College%2C%20Hospital%20and%20Research%20Centre%20Amravati!5e0!3m2!1sen!2sin!4v1648642275721!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php include 'footer_hi.php'; ?>
</body>
</html>