<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

class UsersController extends BaseController
{
    protected $Users;

    public function __construct()
    {
        $this->Users = new Users();
    }

    public function index()
    {
    }

    public function getAllUsers()
    {
        return $this->response->setJSON($this->Users->getAllUsers());
    }

    public function createUser()
    {
        if (!session()->get('logged_in')) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Unauthorized access.'
            ])->setStatusCode(401);
        }
        
        $data = $this->request->getPost();
        $validation = \Config\Services::validation();
        $validation->setRules([
            'full_name' => 'required|max_length[100]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
        ], [
            'full_name' => [
                'required' => 'Full name is required.',
                'max_length' => 'Full name cannot exceed 100 characters.'
            ],
            'email' => [
                'required' => 'Email is required.',
                'valid_email' => 'Please provide a valid email address.',
                'is_unique' => 'This email is already registered.'
            ],
            'password' => [
                'required' => 'Password is required.',
                'min_length' => 'Password must be at least 6 characters long.'
            ],
        ]);

        if (!$validation->run($data)) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors(),
                'message' => 'Validation failed.'
            ])->setStatusCode(400);
        }

        // Validate and create user
        if ($this->Users->createUser($data)) {
            return $this->response->setJSON([
                'success' => true,
                'message' => 'User created successfully.'
            ]);
        }

        return $this->response->setJSON([
            'success' => false,
            'message' => 'Failed to create user.'
        ])->setStatusCode(500);
    }

    public function deleteUser($id): ResponseInterface
    {
        if (!session()->get('logged_in')) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Unauthorized access.'
            ])->setStatusCode(401);
        }

        try {
            $this->Users->delete($id);

            return $this->response->setJSON([
                'success' => true,
                'message' => 'User deleted successfully.'
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'An error occurred while deleting the user.'
            ])->setStatusCode(500);
        }
    }
}
