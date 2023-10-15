<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>

    <div class="row justify-content-center" >
        <div class="col-11 my-4">
            <div class="d-flex justify-content-end ">
                <a href="<?= base_url()?>dashboard/all_payment"class="text-decoration-none btn btn-primary mx-2" onclick=" printpage()">print</a>
                <a href="<?= base_url()?>dashboard/all_payment"class="text-decoration-none btn btn-primary mx-2">All Payment</a>
            </div>
            <div id ="data">
                <table class="table  " style="border-color:white;">
                    <div class="d-flex justify-content-between "> 
                        <h4><?= $page_heading; ?></h4> 
                    </div>
                    <div>
                        <tr>
                            <td  style="width:20%" >Name :</td>
                            <td style="width:80%"  ><?= $payment['name']?></td>
                        </tr>
                        <tr>
                            <td style="width:20%" >Number :</td>
                            <td style="width:80%"  ><?= $payment['number']?></td>
                        </tr>
                        <tr>
                            <td style="width:20%" >Course Fee :</td>
                            <td style="width:80%"  ><?= $payment['course_id']?></td>
                        </tr>
                        <tr>
                            <td style="width:20%" >Course Fee :</td>
                            <td style="width:80%"  ><?= $payment['course_fee']?></td>
                        </tr>
                    </div>
                </table>
                <table class="table">
                    <div>
                        <tr class="border">
                            <th class="border">payment Date</th>
                            <th class="border">course Fee</th>
                            <th class="border">Due</th>
                            <th class="border">payment</th>
                        </tr>
                        <tr class="border">
                            <td class="border"><?= $payment['payment_date']?></td>
                            <td class="border"></td>
                            <td class="border"></td>
                            <td class="border"><?= $payment['payment']?></td>
                        </tr>
                        <tr class="border">
                            <td class="border">Total :</td>
                            <td class="border"><?= $payment['course_fee']?></td>
                            <td class="border"><?=  $sum?></td>
                            <td class="border"> <?= $payment['payment']?></td>
                        </tr>
                    </div>
                </table>
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
