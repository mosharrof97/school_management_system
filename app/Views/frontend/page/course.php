<?= $this->extend('frontend/partial/layout') ?>

<?= $this->section('content') ?>
    <section>
        <div id="" class="  position-relative" >
            <div class="carousel-inner">
                <img src="<?= base_url('uploads\slider\1697704428_e6c0f782583383d5ece4.jpg') ?>" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block " style="left: 43%;padding-top: 9.25rem;">
                    <h5 class="slider-title">Course Page</h5>
                </div>
            </div>
        </div>
    </section>
    

    <!--============== Course Section ===============-->
    <section class="my-5 py-5 " style="background: #f3f8f9;">
        <div class="container ">
            <div class="row" >
                <div class="col-4 my-2  d-flex  align-items-center">
                    <div class="">
                        <h5 class="text-gray mb-4">Varsity Coaching Centre</h5>
                        <h2 class="text-orange">A quality coaching center to get chances in university. Our courses.</h2>
                    </div>
                </div>

                <?php 
                if(count($courses)>0){
                    foreach ($courses as $course ) {              
                ?>
                <div class="col-4 my-2">
                    <div class="card m-1">
                        <img src="<?= base_url('uploads/img/'.$course['course_image']) ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $course['course_name'] ?></h5>
                            <p class="card-text"><?= $course['course_desc'] ?></p>
                            <div class="content-between align-items-center;">
                                <div>
                                    <p class=" btn-price"><?= $course['c_course_fee'] ?> /=</p>
                                </div>
                                <div>
                                    <a href="<?= base_url('apply-student' ) ?>" class="btn btn-prime">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                }
                ?>
            </div>
        </div>
    </section>

    




<?= $this->endSection() ?>