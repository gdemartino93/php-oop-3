<?php
class Capo extends Persona{
    private $dividendo;
    private $bonus;

    public function __construct($nome,$cognome,$dataDiNascita,$cittaDiNascita,$cf,$dividendo,$bonus){
        $this-> dividendo = $dividendo;
        $this-> bonus = $bonus;
        parent :: __construct($nome,$cognome,$dataDiNascita,$cittaDiNascita,$cf,$dividendo,$bonus);      
    }
    public function setDividendo($dividendo){
        $this-> dividendo = $dividendo;
    }
    public function getDividendo(){
        return $this->dividendo;
    }
    public function setBonus($bonus){
        $this-> $bonus = $bonus;
    }
    public function getBonus(){
        return $this-> bonus;
    }
    public function redditoAnnuale($dividendo,$bonus){
        return $this-> $dividendo * 12 + $bonus;
    }
}




?>