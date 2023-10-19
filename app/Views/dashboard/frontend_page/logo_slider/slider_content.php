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
                <th scope="col">Sub Title</th>
                <th scope="col">Title</th>
                <th scope="col">Button Link</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(count($homesliders)>0){
                    foreach ($homesliders as $homeslider ) {              
                ?>
                <tr class="align-middle">
                    <td><?= $homeslider['slider_id'] ?></td>
                    <td><?= $homeslider['slider_sub_title'] ?></td>
                    <td><?= $homeslider['slider_title'] ?></td>
                    <td><?= $homeslider['slider_btn_link'] ?></td>
                    <td><img src="<?= base_url('uploads/slider/'.$homeslider['slider_image']) ?>" width="40"  alt=""></td>
                    <td>
                        <ul class="d-flex list-unstyled m-0"> 
                            <li><a href="<?= base_url('dashboard/add_slider/'.$homeslider['slider_id'] ) ?>"><i class="fa-regular fa-pen-to-square p-1"></i></a></li>
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
