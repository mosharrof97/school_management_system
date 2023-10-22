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
                <h2 class="text-white"><?= $page_heading?></h2>
                <ul class="breadcrumb">
                    <li><a class="text-white" href="<?= base_url()?>"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active" style="font-size: 16px; font-weight:600;"><?= $page_heading ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--=============== Bannar ================-->

<!--========== Class Content ============-->
<div class=" default-padding">
    <div class="container">
        <div class="row content-between align-items-center p-2" id="heading-gradiant">
            <div class="col-sm-10 text-white">
                Class Schedule
            </div>
            <div class="col-sm-2 text-end">
                <a href="<?= base_url('/class') ?>" class="btn btn-info btn-xs"> Refresh</a>
            </div>
        </div>
        <div class="row panel-body text-justify">
            <div class="col-sm-12" style="margin-bottom: 10px;background-color: #eee;padding:10px;border-radius: 5px">
                <form action="" method="post" id="searchingForm">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="eventSearching" name="searchingInfoPostTitle" class="form-control" onkeyup="autoCompleteSearchingPosting(this)" placeholder="Search By Notice Title">
                            <input type="hidden" name="eventSearchingId" id="eventSearchingId">
                            <input type="hidden" id="type" name="type" value="2">
                        </div>
                        <div class="col-sm-6 ">
                            <div class="row justify-content-end">
                                <div class="col-sm-offset-1 col-sm-4">
                                    <input type="text" name="fromDate" id="fromDate" class="form-control datepicker hasDatepicker" placeholder="Search From Date">
                                </div>

                                <div class="col-sm-4">
                                    <input type="text" name="toDate" id="toDate" class="form-control datepicker hasDatepicker" placeholder="Search To Date">
                                </div>
                                <div class="col-sm-3 text-end">
                                    <button type="button" onclick="searchingEventInfo()" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="row">
                <div class="col-sm-offset-4 col-sm-4">
                    <img class="loadlater" src="https://www.du.ac.bd/fontView/assets/img/loaderNew.gif" style="height: 50px;display: none">
                </div>
            </div>
            
            <div class="row">
                <div class="blog-content col-md-8" id="showInfo">
                    <div class="content-items">
                        <div class="top-author">
                            
                                   
                                <table class="table ">
                                    <thead>
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Subject Name</th>
                                        <th scope="col">Branch</th>
                                        <th scope="col">Teacher</th>
                                        <th scope="col">Class Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if(count($class)>0){
                                            foreach ($class as $classs) {              
                                        ?>
                                        <tr class="align-middle">
                                            <td><?= $classs['class_id'] ?></td>
                                            <td><?= $classs['date'] ?></td>
                                            <td><?= $classs['class_name'] ?></td>
                                            <td><?= $classs['branch_name'] ?></td>
                                            <td><?= $classs['teacher'] ?></td>
                                            <td><?= $classs['time'] ?></td>
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                        
                                    </tbody>
                                </table>

                                <div style="text-align: center;padding-top: 20px">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                                <span class="page-link" aria-hidden="true">‹</span>
                                            </li>
                                            <?= $pager->links('group') ?>
                                            <li class="page-item">
                                                <span class="page-link" aria-label="Next »">›</span>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>    
                            
                        </div>
                    </div>
                </div>

                <!-- Start Sidebar -->
                <div class="sidebar col-md-4">
                    <div class="aside">
                        <div class="sidebar-item">
                            <div class="sidebar-title">
                                <h4>Useful Links </h4>
                            </div>
                            <ul class="category">
                                <li><a href=" "><i class="fa-solid fa-angle-right"></i> Telephone and Email Index</a></li>
                                <li><a href=" " target="_blank"><i class="fa-solid fa-angle-right"></i> DU Forms</a></li>
                                <li><a href=" "><i class="fa-solid fa-angle-right"></i> Approved NOCs</a></li>
                                <li><a href=" "><i class="fa-solid fa-angle-right"></i> Trust Funds</a></li>
                                <li><a href="<?= base_url('/notice') ?>"><i class="fa-solid fa-angle-right"></i> Notice</a></li>
                                <li><a href=" "><i class="fa-solid fa-angle-right"></i> Latest News</a></li>
                                <li><a href=" "><i class="fa-solid fa-angle-right"></i> Events</a></li>
                                <li><a href=" "><i class="fa-solid fa-angle-right"></i>  Media</a></li>
                                <li><a href=" "><i class="fa-solid fa-angle-right"></i> Contact Us</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
                
    </div>
</div>
<!--========== Class Content ============-->

<?= $this->endSection() ?>