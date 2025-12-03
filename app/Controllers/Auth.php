<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        //
    }

    public function login()
    {
        return view("/login");
    }

    public function logout()
    {
        return redirect()->to("/login");
    }

    public function auth_login()
    {
        $usuario = $this->request->getPost();
        if ($this->verificar_usuario($usuario)){
            return redirect()->to("/myConsulting");
        } else {
            return redirect()->to("/login");
        }
    }
    public function verificar_usuario($user){
        $session = session();

        if ($user["email"] == "admin@admin.com") {
            $user["id"] = 1;
            $user["name"] = "Admin";
            $user["perfil"] = 1;
        } else {
            $user["id"] = 2;
            $user["name"] = "";
            $user["perfil"] = 2;
        }
        $session->set([
            'user_id' => $user["id"],
            'user_name' => $user['name'],
            'logged_in' => true,
            'perfil_acesso' => $user["perfil"]
        ]);
        return true;
    }

}
