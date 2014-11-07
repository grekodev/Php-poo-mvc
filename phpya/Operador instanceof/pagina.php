<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

abstract class Trabajador
{
    protected $nombre;
    protected $sueldo;

    public function __construct($no,$su)
    {
        $this->nombre=$no;
        $this->sueldo=$su;

    }
    public function retornarSueldo()
    {
        return $this->sueldo;
    }


}

class Empleados extends Trabajador {
}

class Gerentes extends Trabajador {
}

$vec[]=new Empleados('brayan',12);
$vec[]=new Empleados('ana',212);
$vec[]=new Empleados('liz',1212);

$vec[]=new Gerentes('gerente1',12);
$vec[]=new Gerentes('gerente2',212);
$vec[]=new Gerentes('pastor',1212);

for($f=0;$f<count($vec);$f++)

{
    if ($vec[$f] instanceof Empleados)
        $suma1=$suma1+$vec[$f]->retornarSueldo();
    else
        if ($vec[$f] instanceof Gerentes)
            $suma2=$suma2+$vec[$f]->retornarSueldo();
}
echo 'Gastos en sueldos de Empleados:'.$suma1.'<br>';
echo 'Gastos en sueldos de Gerentes:'.$suma2.'<br>';





?>
</body>
</html>