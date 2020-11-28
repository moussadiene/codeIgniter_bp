<?php namespace App\Controllers;

use App\Entities\Client;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class ClientController extends BaseController
{
	public function index()
	{
		return view('clients/index');
	}

    public function save(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $data = $this->request->getPost();

        $user = new Client();
        $user->fill($data);
       // $userModel->save($user);
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
	//--------------------------------------------------------------------

}
