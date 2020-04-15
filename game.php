<?php

class Perso
{
    private $_nomPerso;
    private $_viePerso;
    private $_degatsPerso;


    //  Init de la class

    public function __construct($nomPerso, $viePerso, $degatsPerso)
    {
        echo 'Le construct a bien été crée ! <br>';
        $this->_nomPerso = $nomPerso;
        $this->_viePerso = $viePerso;
        $this->_degatsPerso = $degatsPerso;
    }

    public function getNom()
    {
        return $this->_nomPerso;
    }

    public function getVie()
    {
        return $this->_viePerso;
    }

    public function getDegat()
    {
        return $this->_degatsPerso;
    }

    public function setLife($x)
    {
        $this->_viePerso = $x;
    }

    public function frapperAdversaire($adversaire)
    {
        $lifeEnnemis = $adversaire->getVie();
        $lifeEnnemis = $lifeEnnemis - $this->_degatsPerso;
        $adversaire->setLife($lifeEnnemis);
        echo $this->_nomPerso . " a attaqué " . $adversaire->getNom();
    }

    public function afficher()
    {
        echo $this->nomPerso . " a encore " . $this->_viePerso . "point de vie <br>";
    }
}
