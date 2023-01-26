<?php

class Stipendio {
    private $mensile;
    private $tredicesima;
    private $quattordicesima;

    public function __construct($mensile,$tredicesima,$quattordicesima)
    {
        $this -> mensile = $mensile;
        $this -> tredicesima = $tredicesima;
        $this -> quattordicesima = $quattordicesima;
    }
    public function setMensile($mensile){
        $this-> mensile = $mensile;
    }
    public function getMensile(){
        return $this-> mensile;
    }
    public function setTredicesima($tredicesima){
        $this-> tredicesima = $tredicesima;
    }
    public function getTredicesima(){
        return $this-> tredicesima;
    }
    public function setQuattordicesima($quattordicesima){
        $this-> quattordicesima = $quattordicesima;
    }
    public function getQuattordicesima(){
        return $this-> quattordicesima;
    }

    public function getStipendioAnnuale(){
        $stipendioAnnuale = ($this->getMensile() * 12) + $this->getTredicesima() + $this->getQuattordicesima();
        return $stipendioAnnuale;
    }

}






?>