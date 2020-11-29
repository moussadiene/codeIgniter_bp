<?php

namespace App\Controllers;

use App\Entities\Compte;
use App\Models\ClientModel;
use App\Models\CompteModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class CompteController extends BaseController
{
    public function index()
    {
        $clientModel = new ClientModel();

        $data['clients'] = $clientModel->findAll();

        $compteModel = new CompteModel();

        $data['comptes'] = $compteModel->findAll();

        return view('comptes/index', $data);
    }

    public function save()
    {
        $compteModel = new CompteModel();

        $data = $this->request->getPost();

        $compte = new Compte();

        $compte->fill($data);

        $compte->setCreatedAt();


        $data['ok'] = $compteModel->save($compte);


        $data['comptes'] = $compteModel->findAll();

        return view('comptes/index', $data);
    }

    public function ajoutCompte()
    {
        $clientModel = new ClientModel();

        $data['clients'] = $clientModel->findAll();

        return view('comptes/ajout', $data);
    }
    //---

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
