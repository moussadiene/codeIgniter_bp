<?php

namespace App\Models;

use CodeIgniter\Model;

class CompteModel extends Model
{
    protected $table         = 'compte';
    protected $allowedFields = [
        'id', 'client_id', 'numero', 'typeCompte', 'dateOuverture', 'rib', 'solde', 'agios',
        'renumeration', 'fraisOuverture', 'dateDebut', 'dateFin', 'created_at', 'updated_at'
    ];
    protected $returnType    = 'App\Entities\Compte';
    protected $useTimestamps = true;
}
