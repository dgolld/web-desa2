<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'LARAS JAYA',
            'page'  => 'v_home'
        ];
        return view('v_template_front_end', $data);
    }
}
