<?php 
//esse tipo de construção de injeção de dependencia cra um padrão de qualidade;



interface MatematicaBasica{
    public function somar($x,$y);
}
class Basico1 implements MatematicaBasica{
    public function somar($x, $y){
        return $x + $y;
    }
}
class Basico2 implements MatematicaBasica{
    public function somar($x, $y){
        $res = $x;
        for ($q=0; $q < $y; $q++) { 
            $res++;
        }
        return $res;
    }
}
class Matematica{
    private $basico;
    public function __construct(MatematicaBasica $b)
    {
        $this->basico = $b;
    }

    public function somar($x, $y){
        return $this->basico->somar($x, $y);
    }
} 

//$basico = new Basico2();//instanciando
//$mat = new Matematica(new Basico2());
$mat = new Matematica(new Basico1());//a classe direto sem instancia;
echo $mat->somar(10,15);
?>