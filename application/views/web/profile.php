<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About urls | MySPBU</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>assets\favicon_spbu\favicon-32x32.png" rel="icon">

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
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .header {
            background-color: #FF6600;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }

        .header h1 {
            font-size: 2.5em;
            margin: 0;
        }

        .header p {
            font-size: 1.2em;
            margin: 10px 0 0;
        }

        .content {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .profile div {
            font-size: 1.2em;
        }

        .profile div strong {
            color: #FF6600;
        }

        .about {
            margin-top: 20px;
        }

        .about h2 {
            color: #FF6600;
            margin-bottom: 10px;
        }

        .about p {
            line-height: 1.6;
        }

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #FF6600;
            color: white;
            font-size: 0.9em;
            margin-top: 20px;
        }

        .footer a {
            color: #fff;
            text-decoration: underline;
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
                            <a href="<?php echo site_url('web/promo'); ?>" class="nav-item nav-link">Promo</a>
                            <a href="<?php echo site_url('web/aboutus'); ?>" class="nav-item nav-link">About
                                Us</a>
                            <a href="<?php echo site_url('web/profile'); ?>"
                                class="nav-item nav-link active">Profile</a>
                            <div class="nav-item dropdown">
                            </div>
                        </div>
                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="">Join Membership</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="header">
        <h1>Bayu Wicasono</h1>
        <p>Manager Co-Founder | MySPBU</p>
    </div>

    <div class="content">
        <div class="profile">
            <img src="https://via.placeholder.com/100" alt="Bayu Wicasono">
            <div>
                <strong>Bayu Wicasono</strong><br>
                Manager Co-Founder of <strong>MySPBU</strong>
            </div>
        </div>

        <div class="about">
            <h2>About MySPBU</h2>
            <p>MySPBU is an innovative platform designed to simplify and enhance the fuel station experience for
                customers. Our mission is to deliver a seamless and efficient way for users to locate, manage, and
                navigate SPBU (gas stations) across the country. As the Manager Co-Founder, I oversee strategic
                development and operational excellence to bring this vision to life.</p>
        </div>
    </div>

    <div class="footer">
        &copy; 2024 Bayu Wicasono | Designed with <span style="color: red;">&hearts;</span> | <a href="#">Contact</a>
    </div>


</body>

</html>