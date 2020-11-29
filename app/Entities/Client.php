<?php

namespace App\Entities;

use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

class Client extends Entity
{
    // protected $id;
    // protected $nom;
    // protected $prenom;
    // protected $cni;
    // protected $sexe;

    // protected $adresse;
    // protected $telephone;
    // protected $created_at;
    // protected $update_at;
    protected $attributes = [
        'id' => null,
        'matricule' => null,        // Represents a username
        'nom' => null,
        'prenom' => null,
        'sexe' => null,
        'cni' => null,
        'adresse' => null,
        'telephone' => null,
        'created_at' => null,
        'updated_at' => null,
    ];



    public function setCreatedAt()
    {
        $this->attributes['created_at'] = date('Y-m-d');
        $this->attributes['updated_at'] = date('Y-m-d');

        return $this;
    }

    public function setUpdateAt()
    {
        $this->attributes['updated_at'] = date('Y-m-d');

        return $this;
    }

    public function getCreatedAt(string $format = 'Y-m-d H')
    {
        // Convert to CodeIgniter\I18n\Time object
        $this->attributes['created_at'] = $this->mutateDate($this->attributes['created_at']);

        $timezone = $this->timezone ?? app_timezone();

        //$this->attributes['created_at']->setTimezone($timezone);

    }
}
