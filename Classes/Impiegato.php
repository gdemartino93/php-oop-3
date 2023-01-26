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
            // aggiungiamo il char Euro qui e non nell'html in caso dovesse essere vuoto il campo stipendio
            return $this-> stipendio -> getMensile() . " €";
            // se il campo è vuoto al posto dello stipendio in euro verrà inserito coem tirocinio
        } else return "tirocinio";
    }

    // funzione per generare stipendio annuale e in caso di tredicesima e quattordicesima aggiungerli allo stipendio annuale
    public function getStipendioAnnuale(){
        if (($this->stipendio-> getTredicesima()) && ( $this->stipendio -> getQuattordicesima())){
            return $this-> stipendio -> getMensile() * 12 + $this->stipendio ->getTredicesima() + $this->stipendio->getQuattordicesima();
        }
        elseif ( $this->stipendio ->getTredicesima()){
            return $this-> stipendio -> getMensile() * 12 + $this->stipendio ->getTredicesima();
        }
        elseif ( $this->stipendio ->getQuattordicesima()){
            return $this-> stipendio -> getMensile() * 12 + $this->stipendio ->getQuattordicesima();
        }elseif ($this-> stipendio ->getMensile() == null){
            return "no stipendio";
        } else return $this->stipendio -> getMensile() . " €";
        
    }
}


?>