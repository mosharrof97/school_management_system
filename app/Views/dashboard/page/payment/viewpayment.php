<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-11">
            <table class="table ">
                <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_student"class="text-decoration-none btn btn-primary ">Add new</a></div>
                <div>
                    <div>
                        <tr>
                            <td>ID :</td>
                             <td><?= $payment['student_id']?></td>
                        </tr>
                        <tr>
                              <td>Name :</td>
                             <td><?= $payment['name']?></td>
                        </tr>
                        <tr>
                            <td>Number :</td>
                            <td>01746120225<?php //$payment['number']?></td>
                        </tr>
                    </div>
                    <div>
                        <img src="" alt="">
                    </div>
                </div>
                <div>
                    <tr>
                        <th>payment Date</th>
                        <th>course Fee</th>
                        <th>payment</th>
                        <th>Due payment</th>
                    </tr>
                    <?php ?>
                    <tr>
                        <td>01/10/12<?php //$payment['payment_date']?></td>
                        <td>5000<?php //$payment['course_fee']?></td>
                        <td>2000<?php //$payment['payment']?></td>
                        <td>3000<?php //$payment['Due']?></td>
                    </tr>
                    <?php ?>
                    <tr>
                        <td></td>
                        <td>Total :</td>
                        <td> 5000</td>
                        <td></td>
                    </tr>
                </div>
            </table>
        <div>
    </div>            
  
    



<?= $this->endSection(); ?>
