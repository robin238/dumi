<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Kontak'
        );

        return view('content/kontak', $data);
 
    }
}