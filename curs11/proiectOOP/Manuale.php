<?php
include ('Carti.php');

class Manuale extends Carti{
    
    public $calsa = 0;
    public $semestru = 1;
    public $nr_bucati = 1;
    
    //parent::__construct();
    
    public function __construct($cls, $sem){
        $this->calsa = $cls;
        $this->semestru = $sem;
    }
    
    
    // putem sa resciem metoda pret pentru a aplica un procent de reducere pentru comanda mai mare
    
}

