<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-11">
            
        <table class="table ">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_admission"class="text-decoration-none btn btn-primary ">Add new</a></div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Admission Name</th>
                <th scope="col">Admission Link</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($admission)>0){
                    foreach ($admission as $admissions) {              
                ?>
                <tr class="align-middle">
                    <td><?= $admissions['admission_id'] ?></td>
                    <td><?= $admissions['admission_name'] ?></td>
                    <td><?= $admissions['admission_link'] ?></td>
                    <td>
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a href="<?= base_url('/dashboard/delete_admission/'.$admissions['admission_id'] ) ?>"><i class="fa-solid fa-trash p-1"></i></li></a>
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
