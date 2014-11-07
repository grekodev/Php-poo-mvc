<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    /*Problema:Confeccionar una clase CabeceraPagina que permita mostrar un título,
    indicarle si queremos que aparezca centrado, a derecha o izquierda.
    */
    class CabeceraPagina
    {
        private $titulo;
        private $ubicacion;

        public function cargarDatos($tit, $ubi)
        {
            $this->titulo=$tit;
            $this->ubicacion=$ubi;
        }

        public function graficar()
        {
            echo '<div style="font-size: 40px; text-align:'.$this->ubicacion.'">';
            echo $this->titulo;
            echo '</div>';
        }

    }

    $cabecera=new CabeceraPagina();
    $cabecera->cargarDatos('primera pagina','left');
    $cabecera->graficar();


?>

</body>
</html>