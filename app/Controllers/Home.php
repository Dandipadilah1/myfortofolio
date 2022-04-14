<?php

namespace App\Controllers;

use App\Models\PortoModel;

class Home extends BaseController
{
    protected $PortoModel;
    public function __construct()
    {
        $this->PortoModel = new PortoModel();
    }

    public function index()
    {
        $tb_edu = $this->PortoModel->findAll();

        $data = [
            'title' => 'CV | Belajar CI4',
            'tb_edu' => $tb_edu
        ];
        return view('index', $data);
    }
}