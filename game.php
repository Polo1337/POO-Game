<?php

class Humain
{
    private $_nom;
    private $_vie;
    private $_force;
    private $_degats;


    //  Init de la class

    public function __construct($nom)
    {
        echo 'Le construct a bien été crée ! <br>';
        $this->_nom = $nom;
        $this->_vie = 100;
        $this->_force = 10;
        $this->_degats = 0;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getVie()
    {
        return $this->_vie;
    }

    public function getForce()
    {
        return $this->_force;
    }

    public function getDegat()
    {
        return $this->_degat;
    }

    public function parler()
    {
        echo 'test <br>';
    }
}
