<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | MySPBU</title>
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
                            <a href="<?php echo site_url('/'); ?>" class="nav-item nav-link active">Home</a>
                            <a href="<?php echo site_url('web/map'); ?>" class="nav-item nav-link">Map</a>
                            <a href="<?php echo site_url('web/benefit'); ?>" class="nav-item nav-link">Benefit</a>
                            <a href="<?php echo site_url('web/promo'); ?>" class="nav-item nav-link">Promo</a>
                            <a href="<?php echo site_url('web/aboutus'); ?>" class="nav-item nav-link">About Us</a>
                            <a href="<?php echo site_url('web/profile'); ?>" class="nav-item nav-link">Profile</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="<?= base_url() ?>assets\images\animasi_spbu.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Gas Station? MySPBU Is The Solution!
                            </h5>
                            <h2 class="display-3 text-white mb-md-4">MySPBU: Your Travel Companion, Find Gas Stations
                                Around You</h2>
                            <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Explore SPBU Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">SPBU</h5>
                <h1>Explore SPBU</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div
                        class="cat-item d-flex align-items-center justify-content-center position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\dokumentasi_spbu\spbu_1.png" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SPBU in Cirendeu</h4>
                            <span>Jl. Ciputat Raya No.1, Cirendeu</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div
                        class="cat-item d-flex align-items-center justify-content-center position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\dokumentasi_spbu\spbu_2.png" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SPBU in Pisangan</h4>
                            <span>Jl. Ir H. Juanda No.71a</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div
                        class="cat-item d-flex align-items-center justify-content-center position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\dokumentasi_spbu\spbu_3.png" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SPBU in Ciputat</h4>
                            <span>Jl. Otista Raya A No.2</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div
                        class="cat-item d-flex align-items-center justify-content-center position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\dokumentasi_spbu\spbu_4.png" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SPBU in Cipayung</h4>
                            <span>Jl. Dewi Sartika No.110E</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div
                        class="cat-item d-flex align-items-center justify-content-center position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\dokumentasi_spbu\spbu_11.png" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SPBU in Rempoa</h4>
                            <span>Jl.Pahlwan, Rempoa</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div
                        class="cat-item d-flex align-items-center justify-content-center position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\dokumentasi_spbu\spbu_13.png" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SPBU in Rengas</h4>
                            <span>Jl. WR Supratman No.33</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div
                        class="cat-item d-flex align-items-center justify-content-center position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\dokumentasi_spbu\spbu_15.png" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SPBU in Pd.Aren</h4>
                            <span>Jl. Bintaro Utama 3 Sektor 3</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div
                        class="cat-item d-flex align-items-center justify-content-center position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\dokumentasi_spbu\spbu_12.png" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SPBU in Rempoa</h4>
                            <span>Jl.Pahlwan No.35D, Rempoa</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore SPBU End -->

    <!-- MySPBU News Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1>MySPBU News</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\Infospbu\gambar1.1.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-building text-primary mr-2"></i>MySPBU</small>
                                <small class="m-0"></i>20 Desember 2024</small>
                            </div>
                            <a class="h5" href="">Pertamina Grand Prix of Indonesia 2024, Ajang Promosi Sportainment
                                Berkelas Dunia</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-primary">View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\Infospbu\gambar2.1.jpeg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-building text-primary mr-2"></i>MySPBU</small>
                                <small class="m-0"></i>10 Desember 2024</small>
                            </div>
                            <a class="h5" href="">Pertamina mengimbau masyarakat untuk tidak 'panic buying' BBM</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-primary">View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\Infospbu\gambar3.jpeg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-building text-primary mr-2"></i>MySPBU</small>
                                <small class="m-0"></i>20 November 2024</small>
                            </div>
                            <a class="h5" href="">Pertamina memastikan kesiapan BBM, gas, dan avtur untuk menyambut
                                puncak arus mudik Lebaran 2024.</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-primary">View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\Infospbu\gambar4.jpeg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-building text-primary mr-2"></i>MySPBU</small>
                                <small class="m-0"></i>1 November 2024</small>
                            </div>
                            <a class="h5" href="">Beredar Surat Panggilan Kerja Palsu Pertamina, Hati-hati Lur!</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-primary">View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\Infospbu\gambar5.png" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-building text-primary mr-2"></i>MySPBU</small>
                                <small class="m-0"></i>27 Oktober 2024</small>
                            </div>
                            <a class="h5" href="">Pertamina SIGAP: Informasi Energi & Kesempatan Berkarir</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-primary">View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\Infospbu\gambar6.2.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-building text-primary mr-2"></i>MySPBU</small>
                                <small class="m-0"></i>20 Oktober 2024</small>
                            </div>
                            <a class="h5" href="">Pertamina Raih Predikat Informatif 2024, Bukti Komitmen Keterbukaan
                                Informasi Publik</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-primary">View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MySPBU News End -->


    <!-- Membership Start -->
    <div class="container-fluid bg-dark py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Need Any Promo?</h5>
                        <h1 class="text-white">30% Off For New Membership</h1>
                    </div>
                    <p class="text-white">Welcome new members! Enjoy immediate benefits with 30% off your first
                        purchase. Member now and save more!</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Save more fuel with 30% Discount
                        </li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Collect Points and Redeem them for
                            Attractive Rewards!</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Prioritized Services for MySPBU
                            Members!
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-1">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Membership Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-secondary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your name"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your email"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select a Membership</option>
                                        <option value="1">Membership 1</option>
                                        <option value="2">Membership 2</option>
                                        <option value="3">Membership 3</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Membership
                                        Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Membership End -->

    <!-- Founder Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Founder</h5>
                <h1>Meet Our Founder</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="<?= base_url() ?>assets/web/img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Santi</h5>
                            <p class="m-0">Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="<?= base_url() ?>assets/web/img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Bayu Wicaksono</h5>
                            <p class="m-0">Co-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="<?= base_url() ?>assets/web/img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Yolanda</h5>
                            <p class="m-0">Manager 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="<?= base_url() ?>assets/web/img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>El nino</h5>
                            <p class="m-0">Manager 2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Founder End -->

    <!-- Our Product Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Product</h5>
                <h1>Latest From Our Product</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\our_product\keduax.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Keduax</h5>
                            <p class="text-primary m-0">28 September, 2023</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\our_product\ketigax.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Ketigax</h5>
                            <p class="text-primary m-0">9 Februari, 2022</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?= base_url() ?>assets\our_product\keempax.png" alt="">
                        <a class="blog-overlay text-decoration-none" href="">
                            <h5 class="text-white mb-3">Keempax</h5>
                            <p class="text-primary m-0">24 Agustus, 2021</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Product End -->


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