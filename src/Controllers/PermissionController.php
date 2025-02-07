<?php

namespace App\Controllers;

use Error;
use App\Models\Role;
use App\Models\Action;
use App\Models\Module;
use App\Models\Permission;

class PermissionController
{
    private $roleModel;
    private $moduleModel;
    private $actionModel;
    private $permissionModel;
    public function __construct()
    {
        $this->roleModel = new Role();
        $this->moduleModel = new Module();
        $this->actionModel = new Action();
        $this->permissionModel = new Permission();
    }
    // Lấy ra danh sách phân quyền
    public function index()
    {
        $pageTitle = 'Phân quyền';
        $roles = $this->roleModel->getRoles();
        return view('permissions.index', compact('pageTitle', 'roles'));
    }
    // Hiển thị view thêm vai trò
    public function add()
    {
        $pageTitle = 'Phân quyền';
        $modules = $this->getModules();

        return view('permissions.add', compact('pageTitle', 'modules'));
    }
    // Xử lý thêm vai trò
    public function handleAdd()
    {
        $name = input('name');
        $permissions = input('permissions');
        $roleId = $this->roleModel->addRole([
            'name' => $name
        ]);
        if ($roleId) {
            if (!empty($permissions)) {
                foreach ($permissions as $value) {
                    $permission = $this->permissionModel->getPermission($value, 'value');
                    if (!$permission) {
                        $permissionId = $this->permissionModel->addPermission([
                            'value' => $value
                        ]);
                    } else {
                        $permissionId = $permission->id;
                    }
                    $this->roleModel->addPermission($roleId, $permissionId);
                }
            }
        }
        return redirect('/permissions');
    }
    //
    public function edit($id)
    {
        $pageTitle = 'Cập nhật vai trò';
        $modules = $this->getModules();
        $role = $this->roleModel->getRole($id);
        if (!$role) {
            throw new Error('Vai trò không tồn tại', 404);
        }
        $permissions = $this->roleModel->getPermission($role->id);
        $role->permissions = $permissions;
        return view('permissions.edit', compact('pageTitle', 'modules', 'role'));
    }
    //
    public function handleEdit($id)
    {
        $name = input('name');
        $permissions = input('permissions');
        $roleId = $this->roleModel->updateRole($id, [
            'name' => $name
        ]);
        if (!empty($permissions)) {
            $this->roleModel->deletePermissions($id);
            foreach ($permissions as $value) {
                $permission = $this->permissionModel->getPermission($value, 'value');
                if (!$permission) {
                    $permissionId = $this->permissionModel->addPermission([
                        'value' => $value
                    ]);
                } else {
                    $permissionId = $permission->id;
                }

                $this->roleModel->addPermission($id, $permissionId);
            }
        }
        return redirect('/permissions/edit/'.$id);
    }
    //
    private function getModules()
    {
        $modules = $this->moduleModel->getModule();
        $moduleIds = [];
        foreach ($modules as $module) {
            $moduleIds[] = $module->id;
        }

        $actions = $this->actionModel->getAction($moduleIds);

        foreach ($modules as $module) {
            foreach ($actions as $action) {
                if ($module->id == $action->module_id) {
                    $module->actions[] = $action;
                }
            }
        }

        return $modules;
    }
}
