<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>

    <div class="row justify-content-center">
        <div class="col-11 my-4">
            <div class="d-flex justify-content-end ">  
                <div>
                    <a href="" class=" btn btn-primary mx-2" onclick=" printpage()" > Print</a> 
                    <a href="<?= base_url()?>dashboard/all_student"class=" btn btn-primary mx-2 "> All Student</a> 
                    <a href="<?= base_url()?>dashboard/all_payment"class=" btn btn-primary mx-2">All Payment</a>
                </div>
            </div>
            <div id="data">
                <div class="d-flex justify-content-between "> 
                    <h4><?=$student['name'] .' '. $page_heading; ?></h4> 
                </div>
                <?php if ($student)   :?>
                <div class="d-flex justify-content-between">
                    
                    <table class="table " style="border-color:white;" >
                        <tr>
                            <td style="width:25%" >Name :</td>
                            <td style="width:75%" ><?= $student['name']?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Number :</td>
                            <td style="width:75%" ><?= $student['number']?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Course :</td>
                            <td style="width:75%" ><?= $student['course_id']?></td>
                        </tr>
                        <tr>
                            <td style="width:25%" >Course Fee :</td>
                            <td style="width:75%" ><?= $student['course_fee']?></td>
                        </tr>
                    </table>
                    
                    <div>
                        <img src="<?= base_url('uploads/img/'.$student['image']) ?>" width="150" height="150" alt="">
                    </div>
                </div>

                <div>
                    <table class="table ">
                        <tr class="border">
                            <th>payment Date</th>
                            <th>course Fee</th>
                            <th>Due payment</th>
                            <th>payment</th>
                        </tr>
                        
                        <?php foreach($payments as $payment): ?>
                        <tr class="border">
                            <td class="border"><?= $payment['payment_date']?></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <?php if($payment['payment'] !== 0) : ?>
                            <td class="border"><?= $payment['payment']?></td>
                            <?php else :?>
                                <td class="border"><?= $payment['payment']?></td>
                            <?php endif ?>
                        </tr>
                        <?php endforeach?>
                        
                        <tr class="border">
                            <td class="border">Total :</td>
                            <td class="border"><?= $student['course_fee']?></td>
                            <td class="border"><?= $student['course_fee'] - $sum?></td>
                            <td class="border"> <?= $sum ?></td>
                        </tr>
                    </table>
                </div>
                <?php else : ?>
                    <h1>Payment First</h1>
                <?php endif ?>
            </div>
        </div>
    </div>            
  

<script>
     function printpage(){
            var body = document.getElementById('body').innerHTML;
            var data = document.getElementById('data').innerHTML;
            document.getElementById('body').innerHTML=data;
            window.print();
            document.getElementById('body').innerHTML=body;
        }
</script>


<?= $this->endSection(); ?>
