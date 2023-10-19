<?= $this->extend('frontend/partial/layout') ?>

<?= $this->section('content') ?>
    <section>
        <div id="carouselExampleInterval" class="carousel slide position-relative" data-bs-ride="carousel" >
            <div class="carousel-inner">
            <?php 
                if(count($homesliders)>0){
                    foreach ($homesliders as $homeslider ) {              
                ?>
                <div class="carousel-item active" data-bs-interval="2000">
                    
                    <img src="<?= base_url('uploads/slider/'.$homeslider['slider_image']) ?>" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="slider-sub-title"><?= $homeslider['slider_sub_title'] ?></h5>
                        <h2 class="slider-title"><?= $homeslider['slider_title'] ?></h2>
                        <a href="<?= $homeslider['slider_btn_link'] ?>" class="slider-button"> Discover More</a>
                    </div>
                </div>
                <?php
                    }
                }
                ?>

            <div class="position-absolute">
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
    <section class="container-xxl py-5 mb-5" style="background: #f3f8f9;">
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
    <section class="my-5">
        <div class="container ">
            <div class="row">
                <div class="col-4 bg-blue p-5">
                    <div class="">
                        <h6 class="section-title text-start text-orange text-uppercase">About Us</h6>
                        <h2 class="mb-4 text-white ">Welcome to Educavo University </h2>
                        <p class="mb-4 text-white">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a class="btn bg-orange py-2 px-3 mt-2" href="">Explore More</a>
                    </div>
                </div>
                <div class="col-8 ">
                    <div class="row">
                        <div class=" col-4 ">
                            <div class=" border  text-center  bg-white mx-1 p-5">
                                <h2>2K+</h2>
                                <h3>Students</h3>
                            </div>
                        </div>
                        <div class="col-4  ">
                            <div class=" border  text-center bg-blue mx-1 p-5">
                                <h2>2K+</h2>
                                <h3>Students</h3>
                            </div>
                        </div>
                        <div class="col-4  ">
                            <div class=" border  text-center bg-orange mx-1 p-5">
                                <h2>2K+</h2>
                                <h3>Students</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-4">
                        <div class="col-6">
                            <div class="border mx-1">
                                <img src="<?= base_url('frontend.assets\img\grid1.jpg')?>" alt=""  class="img-fluid" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border mx-1">
                                <img src="<?= base_url('frontend.assets\img\grid2.jpg')?>" alt="" class="img-fluid" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 py-5 " style="background: #f3f8f9;">
        <div class="container ">
            <div class="row" >
                <div class="col-4 my-2  d-flex  align-items-center">
                    <div class="">
                        <h4>DEGREE CATEGORIS</h4>
                        <h2>Successfully Complete A Degree at Educavo University</h2>
                    </div>
                </div>

                <div class="col-4 my-2">
                    <div class="card m-1">
                        <img src="<?= base_url('frontend.assets\img\degress-1.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-4 my-2">
                    <div class="card">
                        <img src="<?= base_url('frontend.assets\img\degress-2.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-4 my-2">
                    <div class="card">
                        <img src="<?= base_url('frontend.assets\img\degress-3.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-4 my-2">
                    <div class="card">
                        <img src="<?= base_url('frontend.assets\img\degress-4.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-4 my-2">
                    <div class="card">
                        <img src="<?= base_url('frontend.assets\img\degress-5.jpg')?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Start -->
    <section>
        <div class="container-xxl py-2 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">Luxury Living</h6>
                        <h1 class="text-white mb-4">Discover A Brand Luxurious Hotel</h1>
                        <p class="text-white mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Our Rooms</a>
                        <a href="" class="btn btn-light py-md-3 px-md-5">Book A Room</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=RJoDczO_6iY" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video End-->




<?= $this->endSection() ?>