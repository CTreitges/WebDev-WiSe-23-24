<?= $this->extend('layouts/layout') ?>

<?= $this->section('content') ?>
<main>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Spalte erstellen</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3 row">
                    <label for="spaltenbezeichnung" class="col-sm-2 col-form-label text-sm-start">Spaltenbezeichnung</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="spaltenbezeichnung" name="spaltenbezeichnung" placeholder="Bezeichnung für die Spalte" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="spaltenbeschreibung" class="col-sm-2 col-form-label text-sm-start">Spaltenbeschreibung</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="spaltenbeschreibung" name="spaltenbeschreibung"  placeholder="Beschreibung der Spalte" rows="6"></textarea>
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="sortid" class="col-sm-2 col-form-label text-sm-start">Sortid</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sortid" name="sortid"  placeholder="Sortid angeben" required>
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="board" class="col-sm-2 col-form-label text-sm-start">Board auswählen</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="board" name="board">
                            <option value="board1">Allgemeine Tools</option>
                            <option value="board2">Spaß Tools</option>
                        </select>
                    </div>
                </div>
                <div class="mb-2 row">
                    <div class="col-sm-10 offset-sm-0">
                        <button type="submit" class="btn btn-success btn-sm">Speichern</button>
                        <button type="button" class="btn btn-secondary btn-sm">Abbrechen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?= $this->endSection() ?>
