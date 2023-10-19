<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-------- CDN Link --------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-------- CDN Link --------->

    <!---------- Google Fonts --------------->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!---------- Google Fonts --------------->
  <!------ Custome Css ------->
      <link rel="stylesheet" href="<?=base_url("frontend.style.css"); ?>">
    <!------ Custome Css ------->
    <title>Document</title>
</head>
<body>
    
        <div class="full-width-header header-style2 ">
            <!--Header Start-->

            <!-- Topbar Area Start -->
            <div class="topbar-area">
                <div class="container">
                    <div class="row y-middle align-items-center">
                        <div class="col-md-7">
                            <ul class="topbar-contact content-left">
                                <li>
                                    <i class="fa-regular fa-envelope"></i>
                                    <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:+088589-8745">(+088) 589-8745</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5  ">
                            <ul class="topbar-right content-right">
                                <li class="social-icon">
                                    <a href="login.html"><i class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li class="social-icon">
                                    <a href="login.html"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                                <li class="social-icon">
                                    <a href="login.html"><i class="fa-brands fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!--=========Manu bar =========-->
            <header class="p-3 text-bg-dark sticky-top">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center  justify-content-between">
                        <div>
                            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">

                                <?php
                                    use App\Models\LogoModel;
                                    $logos = new LogoModel();
                                    $logo= $logos->first();
                                ?>

                            <img class="" src="<?= base_url('uploads/logo/'.$logo['logo_image']) ?>" width="100"  alt="">
                                <!-- <img src="" width="40" height="32"  alt="Mosharrof" sizes="" srcset=""> -->
                            </a>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                                <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                                <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                                <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                                <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                            </ul>

                            <div class="text-end">
                                <button type="button" class="btn btn-outline-light me-2">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>

    <?= $this->renderSection('content') ?>


    <!-- Footer Start -->
    <div class="container-fluid bg-black text-white footer wow fadeIn" data-wow-delay="0.1s">
            <!-- <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-orange rounded p-4">
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">School</h1></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-orange text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-orange text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-orange text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">Food & Restaurant</a>
                                <a class="btn btn-link" href="">Spa & Fitness</a>
                                <a class="btn btn-link" href="">Sports & Gaming</a>
                                <a class="btn btn-link" href="">Event & Party</a>
                                <a class="btn btn-link" href="">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">School</a>, All Right Reserved. 
							Designed By <a class="border-bottom" href="#">School</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


      <!----- Js CDN Start ------>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!----- Js CDN End ------>

<!------- Custom Js Start -------->
<script src="<?=base_url("jQuery.js")?> "></script>
<!------- Custom Js End -------->
</body>
</html>