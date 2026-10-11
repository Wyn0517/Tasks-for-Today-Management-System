<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'About Project',
            'activeNav' => 'about',
        ];

        return view('pages/about', $data);
    }
}
