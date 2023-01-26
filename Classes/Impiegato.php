<?php

class Impiegato extends Persona{
    private $stipendio;
    private $dataAssunzione;
    public function __construct($nome,$cognome,$dataDiNascita,$cittaDiNascita,$cf,$dataAssunzione, $stipendio)
    {
        $this-> dataAssunzione = $dataAssunzione ;
        $this-> stipendio = $stipendio ;
        
        parent :: __construct($nome,$cognome,$dataDiNascita,$cittaDiNascita,$cf,$dataAssunzione);      
    }
    public function setDataAssunzione($dataAssunzione){
        $this -> dataAssunzione = $dataAssunzione;
    }
    public function getDataAssunzione(){
        return $this-> dataAssunzione;
    }
    public function getStipendioMensile(){
        return $this-> stipendio -> getMensile();
    }
    public function getStipendioAnnuale(){
        return $this-> stipendio -> getMensile() * 12;
    }
}


?>