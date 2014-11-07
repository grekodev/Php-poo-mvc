<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*
 * Confeccionar una clase Tabla que permita indicarle en el constructor la cantidad de filas y columnas.
 *  Definir otra responsabilidad que podamos cargar un dato
 * en una determinada fila y columna. Finalmente debe mostrar los datos en una tabla HTML.
 * */
class Tabla
{
    private $cantfilas;
    private $cantcolumnas;
    private $mat=array();

    public function __construct($fi, $co)
    {
        $this->cantfilas=$fi;
        $this->cantcolumnas=$co;
    }
    public function cargar($fila, $columnas,$valor)
    {
        $this->mat[$fila][$columnas]=$valor;


    }

    public function inicioTabla()
    {
        echo '<table border="1">';
    }

    public function inicioFila()
    {
        echo '<tr>';
    }
    public function mostrar($fi,$co)
    {
        echo '<td>'.$this->mat[$fi][$co].'</td>';
    }

    public function finFila()
    {
        echo '</tr>';
    }

    public function finTabla()
    {
        echo '</table>';
    }

    public function graficar()
    {
        $this->inicioTabla();
        for($f=1 ; $f<=$this->cantfilas; $f++)
        {
            $this->inicioFila();
            for($c=1 ; $c<=$this->cantcolumnas; $c++)
            {
                $this->mostrar($f,$c);
            }
            $this->finFila();
        }
        $this->finTabla();
    }


}

$tabla1=new Tabla(2,3);
$tabla1->cargar(1,1,"1");
$tabla1->cargar(1,2,"2");
$tabla1->cargar(1,3,"9");
$tabla1->cargar(2,1,"4");
$tabla1->cargar(2,2,"5");
$tabla1->cargar(2,3,"6");
$tabla1->graficar();



?>
</body>
</html>