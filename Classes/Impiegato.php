<?php

class Impiegato extends Persona{

    public $dataAssunzione;
    public function __construct($nome,$cognome,$dataDiNascita,$cittaDiNascita,$cf,$dataAssunzione)
    {
        $this-> dataAssunzione = $dataAssunzione ;
        parent :: __construct($nome,$cognome,$dataDiNascita,$cittaDiNascita,$cf,$dataAssunzione);      
    }
    public function setDataAssunzione($dataAssunzione){
        $this -> dataAssunzione = $dataAssunzione;
    }
    public function getDataAssunzione(){
        return $this-> dataAssunzione;
    }
}


?>