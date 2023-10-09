<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-11">
         
        <table class="table " id="data-table">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_student"class="text-decoration-none btn btn-primary ">Add new</a></div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Number</th>
                <th scope="col">Course Name</th>
                <th scope="col">Batch Name</th>
                <th scope="col">Branch Name</th>
                <th scope="col">Course Fee</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($students)>0){
                    foreach ($students as $student) {              
                ?>
                <tr class="align-middle">
                    <td><?= $student['student_id'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['number'] ?></td>
                    <td><?= $student['course_name'] ?></td>
                    <td><?= $student['batch_name'] ?></td>
                    <td><?= $student['branch_name'] ?></td>
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


      <!-- View Student  Modal------
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewstudentModal">View Student</button>

  <div class="modal fade " id="viewstudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">

      <div class="modal-content">
        <div class="modal-header bg-primary text-light ">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" href="<?= base_url('dashboard/view_student')?>"></a>
        </div>
        <div class="modal-body p-0">
        <div id="data" class="">
                        <div class="bg-primary text-light p-3 pt-5  text-center form-header">
                                <h3>School Management Project</h3>
                                <h5>Name : <?= $student['name'] ?></h5>
                                <h6>Phone : <?= $student['number'] ?></h6>
                                <h6>Email : <?= $student['email'] ?></h6>
                        </div>
                        <div class="card-body px-5" >
                            
                            <div class="row " style="">
                                <div class="col-6">
                                    <table class="view-table" style="border:0px !impotant;">
                                        <tr>
                                            <td>Name</td>
                                            <td>:</td>
                                            <td><?= $student['name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Number</td>
                                            <td>:</td>
                                            <td><?= $student['number'] ?></td>
                                        </tr>
                                        <tr>
                                            <td >Email</td>
                                            <td >:</td>
                                            <td><?= $student['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td >Father Name</td>
                                            <td >:</td>
                                            <td><?= $student['father_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td >Father Number</td>
                                            <td >:</td>
                                            <td><?= $student['father_number'] ?></td>
                                        </tr>
                                        <tr>
                                            <td >Mother Name</td>
                                            <td >:</td>
                                            <td><?= $student['mother_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td >Mother Number</td>
                                            <td >:</td>
                                            <td><?= $student['mother_number'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-3">
                                    <table class="view-table" style="background-color:#fff0 !important">
                                    </table>
                                </div>
                                <div class="col-3">
                                    <div>
                                        <img src="<?= base_url('uploads/img/'.$student['image']) ?>" width="150" height="150"  alt="">
                                    </div>
                                </div>
                        
                            </div>
                            <div class="row my-3">
                                <h4 >Address</h4>
                                <hr>
                                <div class="col-5">
                                    <table class="view-table" style="background-color:#fff0 !important">
                                        <tr>
                                            <td>District</td>
                                            <td>:</td>
                                            <td><?= $student['district'] ?></td>
                                        </tr>   
                                        <tr>
                                            <td>Address</td>
                                            <td>:</td>
                                            <td><?= $student['address'] ?></td>
                                        </tr>                     
                                    </table>
                                </div>
                                <div class="col=7"> </div>
                            </div>

                            <div class="my-3">
                                <h2>Education Information</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="border-bottom">Collage </h4>
                                        <table class="view-table" style="background-color:#fff0 !important">
                                            <tr>
                                                <th scope="col">College Name</th>
                                                <th scope="col">Roll number</th>
                                                <th scope="col">Registration Number</th>
                                                <th scope="col">GPA</th>
                                            </tr>
                                            <tr>
                                                <td><?= $student['college_name'] ?></td>
                                                <td><?= $student['hsc_roll'] ?></td>
                                                <td><?= $student['hsc_reg'] ?></td>
                                                <td><?= $student['hsc_gpa'] ?></td>
                                            </tr>                        
                                        </table>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="border-bottom">School </h4>
                                        <table class="view-table" style="background-color:#fff0 !important">
                                            <tr>
                                                <th scope="col">School Name</th>
                                                <th scope="col">Roll number</th>
                                                <th scope="col">Registration Number</th>
                                                <th scope="col">GPA</th>
                                            </tr>
                                            <tr>
                                                <td><?= $student['school_name'] ?></td>
                                                <td><?= $student['ssc_roll'] ?></td>
                                                <td><?= $student['ssc_reg'] ?></td>
                                                <td><?= $student['ssc-gpa'] ?></td>
                                            </tr>                        
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3">
                                <h3 >Course Information</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <table class="view-table" style="background-color:#fff0 !important">
                                            <tr>
                                                <th scope="col">Course Name</th>
                                                <th scope="col">Batch Name</th>
                                                <th scope="col">Branch Name</th>
                                                <th scope="col">payment</th>
                                            </tr>
                                            <tr>
                                                <td><?= $student['course_name'] ?></td>
                                                <td><?= $student['batch_name'] ?></td>
                                                <td><?= $student['branch_name'] ?></td>
                                                <td><?= $student['course_fee'] ?></td>
                                            </tr>                        
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div> 
        </div>
        <div class="modal-footer">
          <a type="button" class="btn btn-primary" onclick="printpage()">Print</a>
          <a type="button" class="btn btn-secondary" data-bs-dismiss="modal" href="<?= base_url('dashboard/view_student')?>">Close</a>
        </div>
      </div>
    </div>
  </div>   
    <script>
        function printpage(){
            var body = document.getElementById('body').innerHTML;
            var data = document.getElementById('data').innerHTML;
            document.getElementById('body').innerHTML=data;
            window.print();
            document.getElementById('body').innerHTML=body;
        }
    </script>


  ------View Payment  Modal --------
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewpaymentModal"> View Payment </button>


  <div class="modal fade" id="viewpaymentModal" tabindex="-1" aria-labelledby="viewpaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="viewpaymentModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Print</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>           -->

<?= $this->endSection(); ?>
