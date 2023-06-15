<?php

namespace App\Controllers;

class Tentang_kami extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Tentang Kami'
        );
        return view('content/tentang_kami', $data);
    }
}