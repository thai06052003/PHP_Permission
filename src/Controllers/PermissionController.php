<?php

namespace App\Controllers;

use App\Models\Action;
use App\Models\Role;
use App\Models\Module;
use App\Models\Permission;

class PermissionController {
    private $roleModel;
    private $moduleModel;
    private $actionModel;
    private $permissionModel;
    public function __construct() {
        $this->roleModel = new Role();
        $this->moduleModel = new Module();
        $this->actionModel = new Action();
        $this->permissionModel = new Permission();
    }
    public function index() {
        $pageTitle = 'Phân quyền';
        $roles = $this->roleModel->getRoles();
        return view('permissions.index', compact('pageTitle', 'roles'));
    }
    public function add() {
        $pageTitle = 'Phân quyền';
        $modules = $this->moduleModel->getModule();
        $moduleIds = [];
        foreach($modules as $module) {
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

        return view('permissions.add', compact('pageTitle', 'modules'));
    }

    public function handleAdd() {
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
                    }
                    else {
                        $permissionId = $permission->id;
                    }
                    $this->roleModel->addPermission($roleId, $permissionId);
                }
            }
        }
        return redirect('/permissions');
    }
}