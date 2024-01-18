<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Task bearbeiten</h3>
        </div>
        <div class="card-body">
            <form method="post" action="<?php
            echo base_url('/task_edit'); ?>">
                <div class="mb-3 row">
                    <label for="Taskbezeichnung" class="col-sm-2 col-form-label text-sm-start">Taskbezeichnung</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Taskbezeichnung" name="Taskbezeichnung" placeholder="Taskbezeichnung..." required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Person" class="col-sm-2 col-form-label">Person</label>
                    <div class="col-sm-10">
                        <!--                        // databank access-->
                        <select class="form-select" id="Person" name="Person">
                            <option selected>Person 1</option>
                            <option>Person 2</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Erinnerungsdatum" class="col-sm-2 col-form-label text-sm-start">Erinnerungsdatum</label>
                    <div class="col-sm-10">
                        <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input" name="Erinnerungsdatum">
                        <!--                        <span class="input-group-text">am</span>-->
                            <input type="datetime-local" data-provide="datepicker" class="form-control" id="Startdate"
                                   placeholder="Datum" name="Erinnerungsdatum"
                                   data-np-intersection-state="observed" value="<?php echo date('Y-m-d\TH:i', strtotime('+1 hour')); ?>">

                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Erinnerung" class="col-sm-2 col-form-label text-sm-start">Erinnerung</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Erinnerung" name="Erinnerung" placeholder="Erinnerung..." required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Notiz" class="col-sm-2 col-form-label text-sm-start">Notiz</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="Notiz" name="Notiz"  placeholder="Notiz..." rows="6"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="Spalte" class="col-sm-2 col-form-label">Spalte</label>
                    <div class="col-sm-10">
                        <!--                        // databank access-->
                        <select class="form-select" id="Spalte" name="Spalte">
                            <option selected>Spalte 1</option>
                            <option>Spalte 2</option>
                        </select>
                    </div>
                </div>
                <div class="mb-2 row">
                    <div class="col-sm-10 offset-sm-0">
                        <button type="submit" class="btn btn-success btn-sm">Speichern</button>
                        <a href="<?php echo base_url('/Startseite'); ?>">
                            <button type="button" class="btn btn-secondary btn-sm">Abbrechen</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
</main>
<?= $this->endSection() ?>
