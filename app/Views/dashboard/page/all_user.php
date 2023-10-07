<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-11">
            
        <table class="table ">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_user"class="text-decoration-none btn btn-primary ">Add new</a></div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($users)>0){
                    foreach ($users as $user) {              
                ?>
                <tr class="align-middle">
                    <td><?= $user['user_id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['role_name'] ?></td>
                    <td><img src="<?= base_url('uploads/img/'.$user['image']) ?>" width="40"  alt=""></td>
                    <td>
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a class="edit" href="<?= base_url('dashboard/edit/'.$user['user_id'] ) ?>"><i class="fa-solid fa-eye p-1"></a></i></li>
                            <li><a href="<?= base_url('dashboard/edit/'.$user['user_id'] ) ?>"><i class="fa-regular fa-pen-to-square p-1"></i></a></li>
                            <li><a href="<?= base_url('dashboard/delete/'.$user['user_id'] ) ?>"><i class="fa-solid fa-trash p-1"></i></li></a>
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
