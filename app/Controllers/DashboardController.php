<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        //
        $data = [
            'title' => 'Dashboard',
            'page' => 'dashboard',
        ];
        return view('dashboard/dashboard', $data);
    }

    public function responden()
    {
        $data = [
            'title' => 'Data Responden',
            'page' => 'responden',
        ];
        return view('dashboard/responden', $data);
    }
}
