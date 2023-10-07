<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section('title') ;?>
    <?= $page_heading; ?>
<?= $this->endSection(); ?> 

<?= $this->section('content') ;?>
<div class="row justify-content-center">
        <div class="col-8 m-3">
            
            
            <form action="<?= base_url('dashboard/update_user/').$user['user_id'];?>"  method="post">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a class="text-decoration-none btn btn-primary ">All new</a></div>
       
            <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>"> 
                    <small class="text-danger"><?= isset($validation["name"]) ? $validation["name"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>">
                    <small class="text-danger"><?= isset($validation["username"]) ? $validation["username"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="email1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?=  $user['email']; ?>">
                    <small class="text-danger"><?= isset($validation["email"]) ? $validation["email"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" aria-label="Default select example" id="role" name="role" value="<?= $user['role']; ?>">
                        <option selected>Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="Editor">Editor</option>
                        <option value="Student">Student</option>
                    </select>
                    <small class="text-danger"><?= isset($validation["role"]) ? $validation["role"] : null;  ?></small>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">Image</label>
                    <input type="file" class="form-control" id="file" name="file">
                    <img class="py-2" src="<?= base_url('uploads/img/'.$user['image']) ?>" width="100" height="100" alt="">
                </div>
               
                <button type="submit" class="btn btn-primary">Update</button>
                </form> 
            
        </div>
</div>
<?= $this->endSection(); ?>