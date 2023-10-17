<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-11">
            
        <table class="table ">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/all_student"class=" btn btn-primary mx-2 "> All Student</a> </div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Payment Date</th>
                <th scope="col">Name</th>
                <th scope="col">Number</th>
                <th scope="col">Course Name</th>
                <th scope="col">Batch Name</th>
                <th scope="col">Branch Name</th>
                <th scope="col">Course Fee</th>
                <th scope="col">Payment</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($payments as $payment):?>
                <tr class="align-middle">
                    <td><?= $payment['payment_id']?></td>
                    <td><?= $payment['payment_date']?></td>
                    <td><?= $payment['name']?></td>
                    <td><?= $payment['number']?></td>
                    <td><?= $payment['course_name']?></td>
                    <td><?= $payment['batch_name']?></td>
                    <td><?= $payment['branch_name']?></td> 
                    <td><?= $payment['course_fee']?></td>
                    <td><?= $payment['totalPayment']?></td>
                    <td>
                         <?php if($payment['course_fee']<= $payment['totalPayment']){echo "<span style='color:green;'>Paid </span>";}else{echo "<span style='color:red;'>Due </span>";}?>
                    </td>
                    
                    <td><img src="<?= base_url('uploads/img/'.$payment['image']) ?>" width="40"  alt=""></td>
                    <td>
                        <ul class="d-flex list-unstyled align-items-center m-0"> 
                            <li><a class=" m-1"  href="<?= base_url('dashboard/single_payment/'.$payment['payment_id'] ) ?>"><i class="fa-solid fa-eye p-1"></i></a></li>
                            <li><a class=" m-1"  href="<?= base_url('dashboard/view_payment/'.$payment['student_id'] ) ?>"><i class="fa-solid fa-eye p-1"></i></a></li>
                            <li><a class=" m-1"  href="<?= base_url('dashboard/payment/'.$payment['student_id'] ) ?>"><i class="fa-regular fa-credit-card p-1"></i></a></li>
                        
                        </ul>
                    </td>
                </tr>
                <?php endforeach?>
 
            </tbody>
        </table>
        <div>
        <?= $pager->links('group') ?>
        </div>            
    </div>
    </div>
    <!-- <script>
        
        var course_fee = doucment.getElementById( 'course_fee').value;
        var payment = doucment.getElementById( 'payment').value;
        var amout = course_fee  -= payment ;
        doucment.getElementById( 'payment').innerHTML = amout ;
      
    </script> -->



<?= $this->endSection(); ?>
