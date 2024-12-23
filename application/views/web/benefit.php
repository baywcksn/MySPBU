<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Benefit | MySPBU</title>
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
            background-color: #f8f9fa;
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

        .benefit-card {
            background: white;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 30px 0;
            padding: 30px;
            transition: transform 0.3s ease-in-out;
        }

        .benefit-card:hover {
            transform: translateY(-10px);
        }

        .benefit-card h2 {
            font-size: 28px;
            color: #FF6600;
            margin-bottom: 15px;
        }

        .benefit-card p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .benefit-card ul {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }

        .benefit-card ul li {
            font-size: 16px;
            margin: 10px 0;
            color: #555;
            display: flex;
            align-items: center;
        }

        .benefit-card ul li::before {
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

        @media screen and (max-width: 768px) {
            .container {
                width: 100%;
            }

            .benefit-card h2 {
                font-size: 22px;
            }

            .benefit-card p {
                font-size: 14px;
            }

            .benefit-card ul li {
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
                            <a href="<?php echo site_url('web/benefit'); ?>"
                                class="nav-item nav-link active">Benefit</a>
                            <a href="<?php echo site_url('web/promo'); ?>" class="nav-item nav-link">Promo</a>
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
        <h1>Benefit MySPBU</h1>
        <p>Discover the features and advantages of using MySPBU for all your fueling needs!</p>
    </header>

    <!-- Benefit Cards Section -->
    <div class="container">
        <div class="benefit-card">
            <h2>1. Kemudahan Akses</h2>
            <p>MySPBU memberikan kemudahan dalam mencari lokasi SPBU terdekat dengan menggunakan fitur pencarian lokasi
                berbasis GPS. Anda bisa menemukan SPBU dalam hitungan detik.</p>
        </div>

        <div class="benefit-card">
            <h2>2. Pembayaran Digital</h2>
            <p>Dengan MySPBU, Anda dapat melakukan pembayaran bensin secara digital, menghindari antrian panjang dan
                pembayaran tunai. Proses yang cepat dan aman.</p>
        </div>

        <div class="benefit-card">
            <h2>3. Program Loyalti dan Reward</h2>
            <p>MySPBU menawarkan program loyalti dengan berbagai reward menarik yang dapat Anda kumpulkan setiap kali
                mengisi bahan bakar. Semakin sering Anda menggunakan aplikasi, semakin banyak keuntungan yang bisa
                didapatkan!</p>
        </div>

        <div class="benefit-card">
            <h2>4. Notifikasi dan Update Berkala</h2>
            <p>Aplikasi ini memberikan notifikasi tentang promo, bahan bakar yang tersedia, dan informasi penting
                lainnya secara real-time, sehingga Anda tidak akan ketinggalan informasi terbaru.</p>
        </div>

        <div class="benefit-card">
            <h2>5. Transparansi Harga</h2>
            <p>MySPBU membantu Anda membandingkan harga bahan bakar di berbagai SPBU, sehingga Anda bisa memilih yang
                paling hemat dan sesuai dengan anggaran.</p>
        </div>

        <div class="benefit-card">
            <h2>6. Fitur Umpan Balik Pengguna</h2>
            <p>Pengguna dapat memberikan umpan balik untuk meningkatkan kualitas layanan SPBU melalui aplikasi,
                menciptakan pengalaman pengguna yang lebih baik dan lebih terfokus pada kebutuhan pelanggan.</p>
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