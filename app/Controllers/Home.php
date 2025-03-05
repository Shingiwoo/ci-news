<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data=[
            'title' => 'Home',
            'content' => 'v_home'
        ];
        return view('layout/frontend/v_wrapper', $data);
    }
}
