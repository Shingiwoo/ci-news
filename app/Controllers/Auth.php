<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login(): string
    {
        $data = [
            'title' => 'Login',
            '$content' => 'v_login'
        ];

        // Tampilkan form login
        return view('layout/auth/v_wrapper', $data);
    }

    public function register()
    {
        // Tampilkan form register
        return view('auth/register');
    }

    public function logout()
    {
        // Logout logic
        return redirect()->to('/login');
    }
}
