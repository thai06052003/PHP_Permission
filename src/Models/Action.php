<?php

namespace App\Models;

use System\Core\Model;

class Action extends Model {
    public function getAction($moduleIds = []) {
        $str = rtrim(str_repeat('?,', count($moduleIds)), ',');

        return $this->db
        ->query("SELECT * FROM actions a JOIN modules_actions ma ON a.id = ma.action_id
                    WHERE ma.module_id IN ($str)", $moduleIds);
    }
}
