<?php

namespace App\Entities;

use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

class Compte extends Entity
{
    // protected $id;
    // protected $matricule;
    // protected $nom;
    // protected $prenom;
    // protected $cni;
    // protected $adresse;
    // protected $telephone;
    protected $attributes = [
        'id' => null,
        'client_id' => null,        // Represents a username
        'numero' => null,
        'typeCompte' => null,
        'dateOuverture' => null,
        'rib' => null,
        'solde' => null,
        'agios' => null,
        'solde' => null,
        'renumeration' => null,
        'fraisOuverture' => null,
        'dateDebut' => null,
        'dateFin' => null,
        'created_at' => null,
        'updated_at' => null,

    ];



    // public function setCreatedAt(string $dateString)
    // {
    //     $this->attributes['created_at'] = new Time($dateString, 'UTC');

    //     return $this;
    // }

    // public function getCreatedAt(string $format = 'Y-m-d H:i:s')
    // {
    //     // Convert to CodeIgniter\I18n\Time object
    //     $this->attributes['created_at'] = $this->mutateDate($this->attributes['created_at']);

    //     $timezone = $this->timezone ?? app_timezone();

    //     $this->attributes['created_at']->setTimezone($timezone);

    //     return $this->attributes['created_at']->format($format);
    // }

    public function setCreatedAt()
    {
        $this->attributes['created_at'] = date('Y-m-d');
        $this->attributes['updated_at'] = date('Y-m-d');
        $this->attributes['dateOuverture'] = date('Y-m-d');

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
