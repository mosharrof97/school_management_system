<?= $this->extend('dashboard/partial/header') ?>

<?= $this->section('title') ?>
    <?= $page_title; ?>
<?= $this->endSection() ?>
 
<?= $this->section('content') ?>
<div class="row justify-content-center">
        <div class="col-8 m-3">

            <form action="<?= base_url('dashboard/update_branch/').$branch['branch_id'];?>" method="post">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>/dashboard/all_branch" class="text-decoration-none btn btn-primary ">All new</a></div>
              
                <div class="mb-3">
                    <label for="branch-name" class="form-label">Branch Name</label>
                    <input type="text" class="form-control"  id="branch-name" name="branch-name" value="<?= $branch['branch_name']?>">
                    <small class="text-danger"><?= isset($validation["branch-name"]) ? $validation["branch-name"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Branch Address</label>
                    <input type="text" class="form-control"  id="address" name="address" value="<?= $branch['address']?>">
                    <small class="text-danger"><?= isset($validation["address"]) ? $validation["address"] : null;  ?></small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>

<?= $this->endSection() ?>