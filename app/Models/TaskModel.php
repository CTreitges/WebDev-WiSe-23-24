<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks'; // Name der Tabelle in Ihrer Datenbank
    protected $primaryKey = 'id'; // Primärschlüssel der Tabelle
    protected $returnType = 'array'; // Rückgabetyp der Ergebnisse
    protected $useSoftDeletes = false; // Ob Soft Deletes verwendet werden sollen
    protected $allowedFields = ['personenid, taskartenid, spaltenid, sortid, tasks, erinnerungsdatum, erinnerung, notizen, erledigt, geloescht']; // Felder, die geändert werden können
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'erstelldatum';
    protected $updatedField = '';

    public function getAllData(): array
    {
        $result = $this->db->query('SELECT * FROM tasks');
        return $result->getResultArray();
    }

    public function getData()
    {
        $this->tasks = $this->db->table('tasks');
        $this->tasks->select('tasks.*, personen.*, taskarten.*');
        $this->tasks->join('personen', 'tasks.personenid = personen.id');
        $this->tasks->join('taskarten', 'tasks.taskartenid = taskarten.id');
        $this->tasks->orderBy('tasks.id', 'asc');

        $result = $this->tasks->get();
        return $result->getResultArray();
    }

    public function getTasks()
    {
        $this->tasks = $this->db->table('tasks');
        $this->tasks->select();

        $this->tasks->orderBy('id', 'asc');
        $result = $this->tasks->get();
        return $result->getResultArray();
    }

    public function getSpalten(){
        $this->spalten = $this->db->table('spalten');
        $this->spalten->select();

        $result = $this->spalten->get();
        return $result->getResultArray();
    }

    public function getTask($id = null)
    {
        $this->tasks = $this->db->table('tasks');
        $this->tasks->select('*');

        if ($id != NULL) {
            $this->tasks->where('id', $id);
        }

        $this->tasks->orderBy('tasks');
        $result = $this->tasks->get();

        if ($id != NULL) {
            return $result->getRowArray();
        } else return $result->getResultArray();
    }

    public function createTask($taskId = null)
    {
        $this->tasks = $this->db->table('tasks');
        $this->tasks->insert(array('personenid' => $_POST['Person'],
            'taskartenid' => 1,
            'spaltenid' => $_POST['Spalte'],
            'sortid' => 1,
            'tasks' => $_POST['Bezeichnung'],
            'erstelldatum' => '2024-01-19',
            'erinnerungsdatum' => $_POST['Erinnerungsdatum'],
            'erinnerung' => $_POST['Erinnerung'],
            'notizen' => $_POST['Notiz'],
            'erledigt' => '0',
            'geloescht' => '0',));
    }

    public function updateTask()
    {
        $this->tasks = $this->db->table('tasks');
        $this->tasks->where('id', $_POST['id']);
        $this->tasks->update(array('personenid' => $_POST['Person'],
            'taskartenid' => 1,
            'spaltenid' => $_POST['Spalte'],
            'sortid' => 1,
            'tasks' => $_POST['Bezeichnung'],
            'erstelldatum' => '2024-01-19',
            'erinnerungsdatum' => $_POST['Erinnerungsdatum'],
            'erinnerung' => $_POST['Erinnerung'],
            'notizen' => $_POST['Notiz'],
            'erledigt' => '0',
            'geloescht' => '0',));
    }

    public function deleteTask()
    {
        $this->tasks = $this->db->table('tasks');
        $this->tasks->where('id', $_POST['id']);
        $this->tasks->delete();
    }

    public function getPersonen($person_id = NULL)
    {
        $this->personen = $this->db->table('personen');
        $this->personen->select('*');
        if ($person_id != NULL)
            $this->personen->where('id', $person_id);
        $result = $this->personen->get();
        if ($person_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }
}