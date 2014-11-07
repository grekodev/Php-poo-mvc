<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    /*
     * Confeccionar una clase CabeceraPagina que permita mostrar un título, indicarle si queremos que
     *  aparezca centrado, a derecha o izquierda, además permitir definir el color de fondo y de la fuente.*/
        class CabeceraPagina2
        {
            private $titulo;
            private $align;
            private $background;
            private $color;

            public function cargarCabecera($ti, $alig , $back, $colo)
            {
                $this->titulo=$ti;
                $this->align=$alig;
                $this->background=$back;
                $this->color=$colo;
            }

            public function graficarcabecera()
            {
                echo '<div style="text-align:'.$this->align.'; background:'.$this->background.'; color:'.$this->color.';" >';
                echo $this->titulo;
                echo '</div>';
            }
        }
        $cabe2=new CabeceraPagina2();
        $cabe2->cargarCabecera('pagina 2','center','red','white');
        $cabe2->graficarcabecera();

    ?>
</body>
</html>