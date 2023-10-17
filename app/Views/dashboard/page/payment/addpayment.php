<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section('title') ;?>
    <?= $page_heading; ?>
<?= $this->endSection(); ?> 

<?= $this->section('content') ;?>
<div class="row justify-content-center">
        <div class="col-8 m-3">
            
            
            <form action="/dashboard/addpayment" method="post" > 
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/all_student" class="text-decoration-none btn btn-primary ">All new</a></div>
              
                <div class="d-flex justify-content-between">
                    <div style="width:75%; margin-right:5px;">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="name" name="student_id" value="<?= $student['student_id']?>">
                            <input type="hidden" class="form-control" id="name" name="course_id" value="<?= $student['course_id']?>">
                            <input type="hidden" class="form-control" id="name" name="batch_id" value="<?= $student['batch_id']?>">
                            <input type="hidden" class="form-control" id="name" name="branch_id" value="<?= $student['branch_id']?>">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $student['name']?>">
                            <input type="hidden" class="form-control" id="name" name="student_id" value="<?= $student['student_id']?>">
                        </div>

                        <div class="mb-3" >
                            <label for="number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="number" name="number" value="<?= $student['number']?>" >
                        </div>

                    </div>
                    <div class="text-end" style="width:25%; margin-left:5px;">
                        <img class="py-2" src="<?= base_url('uploads/img/'.$student['image'])?>" width="150" height="150" alt="">
                    </div>
                </div>
                
                <div class="mb-3" >
                    <label for="course" class="form-label">Course</label>
                    <input type="text" class="form-control" id="course" name="course" value="<?= $student['course_name']?>" >
                </div>

                <div class="mb-3" >
                    <label for="batch" class="form-label">Batch</label>
                    <input type="text" class="form-control" id="batch" name="batch" value="<?= $student['batch_name']?>" >
                </div>

                <div class="mb-3" >
                    <label for="branch" class="form-label">Branch</label>
                    <input type="text" class="form-control" id="branch" name="branch" value="<?= $student['branch_name']?>" >
                </div>

                <div class="mb-3" >
                    <label for="course_fee" class="form-label">Course Fee</label>
                    <input type="text" class="form-control" id="course_fee" name="course_fee" value="<?= $student['course_fee']?>" >
                </div>
<!-- 
                <div class="mb-3" >
                    <label for="paid-payment" class="form-label">Paid Payment</label>
                    <input type="text" class="form-control" id="paid-payment" name="paid-payment" value="3000" >
                    <small class="text-danger"><?= isset($validation['paid-payment']) ?  $validation['paid-payment'] :null ; ?></small>
                </div>

                <div class="mb-3" >
                    <label for="due-payment" class="form-label">Due Payment</label>
                    <input type="text" class="form-control" id="due-payment" name="due-payment" value="<?= $student['course_fee']?>" >
                    <small class="text-danger"><?= isset($validation['due-payment']) ?  $validation['due-payment'] :null ; ?></small>
                </div> -->

                <div class="mb-3" >
                    <label for="payment" class="form-label">Payment</label>
                    <input type="text" class="form-control" id="payment" name="payment" value="" >
                    <small class="text-danger"><?= isset($validation['payment']) ?  $validation['payment'] :null ; ?></small>
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>
<?= $this->endSection(); ?>