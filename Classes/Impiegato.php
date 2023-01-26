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
        if ($this->stipendio ->getMensile()){
            return $this-> stipendio -> getMensile();
        } else return "tirocinio";
    }
    public function getStipendioAnnuale(){
        if (($this->stipendio-> getTredicesima()) && ( $this->stipendio -> getQuattordicesima())){
            return $this-> stipendio -> getMensile() * 12 + $this->stipendio ->getTredicesima() + $this->stipendio->getQuattordicesima();
        }
        elseif ( $this->stipendio ->getTredicesima()){
            return $this-> stipendio -> getMensile() * 12 + $this->stipendio ->getTredicesima();
        }
        elseif ( $this->stipendio ->getQuattordicesima()){
            return $this-> stipendio -> getMensile() * 12 + $this->stipendio ->getQuattordicesima();
        }else return $this->stipendio -> getMensile();
        
    }
}


?>