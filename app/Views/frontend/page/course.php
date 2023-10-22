<?= $this->extend('frontend/partial/layout') ?>
<?= $this->section('title') ?>
    <?= $page_title ?> 
<?= $this->endSection() ?>

<?= $this->section('content') ?> 
<!--=============== Bannar ================-->
<div class="breadcrumb-area text-center" style="background-image: url(<?= base_url('frontend.assets\img\bannar.jpg')?>); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2 class="text-white"><?= $page_heading ?></h2>
                <ul class="breadcrumb">
                    <li><a class="text-white" href="<?= base_url()?>"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active" style="font-size: 16px; font-weight:600;"><?= $page_heading ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--=============== Bannar ================-->

    <!--============== Course Section ===============-->
    <section class=" py-5 " style="background: #f3f8f9;">
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