<?php

namespace App\Controllers;

use App\Models\CompteModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class CompteController extends BaseController
{
    public function index()
    {
        $comptedao = new CompteModel();
        
        $data = $comptedao->findAll();
        return view('comptes/index', $data);
    } 

    //--------------------------------------------------------------------

    public function save(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }

    //--------------------------------------------------------------------
    public function update(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }

    //--------------------------------------------------------------------
    public function delete(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
