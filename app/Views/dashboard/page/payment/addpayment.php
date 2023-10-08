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
            
            
            <form action="" method="post" >
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/all_student" class="text-decoration-none btn btn-primary ">All new</a></div>
              
            <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="Mosharrof">
                    <small class="text-danger"><?= isset($validation["name"]) ? $validation["name"] : null;  ?></small>
                </div>

                <div class="mb-3" >
                    <label for="number" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="number" name="number" value="01774656830" >
                    <small class="text-danger"><?= isset($validation['number']) ?  $validation['number'] :null ; ?></small>
                </div>

                <div class="mb-3" >
                    <label for="course" class="form-label">Course</label>
                    <input type="text" class="form-control" id="course" name="course" value="Bangla" >
                    <small class="text-danger"><?= isset($validation['course']) ?  $validation['course'] :null ; ?></small>
                </div>

                <div class="mb-3" >
                    <label for="batch" class="form-label">Batch</label>
                    <input type="text" class="form-control" id="batch" name="batch" value="batch 5" >
                    <small class="text-danger"><?= isset($validation['batch']) ?  $validation['batch'] :null ; ?></small>
                </div>

                <div class="mb-3" >
                    <label for="branch" class="form-label">Branch</label>
                    <input type="text" class="form-control" id="branch" name="branch" value="Dhaka" >
                    <small class="text-danger"><?= isset($validation['branch']) ?  $validation['branch'] :null ; ?></small>
                </div>

                <div class="mb-3" >
                    <label for="course-fee" class="form-label">Course Fee</label>
                    <input type="text" class="form-control" id="course-fee" name="course-fee" value="5000" >
                    <small class="text-danger"><?= isset($validation['course-fee']) ?  $validation['course-fee'] :null ; ?></small>
                </div>

                <div class="mb-3" >
                    <label for="paid-payment" class="form-label">Paid Payment</label>
                    <input type="text" class="form-control" id="paid-payment" name="paid-payment" value="3000" >
                    <small class="text-danger"><?= isset($validation['paid-payment']) ?  $validation['paid-payment'] :null ; ?></small>
                </div>

                <div class="mb-3" >
                    <label for="due-payment" class="form-label">Due Payment</label>
                    <input type="text" class="form-control" id="due-payment" name="due-payment" value="2000" >
                    <small class="text-danger"><?= isset($validation['due-payment']) ?  $validation['due-payment'] :null ; ?></small>
                </div>

                <div class="mb-3" >
                    <label for="date" class="form-label">Payment Date</label>
                    <input type="date" class="form-control" id="date" name="date" value="" >
                    <small class="text-danger"><?= isset($validation['date']) ?  $validation['date'] :null ; ?></small>
                </div>

                <div class="mb-3" >
                    <label for="payment" class="form-label">Payment</label>
                    <input type="text" class="form-control" id="payment" name="payment" value="" >
                    <small class="text-danger"><?= isset($validation['payment']) ?  $validation['payment'] :null ; ?></small>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Image</label>
                    <img class="py-2" src="<?= base_url('uploads/img/')//.$user['image']) ?>" width="100" height="100" alt="">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>
<?= $this->endSection(); ?>