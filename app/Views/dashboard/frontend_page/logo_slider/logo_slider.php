<?= $this->extend('dashboard/partial/header') ;?>

<?= $this->section('title') ;?>
    <?= $page_title; ?>
<?= $this->endSection(); ?> 


<?= $this->section('content') ;?>
    <div class="row justify-content-center">
        <div class="col-12">
            
        <table class="table ">
            <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> </div>
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($logos)>0){
                    foreach ($logos as $logo ) {              
                ?>
                <tr class="align-middle">
                    <td><?= $logo['logo_id'] ?></td>
                    <td><img src="<?= base_url('uploads/logo/'.$logo['logo_image']) ?>" width="40"  alt=""></td>
                    <td>
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a href="<?= base_url('dashboard/add_logo/'.$logo['logo_id'] ) ?>"><i class="fa-regular fa-pen-to-square p-1"></i></a></li>
                        </ul>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
 
            </tbody>
        </table>        
    </div>
    </div>

<?= $this->endSection(); ?>
