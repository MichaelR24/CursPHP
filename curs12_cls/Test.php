<?php
class Test
{

    public $nr_test = 0;
    protected $nota;
    private $rezolvare;
    const PUNCT_OFICIU = 1;

    public function __construct(){
        echo "Incepe testul";
    }

    // public function __set($nume, $valoare){
    //     echo "Proprietatea {$nume} cautata nu exista {$valoare}";
    //     return 0;
    // }

     function getNota()
    {
        if (isset($this->nota) && $this->nota >= 1 && $this->nota <= 10) {
            return $this->nota;
        }
        return 0;
    }
     function setNota($n)
    {
        if (isset($n) && $n >= 1 && $n <= 9) {

            $this->nota = $n + self::PUNCT_OFICIU;
        }
    }

    /**
     * Get the value of rezolvare
     */ 
    public function getRezolvare()
    {
        return $this->rezolvare;
    }

    /**
     * Set the value of rezolvare
     *
     * @return  self
     */ 
    public function setRezolvare($rezolvare)
    {
        $this->rezolvare = $rezolvare;

        return $this;
    }
}

$test1 = new Test();
$test2 = new Test();
var_dump($test1);
var_dump($test2);
$test1->nr_test = 2;
//$test1->nota = 10;
// $test1->setNota(9);
// echo $test1->getNota();
// echo $test1->teza ;
