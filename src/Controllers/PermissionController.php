<?php

namespace App\Controllers;

use App\Models\Action;
use App\Models\Role;
use App\Models\Module;

class PermissionController {
    private $roleModel;
    private $moduleModel;
    private $actionModel;
    public function __construct() {
        $this->roleModel = new Role();
        $this->moduleModel = new Module();
        $this->actionModel = new Action();
    }
    public function index() {
        $pageTitle = 'Phân quyền';
        $roles = $this->roleModel->getRoles();
        return view('permissions.index', compact('pageTitle', 'roles'));
    }
    public function add() {
        $pageTitle = 'Phân quyền';
        $modules = $this->moduleModel->getModule();
        foreach($modules as $module) {
            $module->actions = $this->actionModel->getAction($module->id);
        }
        echo '<pre>';
        print_r($modules);
        echo '</pre>';
        return view('permissions.add', compact('pageTitle', 'modules'));
    }
}