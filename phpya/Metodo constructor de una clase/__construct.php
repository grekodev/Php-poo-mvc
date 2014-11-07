<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

class CabeceraPaginac
{
    private $titulo;
    private $align;

    public function __construct($tit, $ali)
    {
        $this->titulo = $tit;
        $this->align = $ali;
    }

    public function graficar()
    {
        echo '<div style="font-size:40px;text-align:' . $this->align . '">';
        echo $this->titulo;
        echo '</div>';

    }
}

$cabecera = new CabeceraPaginac('sabeee ahora entendi jaja', 'center');
$cabecera->graficar();



?>
</body>
</html>