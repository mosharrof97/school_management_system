<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section('content') ;?>

<!--============ Logo ============-->
<div class="row justify-content-center">
        <div class="col-8m-3">
            <form action="<?= base_url('dashboard/add_logo/').$logo['logo_id'];?>"  method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></div>

              
                <div class="mb-3">
                    <label for="logoImage" class="form-label">Image</label>
                    <input type="file" class="form-control" id="logoImage" name="logoImage">
                    <small class="text-danger"><?= isset($validation["logoImage"]) ? $validation["logoImage"] : null;  ?></small>
                    
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <div class=" mb-3">
                    <img class="py-2" src="<?= base_url('uploads/logo/'.$logo['logo_image']) ?>" width="100" height="100" alt="">
                </div>
            </form> 
        </div>
       
</div>

<?= $this->endSection() ;?>
