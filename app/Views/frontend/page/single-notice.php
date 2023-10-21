<?= $this->extend('frontend/partial/layout') ?>

<?= $this->section('content') ?>

<div class="default-padding">
    <div class="container">
        <div class="row">
            <!-- Start Course Info -->
            <div class="col-md-8">
                <div class="notice-info">
                    <div class="content-right">
                        <ul>
                            <li class="notice-date ">
                                <span>Published Date: <?= $notice['date']?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <h3 class=""><?= $notice['title']?> </h3>
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