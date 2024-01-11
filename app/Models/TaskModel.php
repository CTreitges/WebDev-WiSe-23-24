<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

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

    public function getAllData():array {
        $result = $this->db->query('SELECT * FROM tasks');
        return $result->getResultArray();
    }

    public function getTasksByBoard($boardsid)
    {
        $result = $this->db->query(
            'SELECT t.id, t.personenid, t.taskartenid, t.spaltenid, t.sortid, t.tasks, t.erstelldatum, 
                t.erinnerungsdatum, t.erinnerung, t.notizen, t.erledigt, t.geloescht
            FROM tasks t
            JOIN spalten s ON t.spaltenid = s.id
            JOIN boards b ON s.boardsid = b.id
            WHERE s.id IN (
                SELECT id
                FROM spalten
                WHERE boardsid = ?
            )
            ORDER BY t.tasks DESC',
            [$boardsid]
        );
        return $result->getResultArray();
    }
}