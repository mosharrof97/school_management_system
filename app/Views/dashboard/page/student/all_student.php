<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-11">
         
        <table class="table " id="data-table">
            <div class="d-flex justify-content-between my-4"> 
                <h3><?= $page_heading; ?></h3> 
                <div class="d-flex justify-content-end my-4">
                    <form action="">
                        <input class="mx-5" id="search" type="text" placeholder="Search Here.." >
                    </form>
                    
                    <a href="<?= base_url()?>dashboard/add_student"class="text-decoration-none btn btn-primary ">Add new</a>
                </div>
        </div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Number</th>
                <th scope="col">Course Name</th>
                <th scope="col">Batch Name</th>
                <th scope="col">Branch Name</th>
                <th scope="col">Course Fee</th>
                <th scope="col">Payment Status</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody >
                <?php 
                if(count($students)>0){
                    foreach ($students as $student) {              
                ?>
                <tr class="align-middle" id="studentData">
                    <td><?= $student['student_id'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td ><?= $student['number'] ?></td>
                    <td><?= $student['course_name'] ?></td>
                    <td><?= $student['batch_name'] ?></td>
                    <td><?= $student['branch_name'] ?></td>
                    <td><?= $student['course_fee'] ?></td>
                    <td><?= $student['course_fee'] ?></td>
                    <td><img src="<?= base_url('uploads/img/'.$student['image']) ?>" width="40"  alt=""></td>
                    <td>
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a href="<?= base_url('dashboard/view_payment/'.$student['student_id'] ) ?>" ><i class="fa-regular fa-eye p-1"></i></a></li>
                            <li><a href="<?= base_url('dashboard/payment/'.$student['student_id'] ) ?>"><i class="fa-regular fa-credit-card"></i></a></li>
                            
                            <li class="px-2"></li>
                            <li><a class="edit"  href="<?= base_url('dashboard/view_student/'.$student['student_id'] ) ?>"  ><i class="fa-solid fa-eye p-1"></i></a></li>
                            <li><a href="<?= base_url('dashboard/update_student/'.$student['student_id'] ) ?>"><i class="fa-regular fa-pen-to-square p-1"></i></a></li>
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