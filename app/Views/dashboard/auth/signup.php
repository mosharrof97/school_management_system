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
            <?= form_open();?> 
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a class="text-decoration-none btn btn-primary ">All new</a></div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                    <!-- <span>display_error($validation, 'name')</span> -->
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="mb-3">
                    <label for="email1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email1" name="email1">
                </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Image</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
                <?= form_close();?> 
            
        </div>
</div>
<?= $this->endSection(); ?>