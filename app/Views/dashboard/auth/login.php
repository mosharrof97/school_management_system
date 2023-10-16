<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="<?=base_url("style.css"); ?>">
    <title>Document</title>
</head>
<body>
    <div class="row justify-content-center">
            <div class="col-4 m-3">

                <?php $validation = \Config\Services::validation();?>

                <form action=" <?= route_to('admin.login.handler') //base_url('login')?>" method="post">
                <div class="d-flex justify-content-between my-4"> <h3><?= $page_heading; ?></h3> </div>
                    
                <?= csrf_field() ?>
                    <?php if(!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success')?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif ?>

                        <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('fail')?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif ?>




                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="login_id" placeholder="Username or Email" value="<?= set_value('login_id')?>">
                        
                        <?php if($validation -> getError('login_id')) : ?>
                            <div class="d-block text-danger" style="" >
                                <?= $validation -> getError('login_id')?>
                            </div>
                        <?php endif ?>

                    </div>

    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password')?>">
                            
                        <?php if($validation -> getError('password')) : ?>
                            <div class="d-block text-danger" style="" >
                                <?= $validation -> getError('password')?>
                            </div>
                        <?php endif ?>
                    
                    </div>
                    <input type="submit" class="btn btn-primary text-decoration-none" value="login">
                    <!-- <a  type="submit" class="btn btn-primary text-decoration-none" href="">Submit</a> -->
                    </form>
                
            </div>
    </div>

 </body>
</html>
