<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormController extends BaseController
{
    public function index()
    {
        //
        return view('form_layout/main');
    }

    public function form1()
    {
        return view('form_layout/form1');
    }
}
