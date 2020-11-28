<?php namespace App\Entities;

use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

class Client extends Entity
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

    public function __get($key)
    {
        if (property_exists($this, $key))
        {
            return $this->$key;
        }
    }

    public function __set($key, $value)
    {
        if (property_exists($this, $key))
        {
            $this->$key = $value;
        }
    }

    public function setCreatedAt(string $dateString)
    {
        $this->attributes['created_at'] = new Time($dateString, 'UTC');

        return $this;
    }

    public function getCreatedAt(string $format = 'Y-m-d H:i:s')
    {
        // Convert to CodeIgniter\I18n\Time object
        $this->attributes['created_at'] = $this->mutateDate($this->attributes['created_at']);

        $timezone = $this->timezone ?? app_timezone();

        $this->attributes['created_at']->setTimezone($timezone);

        return $this->attributes['created_at']->format($format);
    }
}