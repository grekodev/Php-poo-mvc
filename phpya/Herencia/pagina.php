<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*
 * Ahora plantearemos el primer problema utilizando herencia en PHP. Supongamos que necesitamos implementar dos
 * clases que llamaremos Suma y Resta. Cada clase tiene como atributo $valor1, $valor2 y $resultado. Los métodos
 *  a definir son cargar1 (que inicializa el atributo $valor1), carga2
 * (que inicializa el atributo $valor2), operar (que en el caso de la clase "Suma" suma los dos atributos y en
 *  el caso de la clase "Resta" hace la diferencia entre $valor1 y $valor2, y otro método mostrarResultado.
Si analizamos ambas clases encontramos que muchos atributos y métodos son idénticos. En estos casos es
bueno definir una clase padre que agrupe dichos atributos y responsabilidades comunes.
La relación de herencia que podemos disponer para este problema es:

                                        Operacion

                        Suma                              Resta
Solamente el método operar es distinto para las clases Suma y Resta (esto hace que no lo podamos disponer en
la clase Operacion), luego los métodos cargar1, cargar2 y mostrarResultado son idénticos a las dos clases,
 esto hace que podamos disponerlos en la clase Operacion. Lo mismo los atributos $valor1, $valor2 y $resultado
se definirán en la clase padre Operacion.*/

class Operacion
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
        echo $this->resultado.'<br';
    }
}

class Suma extends Operacion
{
    public function operar()
    {
        $this->resultado=$this->valor1+$this->valor2;
    }
}


class Resta extends Operacion{
    public function operar()
    {
        $this->resultado=$this->valor1-$this->valor2;
    }
}
$suma=new Suma();
$suma->cargar1(10);
$suma->cargar2(10);
$suma->operar();
echo 'El resultado de la suma de 10+10 es:';
$suma->imprimirResultado();

$resta=new Resta();
$resta->cargar1(10);
$resta->cargar2(5);
$resta->operar();
echo 'El resultado de la diferencia de 10-5 es:';
$resta->imprimirResultado()

?>
</body>
</html>