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
                    <span class="text-white">अपनी</span>
                    <h1 class="text-capitalize mb-5 text-lg">नियुक्ति बुक करें</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="appoinment section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-3">
                    <div class="feature-icon mb-3">
                        <i class="icofont-support text-lg"></i>
                    </div>
                    <span class="h3">आपातकालीन सेवा के लिए कॉल करें!</span>
                    <h2 class="text-color mt-3">+91 7545562263</h2>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">अपॉइंटमेंट बुक करें</h2>
<!--                    <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit-->
<!--                        . Iste dolorum atque similique praesentium soluta.</p>-->
                    <form name="sentMessage" id="#" class="appoinment-form" action="mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>विभाग चुनें</option>
                                        <option>एनेस्थिसियोलॉजी</option>
                                        <option>प्रसूति & प्रसूतिशास्र</option>
                                        <option>सामान्य दवा</option>
                                        <option>सामान्य शल्य चिकित्सा</option>
                                        <option>दंत चिकित्सा</option>
                                        <option>बच्चों का चिकित्सक</option>
                                        <option>अस्थिरोग विभाग</option>
                                        <option>नेत्र विज्ञान विभाग</option>
                                        <option>कान, नाक, गला (ईएनटी) विभाग</option>
                                        <option>त्वचा विज्ञान</option>
                                        <option>श्वसन औषधि</option>
                                        <option>मनश्चिकित्सा</option>
                                        <option>रेडियो निदान</option>
                                        <option>भौतिक चिकित्सा</option>
                                    </select>
                                </div>
                            </div>
<!--                            <div class="col-lg-6">-->
                            <!--                                <div class="form-group">-->
                            <!--                                    <select class="form-control" id="exampleFormControlSelect2">-->
                            <!--                                        <option>Select Doctors</option>-->
                            <!--                                        <option>Software Design</option>-->
                            <!--                                        <option>Development cycle</option>-->
                            <!--                                        <option>Software Development</option>-->
                            <!--                                        <option>Maintenance</option>-->
                            <!--                                        <option>Process Query</option>-->
                            <!--                                        <option>Cost and Duration</option>-->
                            <!--                                        <option>Modal Delivery</option>-->
                            <!--                                    </select>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="date" id="date" type="text" class="form-control"
                                           placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="time" id="time" type="text" class="form-control" placeholder="Time">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="name" id="name" type="text" class="form-control"
                                           placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="phone" id="phone" type="Number" class="form-control"
                                           placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="message" id="message" class="form-control" rows="6"
                                      placeholder="Your Message"></textarea>
                        </div>
                        <input class="btn btn-main btn-round-full" type="submit" name="appointment">
<!--                        <a class="btn btn-main btn-round-full" href="confirmation.html">Make Appointment<i-->
<!--                                    class="icofont-simple-right ml-2"></i></a>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer_hi.php'; ?>
</body>
</html>