<?php

namespace App\Models;

use System\Core\Model;

class Action extends Model {
    public function getAction($moduleId) {
        return $this->db
        ->query("SELECT * FROM actions a JOIN modules_actions ma ON a.id = ma.action_id
                    WHERE ma.module_id = :module_id", ['module_id' => $moduleId]);
    }
}
