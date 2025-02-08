<?php
namespace App\Controllers;

use App\Models\User;

class UserPermissionController {
    private $userModel;
    public function __construct() {
        $this->userModel = new User();
    }
    public function updateUserRole() {
        $users = input('users');
        $roles = input('roles');

        if ($users)  {
            foreach ($users as $user) {
                $userId = $user;
                if ($roles) {
                    foreach ($roles as $role) {
                        $this->userModel->addUserRole($userId, $role);
                    }
                }
            }
        }
        return redirect('/permissions');
    }
}