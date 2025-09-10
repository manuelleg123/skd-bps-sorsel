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
