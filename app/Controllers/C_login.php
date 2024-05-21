<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class C_login extends BaseController
{
    public function login()
    {
        return view("v_login");
    }

    public function loginProcess()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new UserModel();
        $user = $model->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $session = session();
            // Set session data, you can customize the session data as needed
            $session->set([
                'id' => $user['id'],
                'email' => $user['email'],
                'logged_in' => true,
            ]);

            return redirect()->to(base_url('/Barang'));
        }

        return redirect()->to(base_url('/login'))->withInput()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('/'));
    }
}
