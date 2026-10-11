<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();
        $user = $userModel->getDemoUser();

        $data = [
            'pageTitle' => 'User Profile',
            'activeNav' => 'profile',
            'user'      => $user,
        ];

        return view('pages/profile', $data);
    }
}
