<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-11">
            
        <table class="table ">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_class" class="text-decoration-none btn btn-primary ">Add new</a></div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Date</th>
                <th scope="col">Class name</th>
                <th scope="col">Branch name</th>
                <th scope="col">Teacher</th>
                <th scope="col">Class Time</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($class)>0){
                    foreach ($class as $classs) {              
                ?>
                <tr class="align-middle">
                    <td><?= $classs['class_id'] ?></td>
                    <td><?= $classs['date'] ?></td>
                    <td><?= $classs['class_name'] ?></td>
                    <td><?= $classs['branch_name'] ?></td>
                    <td><?= $classs['teacher'] ?></td>
                    <td><?= $classs['time'] ?></td>
                    <td>
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a href="<?= base_url('/dashboard/edit_class/'.$classs['class_id'] ) ?>"><i class="fa-regular fa-pen-to-square p-1"></i></a></li>
                            <li><a href="<?= base_url('dashboard/delete_class/'.$classs['class_id'] ) ?>"><i class="fa-solid fa-trash p-1"></i></li></a>
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
