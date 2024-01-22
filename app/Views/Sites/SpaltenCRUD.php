<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-white" style="background-color: #002060"><?php echo $title; ?></h5>
            <div class="card-body">
                <form action="<?php echo base_url('/submitSpalten')?>" method="post">
                    <input type="hidden" name="id" value="<?php echo isset($update['id']) ? $update['id'] : '' ?>">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="Spalte" class="form-label">Spalte</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="Spalte" name="Spalte" value="<?php echo isset($update['spalte']) ? $update['spalte'] : '' ?>" <?php if ($todo == 2) {echo 'disabled';} ?>>
                        </div>
                        <div class="col-md-3">
                            <label for="Spaltenbeschreibung" class="form-label">Spaltenbeschreibung</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control" id="Spaltenbeschreibung" style="height: 100px" name="Spaltenbeschreibung" <?php if ($todo == 2) {echo 'disabled';} ?>><?php echo isset($update['spaltenbeschreibung']) ? $update['spaltenbeschreibung'] : '' ?></textarea>
                        </div>
                        <div class="col-md-3">
                            <label for="Sortid" class="form-label">Sortid</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" class="form-control" id="Sortid" name="Sortid" value="<?php echo isset($update['sortid']) ? $update['sortid'] : '' ?>" <?php if ($todo == 2) {echo 'disabled';} ?>>
                        </div>
                    </div>
                    <?php if($todo == 0) : ?>
                        <button type="submit" class="btn btn-success mt-3" name="submitSpalten" id="submitSpalten">
                            <i class="fa-solid fa-plus"></i> Hinzufügen</button>
                    <?php endif ?>

                    <?php if($todo == 1) : ?>
                        <button type="submit" class="btn btn-success mt-3" name="submitSpalten" id="submitSpalten">
                            <i class="fa-solid fa-floppy-disk"></i> Speichern</button>
                    <?php endif ?>
                    <?php if($todo == 2) : ?>
                        <button type="submit" class="btn btn-danger mt-3" name="deleteSpalten" id="deleteSpalten">
                            <i class="fa-solid fa-trash-can"></i> Löschen</button>
                    <?php endif ?>
                    <a class="btn btn-secondary mt-3" href="<?=base_url("Spalten")?>">Abbrechen</a>
                </form>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
