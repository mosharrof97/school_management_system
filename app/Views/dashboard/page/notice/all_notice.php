<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-11">
            
        <table class="table border" >
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> <a href="<?= base_url()?>dashboard/add_notice" class="text-decoration-none btn btn-primary ">Add new</a></div>
            <thead>
                <tr class="border">
                <th scope="col" class="border">ID</th>
                <th scope="col" class="border">Title</th>
                <th scope="col" class="border">Date</th>
                <th scope="col" class="border">Time</th>
                <th scope="col" class="border">Description</th>
                <th scope="col" class="border" >Image</th>
                <th scope="col" class="border">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($notice)>0){
                    foreach ($notice as $notices) {              
                ?>
                <tr class="align-middle border">
                    <td class="border"><?= $notices['notice_id'] ?></td>
                    <td class="border"><?= $notices['title'] ?></td>
                    <td class="border"><?= $notices['date'] ?></td>
                    <td class="border"><?= $notices['time'] ?></td>
                    <td  class="border" style="overflow: scroll;"><?= $notices['desc'] ?></td>
                    <td class="border" ><img src="<?= base_url('uploads/img/'.$notices['image']) ?>" alt="" width="100" heigth="40"></td>
                    <td class="border">
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a href="<?= base_url('/dashboard/edit_notice/'.$notices['notice_id'] ) ?>"><i class="fa-regular fa-pen-to-square p-1"></i></a></li>
                            <li><a href="<?= base_url('dashboard/delete_notice/'.$notices['notice_id'] ) ?>"><i class="fa-solid fa-trash p-1"></i></li></a>
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
