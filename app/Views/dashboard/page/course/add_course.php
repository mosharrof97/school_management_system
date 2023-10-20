<?= $this->extend('dashboard/partial/header') ?>

<?= $this->section('title') ?>
    <?= $page_title; ?>
<?= $this->endSection() ?>
 
<?= $this->section('content') ?>
<div class="row justify-content-center">
        <div class="col-8 m-3">

            <form action="" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/all_course" class="text-decoration-none btn btn-primary ">All new</a></div>
              
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control"  id="name" name="name">
                    <small class="text-danger"><?= isset($validation["name"]) ? $validation["name"] : null;  ?></small> 
                </div>

                <div class="mb-3">
                    <label for="course-desc" class="form-label">Course Description</label>
                    <input type="text" class="form-control"  id="course-desc" name="course-desc">
                    <small class="text-danger"><?= isset($validation["course-desc"]) ? $validation["course-desc"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="course-fee" class="form-label">Course Fee</label>
                    <input type="text" class="form-control"  id="course-fee" name="course-fee">
                    <small class="text-danger"><?= isset($validation["course-fee"]) ? $validation["course-fee"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="course-img" class="form-label">Course Image</label>
                    <input type="file" class="form-control"  id="course-img" name="course-img">
                    <small class="text-danger"><?= isset($validation["course-img"]) ? $validation["course-img"] : null;  ?></small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>

<?= $this->endSection() ?>