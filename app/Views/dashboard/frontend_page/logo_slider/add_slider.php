<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section('content') ;?>
<div class="row justify-content-center">
        <div class="col-8 m-3">
            
            
            <form action="" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/all_user" class="text-decoration-none btn btn-primary ">All Slider content</a></div>
              
                <div class="mb-3">
                    <label for="sub-title" class="form-label">Sub Title</label>
                    <input type="text" class="form-control" id="sub-title" name="sub-title">
                    <!-- <span>display_error($validation, 'title')</span> -->
                    <small class="text-danger"><?= isset($validation["sub-title"]) ? $validation["sub-title"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                    <!-- <span>display_error($validation, 'title')</span> -->
                    <small class="text-danger"><?= isset($validation["title"]) ? $validation["title"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="btn-link" class="form-label">Button Link</label>
                    <input type="text" class="form-control" id="btn-link" name="btn-link">
                    <!-- <span>display_error($validation, 'title')</span> -->
                    <small class="text-danger"><?= isset($validation["btn-link"]) ? $validation["btn-link"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Image</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>
<?= $this->endSection(); ?>