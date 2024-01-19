<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tasks</h3>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url();?>taskErstellen" class="btn btn-success btn-sm mb-2">Neu</a>
            <div class="table-responsive">
                <table class="table table-bordered"
                       data-show-columns="true"
                       data-show-toggle="true"
                       data-toggle="table"
                       data-search="true"
                       data-toolbar="#toolbar">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>PersonenId</th>
                        <th>TaskId</th>
                        <th>SpaltenId</th>
                        <th>SortId</th>
                        <th>Tasks</th>
                        <th>Erstelldatum</th>
                        <th>Erinnerungsdatum</th>
                        <th>Erinnerung</th>
                        <th>Notizen</th>
                        <th>Erledigt</th>
                        <th>Geloescht</th>
                        <th>Bearbeiten</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (empty($tasks)): ?>
                        <tr>
                            <td colspan="12">Keine Aufgaben gefunden.</td>
                        </tr>
                    <?php else:
                        foreach ($tasks as $item): ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['personenid'] ?></td>
                                <td><?= $item['taskartenid'] ?></td>
                                <td><?= $item['spaltenid'] ?></td>
                                <td><?= $item['sortid'] ?></td>
                                <td><?= $item['tasks'] ?></td>
                                <td><?= $item['erstelldatum'] ?></td>
                                <td><?= $item['erinnerungsdatum'] ?></td>
                                <td><?= $item['erinnerung'] ?></td>
                                <td><?= $item['notizen'] ?></td>
                                <td><?= $item['erledigt'] ?></td>
                                <td><?= $item['geloescht'] ?></td>
                                <td>
                                    <a href="<?php echo base_url('/taskBearbeiten'.'/' . $item['id'] . '/1'); ?>" style="color: transparent">
                                        <i class="fa-symbols fas fa-pen-to-square text-dark"></i>
                                    </a>
                                    <a href="<?php echo base_url('/taskLoeschen'.'/' . $item['id'] . '/2'); ?>">
                                        <i class="fa-symbols fa-solid fa-trash ps-1 text-dark"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach;
                    endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
