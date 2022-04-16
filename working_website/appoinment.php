<!DOCTYPE html>
<html lang="zxx">
<?php include 'header.php'; ?>
<body id="top">
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Book your  </span>
                    <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>
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
                    <span class="h3">Call for an Emergency Service!</span>
                    <h2 class="text-color mt-3">+91 7545562263</h2>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                    <h2 class="mb-2 title-color">Book an appointment</h2>
<!--                    <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit-->
<!--                        . Iste dolorum atque similique praesentium soluta.</p>-->
                    <form name="sentMessage" id="#" class="appoinment-form" action="mail.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Choose Department</option>
                                        <option>Anesthesiology</option>
                                        <option>Obstetrics & Gynecology</option>
                                        <option>General Medicine</option>
                                        <option>General Surgery</option>
                                        <option>Dentistry</option>
                                        <option>Pediatrics</option>
                                        <option>Orthopedics</option>
                                        <option>Ophthalmology</option>
                                        <option>Ear, Nose, Throat (ENT)</option>
                                        <option>Dermatology</option>
                                        <option>Respiratory Medicine</option>
                                        <option>Psychiatry</option>
                                        <option>Radio-diagnosis</option>
                                        <option>Physiotherapy</option>
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
<?php include 'footer.php'; ?>
</body>
</html>