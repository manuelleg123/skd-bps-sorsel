<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthenticationController extends BaseController
{
    public function index()
    {
        //
        return view('login');
    }

    public function login()
    {
        return redirect()->to('/dashboard');
        // $validation = \Config\Services::validation();
        // $validation->setRules([
        //     'email' => 'required|valid_email',
        //     'password' => 'required|min_length[6]',
        // ]);

        // if (!$this->validate($validation->getRules())) {
        //     return redirect()->back()->withInput()->with('validation', $this->validator);
        // }

        // $email = $this->request->getPost('email');
        // $password = $this->request->getPost('password');

        // // Simulate a successful login
        // if ($email === '
    }

    public function logout()
    {
        // Simulate a logout
        // $this->session->destroy();
        return redirect()->to('/login');
    }
}
