<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Title'
        );

		// $this->load->view('layout/index', $data);
        return view('content/kontak', $data);
 
    }
}