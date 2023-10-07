<?= $this->extend('dashboard/partial/header') ?>

<?= $this->section('title') ?>
    <?= $page_title; ?>
<?= $this->endSection() ?>
 
<?= $this->section('content') ?>
<div class="row justify-content-center">
        <div class="col-8 m-3">

            <form action="" method="post">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>/dashboard/all_role" class="text-decoration-none btn btn-primary ">All new</a></div>
              
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control"  id="name" name="name">
                    <!-- <span>display_error($validation, 'name')</span> -->
                    <small class="text-danger"><?= isset($validation["name"]) ? $validation["name"] : null;  ?></small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>

<?= $this->endSection() ?>