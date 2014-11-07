<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*
 * Crearemos nuevamente la clase
 * CabeceraDePagina que nos muestre un título alineado con un determinado color de fuente y fondo.*/
class CabeceradePagina
{
    private $titulo;
    private $align;
    private $color;
    private $background;

    public function __construct($ti, $ali='center', $col='#ffffff', $back='#000000')
    {
        $this->titulo=$ti;
        $this->align=$ali;
        $this->color=$col;
        $this->background=$back;
    }

    public function graficar()
    {
        echo '<div style="font-size:40px;text-align:'.$this->align.';color:';
        echo $this->color.';background-color:'.$this->background.'">';
        echo $this->titulo;
        echo '</div>';
    }
}
$cabecera1=new CabeceradePagina('El blog del programador');
$cabecera1->graficar();
echo '<br>';
$cabecera2=new CabeceradePagina('El blog del programador','left');
$cabecera2->graficar();
echo '<br>';

$cabecera3=new CabeceradePagina('El blog del programador','right','#ff0000');
$cabecera3->graficar();
echo '<br>';
$cabecera4=new CabeceradePagina('El blog del programador','right','#ff0000','#ffff00');
$cabecera4->graficar();
?>
</body>
</html>