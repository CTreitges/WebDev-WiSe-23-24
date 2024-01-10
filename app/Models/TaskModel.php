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
    protected $allowedFields = ['name', 'column_name', 'task_type', 'person_name']; // Felder, die geändert werden können

    public function getTasksByBoard($boardId)
    {
        $db = Database::connect();
        $builder = $db->table($this->table);

        return $builder->select('id, spaltenid, notizen, personenid')
            ->where('board_id', $boardId)
            ->get()
            ->getResultArray();
    }
}