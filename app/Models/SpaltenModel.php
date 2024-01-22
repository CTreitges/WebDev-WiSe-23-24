<?php

namespace App\Models;

use CodeIgniter\Model;

class SpaltenModel extends Model
{

    public function getSpalten()
    {
        $this->spalten = $this->db->table('spalten');
        $this->spalten->select();
        $this->spalten->orderBy('id', 'asc');
        $result = $this->spalten->get();
        return $result->getResultArray();
    }

    public function getTasks(){
        $this->tasks = $this->db->table('tasks');
        $this->tasks->select();

        $result = $this->tasks->get();
        return $result->getResultArray();
    }

    public function getSpalte($id = null)
    {
        $this->spalten = $this->db->table('spalten');
        $this->spalten->select('*');

        if ($id != NULL) {
            $this->spalten->where('id', $id);
        }

        $this->spalten->orderBy('spalten');
        $result = $this->spalten->get();

        if ($id != NULL) {
            return $result->getRowArray();
        } else return $result->getResultArray();
    }

    public function getBoards($boards_id = NULL)
    {
        $this->boards = $this->db->table('boards');
        $this->boards->select('*');
        if ($boards_id != NULL)
            $this->boards->where('id', $boards_id);
        $result = $this->boards->get();
        if ($boards_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createBoard()
    {
        $this->spalten = $this->db->table('spalten');
        $this->spalten->insert(array(
            'id' => $_POST['Spalte'],
            'taskartenid' => 1,
            'spaltenid' => $_POST['Spalte'],
            'sortid' => 1,
            'tasks' => $_POST['Bezeichnung'],
            'erstelldatum' => '2024-01-19', //Todo aktueles Datum!
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

}