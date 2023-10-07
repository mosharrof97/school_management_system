<?= $this->extend('dashboard/partial/header') ?>

<?= $this->section('title') ?>
    <?= $page_title; ?>
<?= $this->endSection() ?>
 
<?= $this->section('content') ?>
<div class="row justify-content-center">
        <div class="col-8 m-3">

            <form action="<?= base_url('dashboard/update_class/').$class['class_id'];?>" method="post">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>/dashboard/all_class" class="text-decoration-none btn btn-primary ">All new</a></div>
              
                <div class="mb-3">
                    <label for="date" class="form-label">date</label>
                    <input type="date" class="form-control"  id="date" name="date" value="<?= $class['date']?>">
                    <small class="text-danger"><?= isset($validation["date"]) ? $validation["date"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="class-name" class="form-label">Class Name</label>
                    <input type="text" class="form-control"  id="class-name" name="class-name" value="<?= $class['class_name']?>">
                    <small class="text-danger"><?= isset($validation["class-name"]) ? $validation["class-name"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="teacher" class="form-label">Teacher</label>
                    <input type="text" class="form-control"  id="teacher" name="teacher" value="<?= $class['teacher']?>">
                    <small class="text-danger"><?= isset($validation["teacher"]) ? $validation["teacher"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="time" class="form-label">Class Time</label>
                    <input type="time" class="form-control"  id="time" name="time" value="<?= $class['time']?>">
                    <small class="text-danger"><?= isset($validation["time"]) ? $validation["time"] : null;  ?></small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            
        </div>
</div>

<?= $this->endSection() ?>