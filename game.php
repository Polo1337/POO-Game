<?php

class Perso
{
    private $_nomPerso;
    private $_viePerso;
    private $_degatsPerso;


    //  Init de la class

    public function __construct($nomPerso)
    {
        $this->_nomPerso = $nomPerso;
        $this->_viePerso = rand(90, 100);
        $this->_degatsPerso = rand(5, 10);
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

    public function affiche()
    {
        echo ("<center>======================================<br>");
        echo ("Personnage Crée du nom de : " . $this->_nomPerso . " <br><br> Ses Caractéristiques sont : <br>");
        echo ("- Nombre de Point D'attaque : " . $this->_degatsPerso . "<br>");
        echo ("- Nombre de Point de Vie : " . $this->_viePerso . "<br>");
        echo ("======================================<br></center>");
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
        echo $this->_nomPerso . " a encore " . $this->_viePerso . "point de vie <br>";
    }
}
