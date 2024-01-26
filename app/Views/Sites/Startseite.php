<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tasks</h3>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url();?>taskErstellen" class="btn btn-success btn-sm mb-2">
                <i class="fa-solid fa-plus"></i> Neu</a>
            <div class="row">
                <?php foreach ($spalten as $spalten): ?>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="card-header text-white" style="background-color: #002e83">
                                <h4 class="card-title"><?= $spalten['spalte'] ?></h4>
                            </div>
                            <div class="card-body">
                                <?php foreach ($tasks as $task): ?>
                                    <?php if ($task['spaltenid'] == $spalten['id']): ?>
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $task['tasks'] ?></h5>
                                                <p class="card-text"><?= $task['notizen'] ?></p>
                                                <a href="<?php echo base_url('/taskBearbeiten'.'/' . $task['id'] . '/1'); ?>" style="color: transparent">
                                                    <i class="fa-symbols fas fa-pen-to-square text-dark"></i>
                                                </a>
                                                <a href="<?php echo base_url('/taskLoeschen'.'/' . $task['id'] . '/2'); ?>">
                                                    <i class="fa-symbols fa-solid fa-trash ps-1 text-dark"></i>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
