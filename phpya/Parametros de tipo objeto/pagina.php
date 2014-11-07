<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*
 * Vamos a desarrollar un problema que utilice esta característica. Plantearemos una clase Opcion y otra clase
 *  Menu. La clase Opcion definirá como atributos el titulo,
 *  enlace y color de fondo, los métodos a implementar serán el constructor y el graficar.
Por otro lado la clase Menu administrará un array de objetos de la clase Opcion e implementará
un métodos para insertar objetos de la clase Menu y otro para graficar. Al constructor de la clase
Menu se le indicará si queremos el menú en forma 'horizontal' o 'vertical'.*/

class opcion
{
    private $titulo;
    private $enlace;
    private $colorFondo;

    public function __construct($ti, $en , $colo)
    {
        $this->titulo=$ti;
        $this->enlace=$en;
        $this->colorFondo=$colo;
    }

    public function graficar()
    {
        echo '<a style="background-color: '.$this->colorFondo.'; href="'.$this->enlace.'">'.$this->titulo.'</a>';
    }

}

class Menu
{

    private $opciones=array();
    private $direccion;

    public function __construct($dir)
    {
        $this->direccion=$dir;
    }

    public function insertar($op)
    {
        $this->opciones[]=$op;
    }

    private function graficarHorizontal()
    {
        for($f=0; $f<count($this->opciones); $f++){
            $this->opciones[$f]->graficar();
        }
    }
    private function graficarVertical()
    {
        for($f=0;$f<count($this->opciones);$f++)
        {
            $this->opciones[$f]->graficar();
            echo '<br>';
        }
    }
    public function graficar()
    {
        if (strtolower($this->direccion)=="horizontal")
            $this->graficarHorizontal();
        else
            if (strtolower($this->direccion)=="vertical")
                $this->graficarVertical();
    }

}
$menu1=new Menu('horizontal');
$opcion1=new Opcion('Google','http://www.google.com','#C3D9FF');
$menu1->insertar($opcion1);
$opcion2=new Opcion('Yahoo','http://www.yahoo.com','#CDEB8B');
$menu1->insertar($opcion2);
$opcion3=new Opcion('MSN','http://www.msn.com','#C3D9FF');
$menu1->insertar($opcion3);
$menu1->graficar();

?>
</body>
</html>