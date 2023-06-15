<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Beranda'
        );

        return view('layout', $data);
    }
}