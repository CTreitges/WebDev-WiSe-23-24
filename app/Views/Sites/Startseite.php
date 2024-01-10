<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tasks</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered"
                   data-show-columns="true"
                   data-show-toggle="true"
                   data-toogle="table"
                   data-search="true"
                   data-toolbar="#toolbar">
                <thead>
                <tr>
                    <th>Tasks</th>
                    <th data-sortable="true">Spaltennamen</th>
                    <th>Notizen</th>
                    <th data-sortable="true">Person</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (empty($tasks)): ?>
                    <tr>
                        <td colspan="4">Keine Aufgaben gefunden.</td>
                    </tr>
                <?php else:
                    foreach ($tasks as $item): ?>
                        <tr>
                            <td><?= $item['tasks'] ?></td>
                            <td><?= $item['spaltenid'] ?></td>
                            <td><?= $item['notizen'] ?></td>
                            <td><?= $item['personenid'] ?></td>
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
