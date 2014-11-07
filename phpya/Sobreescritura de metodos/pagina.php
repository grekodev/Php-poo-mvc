<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
class OperacionHerencia
{
    protected $valor1;
    protected $valor2;
    protected $resultado;

    public function cargar1($v1)
    {
        $this->valor1=$v1;
    }
    public function cargar2($v2)
    {
        $this->valor2=$v2;
    }
    public function imprimirResultado()
    {
        echo $this->resultado.'<br>';
    }

}

class suma extends OperacionHerencia{
    public function operar()
    {
        $this->resultado=$this->valor1+$this->valor2;
    }
    public function imprimirResultado(){
        echo 'La suma de '.$this->valor1. ' - '.$this->valor2. 'es=';
        parent::imprimirResultado();
    }
}
$suma=new suma();
$suma->cargar1(10);
$suma->cargar2(10);
$suma->operar();
$suma->imprimirResultado();

?>
</body>
</html>