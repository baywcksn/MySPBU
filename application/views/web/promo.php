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

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MySPBU. All rights reserved.</p>
    </footer>

    <!-- Script untuk Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>