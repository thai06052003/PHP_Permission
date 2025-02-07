<?php

namespace App\Models;

use System\Core\Model;

class Role extends Model
{
    // Lấy da danh sách tất cả các Role
    public function getRoles()
    {
        return $this->db
            ->table('roles')
            ->orderBy('name', 'DESC')
            ->all();
    }
    // Lấy ra 1 Role
    public function getRole($id)
    {
        return $this->db->table('roles')->where('id', $id)->first();
    }
    // Thêm 1 Role
    public function addRole($data)
    {
        $this->db->table('roles')->insert($data);
        return $this->db->getLastId();
    }
    // Nối 1 Role với 1 Permission
    public function addPermission($roleId, $permissionId)
    {
        $this->db->table('roles_permissions')->insert([
            'role_id' => $roleId,
            'permission_id' => $permissionId
        ]);
    }
    //
    public function getPermission($roleId)
    {
        return $this->db->query("SELECT p.*
                                    FROM permissions p JOIN roles_permissions rp ON p.id = rp.permission_id
                                    WHERE rp.role_id = ?", [$roleId]);
    }
    //
    public function deletePermissions($id) {
        return $this->db->table('roles_permissions')->where('role_id', $id)->delete();
    }
    public function updateRole($id, $data) {
        return $this->db->table('roles')->where('id', $id)->update($data);
    }
    
}
