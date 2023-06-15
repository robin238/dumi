<?php

namespace App\Controllers;

class Investor extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Investor'
        );
        return view('content/investor',$data);
    }
}