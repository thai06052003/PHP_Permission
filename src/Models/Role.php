<?php
namespace App\Models;

use System\Core\Model;

class Role extends Model {
    public function getRoles() {
        return $this->db
        ->table('roles')
        ->orderBy('name', 'DESC')
        ->all();
    }
    public function addRole($data) {
        return $this->db->table('roles')->insert($data);
    }
    public function updateRole($id, $data) {
        return $this->db->table('roles')->where('id', $id)->update($data);
    }
    public function findRole($id) {
        return $this->db->table('roles')->where('id', $id)->first();
    }
    public function deleteRole($id) {
        return $this->db->table('roles')->where('id', $id)->delete();
    }
}