<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // kalau belum login, redirect ke halaman login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Mohon login terlebih dahulu!');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // tidak dipakai untuk sekarang
    }
}
