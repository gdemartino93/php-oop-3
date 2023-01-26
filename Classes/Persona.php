<?php

class Persona{
    private $nome;
    private $cognome;
    private $dataDiNascita;
    private $cittaDiNascita;
    private $cf;

    public function __construct($nome,$cognome,$dataDiNascita,$cittaDiNascita,$cf)
    {
        $this -> nome = $nome;
        $this -> cognome = $cognome;
        $this ->dataDiNascita = $dataDiNascita;
        $this ->cittaDiNascita = $cittaDiNascita;
        $this ->cf = $cf;
    }
    public function setNome($nome){
        $this-> nome = $nome;
    }
    public function getNome(){
        return $this-> nome;
    }
    public function setCognome($cognome){
        $this-> cognome = $cognome;
    }
    public function getCognome(){
        return $this-> cognome;
    }
    public function setDataDiNascita($dataDiNascita){
        $this-> dataDiNascita = $dataDiNascita;
    }
    public function getDataDiNascita(){
        return $this-> dataDiNascita;
    }
    public function setCittaDiNascita($cittaDiNascita){
        $this-> cittaDiNascita = $cittaDiNascita;
    }
    public function getCittaDiNascita(){
        return $this-> cittaDiNascita;
    }
    public function setCf($cf){
        $this-> cf = $cf;
    }
    public function getCf(){
        return $this-> cf;
    }

    
}




?>