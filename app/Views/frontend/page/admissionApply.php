<?= $this->extend('frontend/partial/layout') ?>
<?= $this->section('title') ?>
    <?= $admission['admission_name']?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section>
    <iframe class="admission-apply" src="<?= $admission['admission_link']?>"  width="100% ">

    </iframe>
</section>

<?= $this->endSection() ?>

