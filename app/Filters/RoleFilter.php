<?php 

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    protected $allowedRoles;

    public function __construct(array $roles = [])
    {
        $this->allowedRoles = $roles;
    }

    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $role = $session->get('perfil_acesso');

        if (!in_array($role, $arguments)) {
            return redirect()->to('/unauthorized');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // nada
    }
}
