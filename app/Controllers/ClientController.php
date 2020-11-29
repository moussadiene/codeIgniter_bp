<?php

namespace App\Controllers;

use App\Entities\Client;
use App\Models\ClientModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use DateTime;

class ClientController extends BaseController
{
    public function index()
    {
        $clientModel = new ClientModel();

        $data['clients'] = $clientModel->findAll();

        return view('clients/index', $data);
    }

    public function save()
    {
        $clientModel = new ClientModel();

        $data = $this->request->getPost();


        $client = new Client();
        $client->fill($data);

        $client->setCreatedAt();
        $data['ok'] = $clientModel->save($client);
        $data['clients'] = $clientModel->findAll();


        return view('clients/index', $data);
    }

    public function ajoutClient()
    {
        return view('clients/ajout');
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
