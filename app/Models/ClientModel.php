<?php namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table         = 'clients';
    protected $allowedFields = [
        'id','matricule','nom', 'prenom', 'cni', 'adresse', 'telephone'
    ];
    protected $returnType    = 'App\Entities\Client';
    protected $useTimestamps = true;
}
