<?php
include_once __DIR__ ."/Impiegato.php";
class Stipendio extends Impiegato{
    public $mensile;
    public $tredicesima;
    public $quattordicesima;

    public function __construct($nome,$cognome,$dataDiNascita,$cittaDiNascita,$cf,$dataAssunzione,$mensile,$tredicesima,$quattordicesima)
    {
        $this -> mensile = $mensile;
        $this -> tredicesima = $tredicesima;
        $this -> quattordicesima = $quattordicesima;
        parent :: __construct($nome,$cognome,$dataDiNascita,$cittaDiNascita,$cf,$dataAssunzione,$mensile,$tredicesima,$quattordicesima);
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

    // public function getStipendioAnnuale($mensile,$tredicesima,$quattordicesima){
    //     $stipendioAnnuale = ($mensile * 12) + $tredicesima + $quattordicesima;
    //     return $stipendioAnnuale;
    // }

}






?>