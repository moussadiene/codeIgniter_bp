<?php namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class CompteController extends BaseController
{
	public function index()
	{
		return view('comptes/index');
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
