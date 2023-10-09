<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--------- Data Table----- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="<?=base_url("style.css"); ?>">

    <title><?= $this->renderSection('title'); ?></title>
</head>
<body id="body">
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      </ul>
      <div class="d-flex align-items-center" >
        
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="me-2" ><i class="fa-brands fa-facebook-messenger me-2 "></i></div>
            </a>
        </div>

        <div >
            <img src="" alt="" width="35" height="35" class="me-2"><span>Mosharrof Hosain</span>
            <a class="btn btn-secondary mx-3"  href="<?= base_url('logout')?>">Log out</a>
          </div>
      </div>
    </div>
  </div>
</nav>


<!-- sidebar -->
<section class="row ">
    <div class=" col-xl-3 col-lg-3 col-md-4 col-4 p-0">
        <div class="flex-shrink-0 p-3 shadow position-fixed sidebar" style="">
          <div class="">
            <a href="/" class="d-flex flex-column align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
            
              <img src="" alt="" width="60" height="60">
              <span class="fs-5 fw-semibold">Mosharrof Hosain</span>
            </a>
          </div>
          <div class="sidebar-scroll">
            <ul class="list-unstyled ps-0">

                <li class="mb-1">
                    <a href="<?= base_url()?>dashboard" class="btn btn-toggle d-inline-flex align-items-center rounded border-0 " >
                    <i class="fa-solid fa-gauge btn-icon"></i><span> Dashboard</span>
                    </a>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="false">
                    <i class="fa-solid fa-user btn-icon"></i><span> User</span>
                    </button>
                    <div class="collapse" id="user-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_user" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All Users</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_user" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add user</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Delete User</span></a></li>
                        <li><a href="<?= base_url()?>/dashboard/all_role" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All Role</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_role" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Role</span></a></li>
                    </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#student-collapse" aria-expanded="false">
                    <i class="fa-solid fa-graduation-cap btn-icon"></i><span> Student</span>
                    </button>
                    <div class="collapse" id="student-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_student" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All Students</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_student" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Student</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Delete Student</span></a></li>
                    </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#course-collapse" aria-expanded="false">
                    <i class="fa-brands fa-discourse btn-icon"></i><span> Course</span>
                    </button>
                    <div class="collapse" id="course-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_course" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All Courses</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_course" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Course</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Delete Course</span></a></li>
                    </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#batch-collapse" aria-expanded="false">
                    <i class="fas fa-users btn-icon"></i><span> Batch</span>
                    </button>
                    <div class="collapse" id="batch-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_batch" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All Batchs</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_batch" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Batch</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Delete Batch</span></a></li>
                    </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#branch-collapse" aria-expanded="false">
                    <i class="fa-solid fa-code-branch btn-icon"></i></i><span> Branch</span>
                    </button>
                    <div class="collapse" id="branch-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>/dashboard/all_branch" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All Branchs</span></a></li>
                        <li><a href="<?= base_url()?>/dashboard/add_branch" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Branch</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Delete Branch</span></a></li>
                    </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#class-collapse" aria-expanded="false">
                    <i class="fa-brands fa-atlassian btn-icon"></i><span> Class</span>
                    </button>
                    <div class="collapse" id="class-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_class" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All Classs</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_class" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Class</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Delete Class</span></a></li>
                    </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#payment-collapse" aria-expanded="false">
                    <i class="fa-solid fa-money-bill-1-wave btn-icon"></i><span> Payment</span>
                    </button>
                    <div class="collapse" id="payment-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_payment" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>All Payment</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_payment" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add payment</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Delete Class</span></a></li>
                    </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#notice-collapse" aria-expanded="false">
                    <i class="fa-solid fa-bell btn-icon"></i><span> Notice</span>
                    </button>
                    <div class="collapse" id="notice-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="<?= base_url()?>dashboard/all_notice" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i> <span>All Notices</span></a></li>
                        <li><a href="<?= base_url()?>dashboard/add_notice" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Add Notice</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><i class="fa-solid fa-angle-right btn-icon-child "></i><span>Delete Notice</span></a></li>
                    </ul>
                    </div>
                </li>

                <li class="border-top my-3"></li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="true">
                    <i class="fa-solid fa-angle-right btn-icon"></i><span>Account</span>
                    </button>
                    <div class="collapse show" id="account-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><span>New...</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><span>Profile</span></a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><span>Settings</span></a></li>
                        <li><a href="<?= base_url('logout')?>" class="link-body-emphasis d-inline-flex align-items-center text-decoration-none rounded"><span>Sign out</span></a></li>
                    </ul>
                    </div>
                </li>
            </ul>
          </div>
          <div class="" style="border-top: 1px solid black;">
            <p>CopyRight @</p>

          </div>
        </div>
    </div>

    
    <div class="col-xl-9 col-lg-9 col-md-8 col-8 p-0">
    <?= $this->renderSection('content'); ?>
    </div>
    
</section>

    <script>
      $(document).ready( function () {
          $('#data-table').DataTable();
       } );
     </script>

<script src="<?=base_url("jQuery.js")?> "></script>

    <!--------- Data Table----- -->
<script src=" https://code.jquery.com/jquery-3.7.0.js "></script>
<script src=" https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" ></script>
<script src=" https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>