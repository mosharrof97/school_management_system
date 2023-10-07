<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <link href="https://printjs-4de6.kxcdn.com/print.min.css" rel="stylesheet"> 



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="<?=base_url("style.css"); ?>">
    <title><?= $page_title; ?></title>
    <style>
        @page{
            size:A4;
            margin:0;
        }
        
    </style>
</head>
<body>
    <div class="row justify-content-center ">
        <div class="col-8 ">
            <div class="card view shadow my-5 print-area">
                <div class="card-header d-flex justify-content-between "> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/all_student" class="text-decoration-none btn  btn-close " type="button"  disabled aria-label="Close"></a></div>
                    <div class="card-body">
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
                                    <img src="<?= base_url('uploads/img/'.$student['image']) ?>" width="150"  alt="">
                                </div>
                            </div>
                    
                        </div>
                        <div class="row my-3">
                            <h4>Address</h4>
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
                                    <h4>Collage </h4>
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
                                    <h4>School </h4>
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
                            <h3>Course Information</h3>
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
                                            <td><?= $student['payment_id'] ?></td>
                                        </tr>                        
                                    </table>
                                </div>
                            </div>
                        </div>
                          
                    </div>
                    <div class="m-4 text-end">
                        <button type="button"  id="btnPrint" >
                            Print PDF
                        </button>
                        <a href="<?= base_url()?>dashboard/all_student" class="btn btn-primary">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 


    <script>
        $(document).ready(function(){
            $("#btnPrint").on("click",function(){
                print({
                    printable: 'card-body',
                    type: 'pdf'});
            })
        })
    </script>
<script src="<?=base_url("jQuery.js"); ?> "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
