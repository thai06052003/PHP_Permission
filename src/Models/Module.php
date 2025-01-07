<?php

namespace App\Models;

use System\Core\Model;

class Module extends Model {
    public function getModule() {
        return $this->db
        ->table('modules')
        ->orderBy('name')
        ->all();
    }
}
