<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    protected $baseView = "admin/";
    public function users()
    {
        return view($this->baseView . 'manager_users');
    }

    public function consulting()
    {
        return view($this->baseView . 'manager_consulting');
    }
}
