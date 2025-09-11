<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

class AuthenticationController extends BaseController
{
    protected $Users;

    public function __construct()
    {
        $this->Users = new Users();
        helper(['form', 'url']);
    }

    public function index()
    {
        return view('login');
    }

    public function attemptLogin()
    {
        $session = session();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->Users->where('email', $email)->first();

        if ($user && password_verify($password, $user['password_hash'])) {
            $session->set([
                'user_id' => $user['id'],
                'email' => $user['email'],
                'full_name' => $user['full_name'],
                'logged_in' => true,
            ]);
            return redirect()->to('/dashboard');
        } else {
            session()->setFlashdata('email', $email);
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
