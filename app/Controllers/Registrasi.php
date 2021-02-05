<?php

namespace App\Controllers;

use App\Models\Registrasi_model;

class Registrasi extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [
            'validation' => \config\Services::validation()
        ];
        echo view('registrasi/v_registrasi', $data);
    }
    public function save()
    {
        $rules = [
            'email' => 'required|valid_email|is_unique[table_users.user_email]',
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[3]',
            'confirmpassword' => 'required|matches[password]'
        ];
        if ($this->validate($rules)) {
            $model = new Registrasi_model();
            $data = [
                'user_email' => $this->request->getVar('email'),
                'user_name' => $this->request->getVar('username'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->simpan($data);
            return redirect()->to('/login/auth');
        } else {
            $data['validation'] = $this->validator;
            echo view('registrasi/v_registrasi', $data);
        }
    }
}
