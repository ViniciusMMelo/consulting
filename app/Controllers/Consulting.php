<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Consulting extends BaseController
{
    public function index()
    {
        return view("myConsulting");
    }
    public function newConsulting()
    {
        return view("newConsulting");
    }
}
