<?php

namespace App\Controllers;

use App\Models\Login_model;

class Login extends BaseController
{
    public function index()
    {
        return view('login/v_login');
    }
    public function auth()
    {
        $usersModel = new Login_model();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $usersModel->where('admin_id', $username)->first();

        echo $user;
        // if (empty($user)) {
        //     session()->setFlashdata('message', 'Username atau Password Salah');
        //     return redirect()->to('/login');
        // }
        // if ($user['admin_password'] != $password) {
        //     session()->setFlashdata('message', 'Username atau Password Salah');
        //     return redirect()->to('/login');
        // }
        // session()->set('admin_id', $username);
        // return redirect()->to('/layout');
    }
    public function logout()
    {
        session()->remove('username');
        return redirect()->to('/login');
    }
}
