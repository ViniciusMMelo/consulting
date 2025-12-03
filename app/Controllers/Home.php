<?php

namespace App\Controllers;

use CodeIgniter\HTTP\URI;

class Home extends BaseController
{
    public function index()
    {
        return redirect()->to("/login");
    }
}
