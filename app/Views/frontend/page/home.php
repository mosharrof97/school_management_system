<?= $this->extend('frontend/partial/layout') ?>

<?= $this->section('content') ?>
    <section>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="<?= base_url('uploads\img\1696598674_ffe0b635c76614215524.jpg')?>" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?= base_url('uploads\img\1696605872_de50b2c67d968fa52415.jpg')?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('uploads\img\1696656126_442caf1f0d31a73f5e0c.jpg')?>" class="d-block w-100 " alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class=" row ">
            <div class=" bg-orange col-3">
                <div class="text-center p-5">
                    <div><i class="fa-solid fa-building-columns"></i></div>
                    <div>University Life</div>
                </div>
            </div>

            <div class="bg-blue col-3">
                <div class="text-center p-5">
                    <div><i class="fa-solid fa-building-columns"></i></div>
                    <div>University Life</div>
                </div>
            </div>

            <div class="bg-white col-3">
                <div class="text-center p-5">
                    <div><i class="fa-solid fa-building-columns"></i></div>
                    <div>University Life</div>
                </div>
            </div>

            <div class="bg-orange col-3">
                <div class="text-center p-5">
                    <div><i class="fa-solid fa-building-columns"></i></div>
                    <div>University Life</div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="py-5">
        <div class="container">
            <div class="row">
                <div class=" col-6">
                    <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                    <p class="">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque voluptatibus sed magni unde nam? Quae.

                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, alias a. Minima quasi quos totam ducimus porro id iusto exercitationem temporibus maxime! Aliquam consectetur tempore vitae, aperiam voluptas dolor pariatur.
                    </p>
                </div>
                <div class="col-6">
                    <div class=""><img src="" alt=""></div>
                    <div class=""><img src="" alt=""></div>
                    <div class=""><img src="" alt=""></div>
                    <div class=""><img src="" alt=""></div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- About Start -->
    <section class="container-xxl py-5 my-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-orange text-uppercase">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-orange text-uppercase">School</span></h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class="btn bg-orange py-3 px-5 mt-2" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="<?="frontend.assets\img\about-1.png"?>" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="<?="frontend.assets\img\about-2.png"?>">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="<?="frontend.assets\img\about-3.png"?>">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="<?="frontend.assets\img\about-4.png"?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->
    <section class="">
        <div class="container ">
            <div class="row">
                <div class="col-3 bg-blue p-5">
                    <div class="">
                        <h6 class="section-title text-start text-orange text-uppercase">About Us</h6>
                        <h2 class="mb-4">Welcome to <span class="text-orange text-uppercase">School</span></h2>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a class="btn bg-orange py-2 px-3 mt-2" href="">Explore More</a>
                    </div>
                </div>
                <div class="col-3 ">
                    <div class="border mx-2 text-center">

                    </div>
                </div>
                <div class="col-3 ">
                    <div class="border mx-2 text-center">

                    </div>
                </div>
                <div class="col-3 ">
                    <div class="border mx-2 text-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>