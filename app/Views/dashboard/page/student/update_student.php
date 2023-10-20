<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section('content') ;?>
<div class="row justify-content-center">
        <div class="col-8 m-3">
            <form action="<?php base_url('dashboard/update_student/').$student['student_id']?>"  method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> </div>
            
                <div class="mb-3">
                    <h4>Id : <?= $student['student_id']?></h4>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $student['name']?>">
                    <small class="text-danger"><?= isset($validation["name"]) ? $validation["name"] : null;  ?></small>
                </div>

                <div class="mb-3" >
                    <label for="number" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="number" name="number" value="<?= $student['number']?>">
                    <small class="text-danger"><?= isset($validation['number']) ?  $validation['number'] :null ; ?></small>
                </div>

                <div class="mb-3" >
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $student['email']?>">
                    <small class="text-danger"><?= isset($validation['email']) ? $validation['email'] : null ;  ?></small>
                </div>
                
                <div class="d-flex">
                    <div class="mb-3 ml-1" style="width:100%;">
                        <label for="father-name" class="form-label">Father Name</label>
                        <input type="text" class="form-control" id="father-name" name="father-name" value="<?= $student['father_name']?>">
                        <small class="text-danger"><?= isset($validation["father-name"]) ? $validation["father-name"] : null;  ?></small>
                    </div>

                    <div class="mb-3 ms-1" style="width:100%;">
                        <label for="father-number" class="form-label">Father Number</label>
                        <input type="text" class="form-control" id="father-number" name="father-number"  value="<?= $student['father_number']?>">
                        <small class="text-danger"><?= isset($validation['father-number']) ?  $validation['father-number'] :null ; ?></small>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="mb-3 ml-1" style="width:100%;">
                        <label for="mother-name" class="form-label">Mother Name</label>
                        <input type="text" class="form-control" id="mother-name" name="mother-name" value="<?= $student['mother_name']?>">
                        <small class="text-danger"><?= isset($validation["mother-name"]) ? $validation["mother-name"] : null;  ?></small>
                    </div>

                    <div class="mb-3 ms-1" style="width:100%;">
                        <label for="mother-number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="mother-number" name="mother-number" value="<?= $student['mother_number']?>">
                        <small class="text-danger"><?= isset($validation['mother-number']) ?  $validation['mother-number'] :null ; ?></small>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="mb-3 me-1" style="width:100%;">
                        <label for="district" class="form-label">District	</label>
                        <input type="text" class="form-control" id="district" name="district" value="<?= $student['district']?>">
                        <small class="text-danger"><?= isset($validation["district"]) ? $validation["district"] : null;  ?></small>
                    </div>

                    <div class="mb-3 " style="width:100%;">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= $student['address']?>">
                        <small class="text-danger"><?= isset($validation['address']) ?  $validation['address'] :null ; ?></small>
                    </div>
                </div>
                
                <div>
                    <div class="mb-3">
                        <label for="college-name" class="form-label">College Name</label>
                        <input type="text" class="form-control" id="college-name" name="college-name" value="<?= $student['college_name']?>">
                        <small class="text-danger"><?= isset($validation["college-name"]) ? $validation["college-name"] : null;  ?></small>
                    </div>
                    
                    <div class="d-flex">
                    <div class="mb-3 me-1" style="width:100%;">
                        <label for="hsc-roll" class="form-label">HSC Roll</label>
                        <input type="text" class="form-control" id="hsc-roll" name="hsc-roll" value="<?= $student['hsc_roll']?>">
                        <small class="text-danger"><?= isset($validation['hsc-roll']) ?  $validation['hsc-roll'] :null ; ?></small>
                    </div>

                    <div class="mb-3 me-1" style="width:100%;">
                        <label for="hsc-reg" class="form-label">HSC Reg</label>
                        <input type="text" class="form-control" id="hsc-reg" name="hsc-reg" value="<?= $student['hsc_reg']?>">
                        <small class="text-danger"><?= isset($validation['hsc-reg']) ?  $validation['hsc-reg'] :null ; ?></small>
                    </div>

                    <div class="mb-3" style="width:100%;">
                        <label for="hsc-gpa	" class="form-label">GPA</label>
                        <input type="text" class="form-control" id="hsc-gpa" name="hsc-gpa" value="<?= $student['hsc_gpa']?>">
                        <small class="text-danger"><?= isset($validation["hsc-gpa"]) ? $validation["hsc-gpa"] : null;  ?></small>
                    </div>
                </div>

                <div>
                    <div class="mb-3">
                        <label for="school-name" class="form-label">School Name</label>
                        <input type="text" class="form-control" id="school-name" name="school-name" value="<?= $student['school_name']?>">
                        <small class="text-danger"><?= isset($validation["school-name"]) ? $validation["school-name"] : null;  ?></small>
                    </div>

                    <div class="d-flex">
                    <div class="mb-3 me-1" style="width:100%;">
                        <label for="ssc-roll" class="form-label">SSC Roll</label>
                        <input type="text" class="form-control" id="ssc-roll" name="ssc-roll" value="<?= $student['ssc_roll']?>">
                        <small class="text-danger"><?= isset($validation['ssc-roll']) ?  $validation['ssc-roll'] :null ; ?></small>
                    </div>

                    <div class="mb-3 me-1" style="width:100%;">
                        <label for="ssc-reg" class="form-label">SSC Reg</label>
                        <input type="text" class="form-control" id="ssc-reg" name="ssc-reg" value="<?= $student['ssc_reg']?>">
                        <small class="text-danger"><?= isset($validation['ssc-reg']) ?  $validation['ssc-reg'] :null ; ?></small>
                    </div>

                    <div class="mb-3" style="width:100%;">
                        <label for="ssc-gpa	" class="form-label">GPA</label>
                        <input type="text" class="form-control" id="ssc-gpa" name="ssc-gpa" value="<?= $student['ssc-gpa']?>">
                        <small class="text-danger"><?= isset($validation["ssc-gpa"]) ? $validation["ssc-gpa"] : null;  ?></small>
                    </div>
                </div>
                </div>
                
                <div class="d-flex">
                    <div class="mb-3 me-1" style="width:100%;">
                        <label for="course" class="form-label">Course</label>
                        <select class="form-select" aria-label="Default select example" id="course" name="course">
                            <option ></option>
                            <?php foreach($course as $row ): ?>
                            <option value="<?= $row['course_id']?>" <?= $row['course_id'] == $row['course_id'] ? "selected": ""?>><?= $row['course_name']?></option>
                            <?php endforeach ?>
                        </select>
                        <small class="text-danger"><?= isset($validation['course']) ? $validation['course'] : null ;  ?></small>
                    </div>

                    <div class="mb-3 " style="width:100%;">
                        <label for="batch" class="form-label">Batch</label>
                        <select class="form-select" aria-label="Default select example" id="batch" name="batch">
                            <!-- <option selected>Select batch</option> -->
                            <option ></option>
                            <?php foreach($batch as $row ): ?>
                            <option value="<?= $row['batch_id']?>" <?= $row['batch_id'] == $row['batch_id'] ? "selected": ""?>><?= $row['batch_name']?></option>
                            <?php endforeach ?>
                        </select>
                        <small class="text-danger"><?= isset($validation['batch']) ? $validation['batch'] : null ;  ?></small>
                    </div>
                </div> 

                <div class="d-flex">
                    <div class="mb-3 me-1" style="width:100%;">
                        <label for="branch" class="form-label">Branch</label>
                        <select class="form-select" aria-label="Default select example" id="branch" name="branch">
                            <option></option>
                            <?php foreach($branch as $row ): ?>
                            <option value="<?= $row['branch_id']?>"  <?= $row['branch_id'] == $row['branch_id'] ? "selected": ""?> ><?= $row['branch_name']?></option>
                            <?php endforeach ?>
                        </select>
                        <small class="text-danger"><?= isset($validation['branch']) ? $validation['branch'] : null ;  ?></small>
                    </div>

                    <div class="mb-3 " style="width:100%;">
                        <label for="course_fee" class="form-label">Course Fee</label>
                        <input type="text" class="form-control" id="course_fee" name="course_fee" value="<?= $student['course_fee']?>">
                        <small class="text-danger"><?= isset($validation['course_fee']) ? $validation['course_fee'] : null ;  ?></small>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Image</label>
                    <input type="file" class="form-control" id="file" name="file" value="<?= $student['image']?>">
                    <small class="text-danger"><?= isset($validation['file']) ? $validation['file'] : null ;  ?></small>
                    <img class="py-2" src="<?= base_url('uploads/img/'.$student['image']) ?>" width="100" height="100" alt="">
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
            
        </div>
</div>
<?= $this->endSection(); ?>