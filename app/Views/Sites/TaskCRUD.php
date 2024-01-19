<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-white" style="background-color: #002060"><?php echo $title; ?></h5> <!-- Farbe manuell gesetzt! -->
            <div class="card-body">
                <form action="<?php echo base_url('/submitTasks')?>" method="post">
                    <input type="hidden" name="id" value="<?php echo isset($update['id']) ? $update['id'] : '' ?>">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="Person" class="form-label">Person auswählen</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Person" type="text" id="Person" name="Person">
                                <?php for($i=0; $i < count($personen); $i++): ?>
                                    <option value="<?php echo $personen[$i]['id'] ?>" <?php if (isset($update['id'])) {if($update['personenid'] == $i + 1){echo 'selected';}} ?>>
                                        <?php echo $personen[$i]['vorname'] . ' '; echo $personen[$i]['name']; ?>
                                    </option>
                                <?php endfor;?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="Bezeichnung" class="form-label">Beschreibung der Task</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control"  id="Bezeichnung" style="height: 100px" name="Bezeichnung"><?php echo isset($update['tasks']) ? $update['tasks'] : '' ?></textarea>
                        </div>
                        <div class="col-md-3">
                            <label for="Erinnerung" class="form-label">Erinnerung</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Erinnerung" type="text" id="Erinnerung" name="Erinnerung">
                                <option value="1" <?php if (isset($update['id'])) {if($update['erinnerung'] == 1){echo 'selected';}} ?>>Ja</option>
                                <option value="0" <?php if (isset($update['id'])) {if($update['erinnerung'] == 0){echo 'selected';}} ?>>Nein</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="Erinnerungsdatum" class="form-label">Erinnerungsdatum</label>
                        </div>
                        <div class="col-md-9">
                            <input type="datetime-local" id="Erinnerungsdatum" class="form-control" name="Erinnerungsdatum" value="<?php echo substr(isset($update['erinnerungsdatum']) ? $update['erinnerungsdatum'] : '', 0,16) ?>">
                        </div>
                        <div class="col-md-3">
                            <label for="Notiz" class="form-label">Notiz</label>
                        </div>
                        <div class="col-md-9">
                            <textarea class="form-control"  id="Notiz" style="height: 100px" name="Notiz"><?php echo isset($update['notizen']) ? $update['notizen'] : '' ?></textarea>
                        </div>
                        <div class="col-md-3">
                            <label for="Spalte" class="form-label">Spalte auswählen</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Spalte" type="text" id="Spalte" name="Spalte">
                                <?php for($i=0; $i < count($spalten); $i++): ?>
                                    <option value="<?php echo $spalten[$i]['id'] ?>" <?php if (isset($update['id'])) {if($update['spaltenid'] == $i + 1){echo 'selected';}} ?>><?php echo $spalten[$i]['spalte'] ?></option>
                                <?php endfor;?>
                            </select>
                        </div>
                    </div>
                    <?php if($todo == 0) : ?>
                        <button type="submit" class="btn btn-primary mt-3" name="submitTasks" id="submitTasks" style="background-color: #002060; border-color: #002060"> <!-- Farbe manuell gesetzt! -->
                            <i class="fa-solid fa-plus"></i> Hinzufügen</button>
                    <?php endif ?>

                    <?php if($todo == 1) : ?>
                        <button type="submit" class="btn btn-success mt-3" name="submitTasks" id="submitTasks" style="background-color: #002060; border-color: #002060"> <!-- Farbe manuell gesetzt! -->
                            <i class="fa-solid fa-floppy-disk"></i> Speichern</button>
                    <?php endif ?>
                    <?php if($todo == 2) : ?>
                        <button type="submit" class="btn btn-danger mt-3" name="deleteTasks" id="deleteTasks" style="background-color: #002060; border-color: #002060"> <!-- Farbe manuell gesetzt! -->
                            <i class="fa-solid fa-trash-can"></i> Löschen</button>
                    <?php endif ?>
                    <a class="btn btn-secondary mt-3" href="<?=base_url("Startseite")?>">Abbrechen</a>
                </form>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
