<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-11">
            
        <table class="table ">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_student"class="text-decoration-none btn btn-primary ">Add new</a></div>
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
                <th scope="col">Paid Payment</th>
                <th scope="col">Due Payment</th>
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
                    <td><?= $payment['course_id']?></td>
                    <td><?= $payment['batch_id']?></td>
                    <td><?= $payment['branch_id']?></td>
                    <td ><?= $payment['course_fee']?></td>
                    <td ><?= $payment['payment']?></td>
                    <td >2000</td>
                    
                    <td><img src="<?= base_url('uploads/img/'.$payment['image']) ?>" width="40"  alt=""></td>
                    <td>
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a class="edit btn btn-primary me-2"  href="<?= base_url('dashboard/view_payment/'.$payment['student_id'] ) ?>">View</a></li>
                            <li><a class="edit btn btn-primary"  href="<?= base_url('dashboard/payment/'.$payment['student_id'] ) ?>">payment</a></li>
                        
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
