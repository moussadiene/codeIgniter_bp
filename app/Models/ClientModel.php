<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table         = 'client';
    protected $allowedFields = [
        'id', 'nom', 'prenom', 'sexe', 'cni', 'adresse', 'telephone','created_at','updated_at'
    ];
    protected $returnType    = 'App\Entities\Client';
    protected $useTimestamps = true;
}
