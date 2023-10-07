<?= $this->extend('dashboard/partial/header') ?>

<?= $this->section('title') ?>
    <?= $page_title; ?>
<?= $this->endSection() ?>
 
<?= $this->section('content') ?>
<div class="row justify-content-center">
        <div class="col-8 m-3">

            <form action="<?= base_url('dashboard/update_batch/').$batch['batch_id'];?>" method="post">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>/dashboard/all_batch" class="text-decoration-none btn btn-primary ">All new</a></div>
              
                <div class="mb-3">
                    <label for="batch-name" class="form-label">Batch Name</label>
                    <input type="text" class="form-control"  id="batch-name" name="batch-name" value="<?= $batch['batch_name']?>">
                    <small class="text-danger"><?= isset($validation["batch-name"]) ? $validation["batch-name"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="time" class="form-label">Class Time</label>
                    <input type="time" class="form-control"  id="time" name="time" value="<?= $batch['time']?>">
                    <small class="text-danger"><?= isset($validation["time"]) ? $validation["time"] : null;  ?></small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>

<?= $this->endSection() ?>