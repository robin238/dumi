<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Kontak'
        );

		// $this->load->view('layout/index', $data);
        return view('content/kontak', $data);
 
    }
}