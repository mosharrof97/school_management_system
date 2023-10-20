<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-11">
            
        <table class="table ">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_course" class="text-decoration-none btn btn-primary ">Add new</a></div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Course Fee</th>
                <th scope="col">Course Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($course)>0){
                    foreach ($course as $courses) {              
                ?>
                <tr class="align-middle">
                    <td><?= $courses['course_id'] ?></td>
                    <td><?= $courses['course_name'] ?></td>
                    <td><?= $courses['c_course_fee'] ?></td>
                    <td><?= $courses['course_desc'] ?></td>
                    <td><img src="<?= base_url('uploads/img/'.$courses['course_image']) ?>" width="40" alt=""></td>
                    <td>
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a href="<?= base_url('dashboard/edit_course/'.$courses['course_id'] ) ?>"><i class="fa-regular fa-pen-to-square p-1"></i></a></li>
                            <li><a href="<?= base_url('dashboard/add_course/delete/'.$courses['course_id'] ) ?>"><i class="fa-solid fa-trash p-1"></i></li></a>
                        </ul>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
 
            </tbody>
        </table>
        <div>
            <?= $pager->links('group') ?>
        </div>            
    </div>
    </div>
<?= $this->endSection(); ?>
