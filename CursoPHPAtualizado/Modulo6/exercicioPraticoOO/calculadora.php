<?php 
class Calculadora{
    private float $n_total;
    function __construct()
    {
        $this->n_total = 0;
    }

    public function add($x){
        $this->n_total += $x;
    }
    public function sub($x){
        $this->n_total -= $x;
        
    }
    public function mul($x){
        $this->n_total *= $x;
        
    }
    public function div($x){
        $this->n_total /= $x;
        
    }
    public function total(){
        return $this->n_total;

    }
    public function clear(){
        $this->n_total = 0;
        return $this->n_total;
    }
    
}
?>