<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Promo | MySPBU</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>assets/favicon_spbu/favicon-32x32.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>assets/web/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>assets/web/css/style.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        header {
            background-color: #FF6600;
            color: white;
            text-align: center;
            padding: 40px 0;
        }

        header h1 {
            color: #FFFFFF;
            /* Ubah warna teks menjadi putih */
            font-size: 40px;
            margin-bottom: 20px;
        }

        header p {
            font-size: 18px;
            margin: 0;
        }

        .container {
            width: 90%;
            margin: 50px auto;
        }

        .promo-card {
            background: white;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 30px 0;
            padding: 30px;
            transition: transform 0.3s ease-in-out;
        }

        .promo-card:hover {
            transform: translateY(-10px);
        }

        .promo-card h2 {
            font-size: 28px;
            color: #FF6600;
            margin-bottom: 15px;
        }

        .promo-card p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .promo-card ul {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }

        .promo-card ul li {
            font-size: 16px;
            margin: 10px 0;
            color: #555;
            display: flex;
            align-items: center;
        }

        .promo-card ul li::before {
            content: "✔";
            color: #FF6600;
            margin-right: 10px;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .btn-promo {
            background-color: #FF6600;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            display: inline-block;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-promo:hover {
            background-color: #ff4d00;
        }

        @media screen and (max-width: 768px) {
            .container {
                width: 100%;
            }

            .promo-card h2 {
                font-size: 22px;
            }

            .promo-card p {
                font-size: 14px;
            }

            .promo-card ul li {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none"
                    data-toggle="collapse" href="#navbar-vertical" style="height: 70px; padding: 0 30px;">
                    <h5 class="text-primary m-0"><i class="fas fa-gas-pump"></i> MySPBU</h5>
                </a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="<?php echo site_url('/'); ?>" class="nav-item nav-link">Home</a>
                            <a href="<?php echo site_url('web/map'); ?>" class="nav-item nav-link">Map</a>
                            <a href="<?php echo site_url('web/benefit'); ?>" class="nav-item nav-link">Benefit</a>
                            <a href="<?php echo site_url('web/promo'); ?>" class="nav-item nav-link active">Promo</a>
                            <a href="<?php echo site_url('web/aboutus'); ?>" class="nav-item nav-link">About
                                Us</a>
                            <a href="<?php echo site_url('web/profile'); ?>" class="nav-item nav-link">Profile</a>
                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="">Join Membership</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Header Section -->
    <header>
        <h1>Special Promo for You!</h1>
        <p>Grab the hottest promotions at MySPBU and enjoy the best deals on fuel and services.</p>
    </header>

    <!-- Promo Cards Section -->
    <div class="container">
        <div class="promo-card">
            <h2>1. Limited Time Discount</h2>
            <p>Enjoy a 10% discount on every fuel purchase made through the MySPBU app. Hurry up, the offer lasts until
                the end of the month!</p>
            <a href="#" class="btn-promo">Claim Offer</a>
        </div>

        <div class="promo-card">
            <h2>2. Referral Bonus</h2>
            <p>Invite your friends to MySPBU and earn bonus points for every successful referral. The more you refer,
                the more you earn!</p>
            <a href="#" class="btn-promo">Invite Now</a>
        </div>

        <div class="promo-card">
            <h2>3. Gasoline Bonus for New Users</h2>
            <p>New users get an exclusive bonus of 5 liters of gasoline upon signing up for MySPBU. Start saving on your
                first refuel!</p>
            <a href="#" class="btn-promo">Sign Up Now</a>
        </div>

        <div class="promo-card">
            <h2>4. Flash Sale</h2>
            <p>Take advantage of flash sales where you can get up to 20% off on fuel purchases. Flash sales are
                available on selected days only!</p>
            <a href="#" class="btn-promo">Check Flash Sales</a>
        </div>

        <div class="promo-card">
            <h2>5. Loyalty Program</h2>
            <p>Earn reward points with every purchase at MySPBU, which can be redeemed for free services, merchandise,
                and more. Join now to start earning!</p>
            <a href="#" class="btn-promo">Join Loyalty Program</a>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Contact
                        </h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Grha Pertamina, Jl. Medan Merdeka Timur No.11-13,
                            Jakarta, 10110, Indonesia</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>134</p>
                        <p><i class="fa fa-envelope mr-2"></i>pcc134@pertamina.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Website
                        </h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Kebijakan
                                Privasi</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Waspada Penipuan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Send Your Email</h5>
                <p></p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;"
                            placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">MySPBU</a>. All Rights Reserved.
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/<?= base_url() ?>assets/web/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/web/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>assets/web/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?= base_url() ?>assets/web/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?= base_url() ?>assets/web/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>assets/web/js/main.js"></script>

</body>

</html>