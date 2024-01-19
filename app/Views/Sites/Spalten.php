<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Spalten</h3>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url();?>SpalteErstellen" class="btn btn-success btn-sm">Erstellen</a>
            <div class="table-responsive mt-2">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Board</th>
                        <th>Sortid</th>
                        <th>Spalte</th>
                        <th>Spaltenbeschreibung</th>
                        <th>Bearbeiten</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Board 1</td>
                        <td>100</td>
                        <td>Spalte 1</td>
                        <td>Beschreibung 1</td>
                        <td><i class="fa-symbols fas fa-pen-to-square"></i><i class="fa-symbols fa-solid fa-trash ps-1"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Board 2</td>
                        <td>200</td>
                        <td>Spalte 2</td>
                        <td>Beschreibung 2</td>
                        <td><i class="fa-symbols fas fa-pen-to-square"></i><i class="fa-symbols fa-solid fa-trash ps-1"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>