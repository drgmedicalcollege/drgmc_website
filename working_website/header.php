<?php
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">
    <title>DRGMC</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"/>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
    <!-- Slider Stylesheet -->
    <link rel="stylesheet" href="css/slider.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .dropdown-content {
            display: block;
            position: absolute;
            background-color: #f9f9f9;
            width: 580rem;
            left: 0;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 190rem;
            padding: 0px;
            margin: 0px;
            height: auto;
        }

        .column a:focus, a:hover {
            color: #e12424;
        }

        /* Clear floats after the columns */
    </style>
</head>
<body id="top">
<header>
    <div class="header-top-bar py-0 bg-light text-danger font-weight-bold">
        <marquee scrollamount="12">******* Ambulance services available! ******* 24x7 Emergency services ******* Please
            Ask for the revised rates *******
        </marquee>
    </div>
    <div class="header-top-bar py-0">
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <br>
                        <h5 class="modal-title" id="exampleModalLongTitle">Welcome to Dr. Rajendra Gode Multispeciality
                            & General Hospital</h5>
                        <br>
                    </div>
                    <div class="modal-body text-center">
                        <a href='#' data-dismiss="modal"
                           class="btn btn-main btn-round-full"> Continue in English
                            <i class="fa" aria-hidden="true"></i></a>
                        <a href='index_hi.php'
                           class="btn btn-outline-primary rounded-pill btn-sm"> हिंदी में स्विच करें
                            <i class="fa" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 ml-2">
                <ul class="top-bar-info list-inline-item pl-0 mb-0">
                    <li class="list-inline-item"><a href="mailto:drghospitalamravati@gmail.com"><i
                                    class="icofont-support-faq mr-2 ml-5"></i>drghospitalamravati@gmail.com</a></li>
                    <li class="list-inline-item"><a href="https://goo.gl/maps/kfkLKmjBzABhnXjo6" target="_blank"
                                                    rel="noreferrer noopener"><i class="icofont-location-pin mr-2"></i>Amravati
                            Maharashtra</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                    <a href="tel:+23-345-67890">
                        <span>Call Now: </span>
                        <span>+91 78877212345 | 0721257259 | 0721257257</span>
                    </a>
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Select Language
            </button>
            <div class="form-group col mr-2 mb-0 my-1 px-5">
                <!--                <select class="form-control form-control-sm  my-0 py-0 border-0 rounded-pill"-->
                <!--                        id="exampleFormControlSelect1">-->
                <!--                    <option selected="selected">English</option>-->
                <!--                    <option value="index_hi.php">Hindi</option>-->
                <!--                </select>-->
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container-fluid">
            <a href="index.php">
                <img src="images/logo_black.svg" alt="" class="img-fluid" style="height: 83px;">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown03" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">About <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="about-hospital.php">About Hospital</a></li>
                            <li><a class="dropdown-item" href="our-chairman.php">Our Chairman</a></li>
                            <li><a class="dropdown-item" href="vision.php">Inspiration & Philosophy</a></li>
<!--                            <li><a class="dropdown-item" href="accreditation.php">Accreditation</a></li>-->
                            <li><a class="dropdown-item" href="quality-commitment.php">Quality Commitment</a></li>
<!--                            <li><a class="dropdown-item" href="virtual-tour.php">Virtual Tour</a></li>-->
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown03"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Specialities <i
                                    class="icofont-thin-down"></i></a>
                        <div class="dropdown-content">
                            <div class="row">
                                <ul class="dropdown-menu">
                                    <div class="column">
                                        <li><a class="dropdown-item" href="s1_anaesthesiology.php">Anesthesiology</a>
                                        </li>
                                        <li><a class="dropdown-item" href="s2_obstetrics.php">Obstetrics &
                                                Gynecology</a></li>
                                        <li><a class="dropdown-item" href="s3_GeneralMedicine.php">General Medicine</a>
                                        </li>
                                        <li><a class="dropdown-item" href="s4_GeneralSurgery.php">General Surgery</a>
                                        </li>
                                        <li><a class="dropdown-item" href="s5_dentistry.php">Dentistry</a></li>
                                    </div>
                                    <div class="column">
                                        <li><a class="dropdown-item" href="s6_Pediatrics.php">Pediatrics</a>
                                        </li>
                                        <li><a class="dropdown-item" href="s7_Orthopedics.php">Orthopedics</a></li>
                                        <li><a class="dropdown-item" href="s8_Ophthalmology.php">Ophthalmology</a></li>
                                        <li><a class="dropdown-item" href="s9_Ear,%20Nose,%20Throat%20(ENT).php">Ear,
                                                Nose, Throat
                                                (ENT)</a></li>
                                        <li><a class="dropdown-item" href="s10_Dermatology.php">Dermatology</a>
                                        </li>
                                    </div>
                                    <div class="column">
                                        <li><a class="dropdown-item" href="s11_Pulmonary%20Medicine.php">Respiratory
                                                Medicine</a>
                                        </li>
                                        <li><a class="dropdown-item" href="s12_Psychiatry.php">Psychiatry</a>
                                        </li>
                                        <li><a class="dropdown-item" href="s13_radiology.php">Radio-diagnosis</a>
                                        </li>
                                        <li><a class="dropdown-item" href="s14_physiotherapy.php">Physiotherapy</a></li>
                                        <li><a class="dropdown-item" href="all-specialities.php">All Specialities</a>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="all-facilities.php" id="dropdown04"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Facilities <i
                                    class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="#">Blood bank </a></li>
                            <li><a class="dropdown-item" href="#">Central Clinical <br> Laboratory (24/7)</a>
                            <li><a class="dropdown-item" href="#">Pharmacy (24/7)</a></li>
                            <li><a class="dropdown-item" href="#">Emergency Medicine (24/7)</a></li>
                            <li><a class="dropdown-item" href="#">Ambulance – 24/7 </a></li>
                            <li><a class="dropdown-item" href="#">ICU, NICU, ICCU,<br> PICU, SICU, HDU
                                </a></li>
                            <li><a class="dropdown-item" href="#">Online consultation</a></li>
                            <li><a class="dropdown-item" href="#">Operation theatres</a></li>
                            <li><a class="dropdown-item" href="#">In-patient department</a>
                            <li><a class="dropdown-item" href="#">Out-patient department</a>
                            <li><a class="dropdown-item" href="#">Cafeteria</a>
                            </li>
                            <li><a class="dropdown-item" href="all-facilities.php">All Facilities</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Doctors</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a href='appoinment.php'
                                            class="btn btn-outline-primary rounded-pill btn-sm"> MAKE A APPOINTMENT
                            <i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<script>
    document.getElementById("exampleFormControlSelect1").onclick = function () {
        myFunction()
    };

    function myFunction() {
        // redirect page to another page by getid
        window.location.href = "index_hi.php";
    }
</script>
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        $("#exampleModalCenter").modal('show');-->
<!--    });-->
<!--</script>-->
</body>