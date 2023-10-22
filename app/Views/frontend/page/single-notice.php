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
                <h2 class="text-white">Notice</h2>
                <ul class="breadcrumb">
                    <li><a class="text-white" href="<?= base_url()?>"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active" style="font-size: 16px; font-weight:600;">Notice</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--=============== Bannar ================-->


<div class="default-padding">
    <div class="container">
        <div class="row">
            <!-- Start Course Info -->
            <div class="col-md-8">
                <div class="notice-info">
                    <div class="content-right mb-3">
                        <ul>
                            <li class="notice-date ">
                                <span>Published Date: <?= $notice['date']?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="py-3">
                        <h3 class=""><?= $notice['title']?> </h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="notice-info">
                        <div class="notice-img">
                            <p><img alt="" src="<?= base_url('uploads/img/'.$notice['image'])?>" style=""></p> 
                        </div>                                  
                        <div class="clearfix"></div>
                        <div class="notice-desc">
                            <p><?= $notice['desc']?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="top-author">
                    <h4>Notice</h4>
                    <div class="author-items">

                        <?php foreach($notices as $notice) :?>    
                        <div class="item">
                            <div class=" text-justify">
                                <h5> <a class="notice-title text-black "  href=" <?= base_url('single-notice/'.$notice['notice_id'])?>" ><?= $notice['title']?></a></h5>
                                <ul>
                                    <li class="notice-date">
                                        <span>Published Date: <?= $notice['date']?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>     
                        <?php endforeach ?>

                        <a href="<?= base_url('notice')?>">View All <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>