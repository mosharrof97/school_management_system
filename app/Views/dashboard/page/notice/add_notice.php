<?= $this->extend('dashboard/partial/header') ?>

<?= $this->section('title') ?>
    <?= $page_title; ?>
<?= $this->endSection() ?>
 
<?= $this->section('content') ?>
<div class="row justify-content-center">
        <div class="col-8 m-3">

            <form action="" method="post" enctype="multipart/form-data">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>/dashboard/all_notice" class="text-decoration-none btn btn-primary ">All new</a></div>
              
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control"  id="title" name="title">
                    <small class="text-danger"><?= isset($validation["title"]) ? $validation["title"] : null;  ?></small>
                </div>

                <!-- <div class="mb-3">
                    <label for="date" class="form-label">date</label>
                    <input type="date" class="form-control"  id="date" name="date">
                    <small class="text-danger"><?= isset($validation["date"]) ? $validation["date"] : null;  ?></small>
                </div> -->

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control"  id="image" name="image">
                    <small class="text-danger"><?= isset($validation["image"]) ? $validation["image"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <!-- <input type="text" class="form-control"  id="desc" name="desc"> -->
                    <textarea class="form-control" name="desc" id="desc" cols="30" rows="5"></textarea>
                    <small class="text-danger"><?= isset($validation["desc"]) ? $validation["desc"] : null;  ?></small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>

<?= $this->endSection() ?>