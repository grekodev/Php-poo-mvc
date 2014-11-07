<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    class Cabecera{
        private $titulo;
        public function __construct($titu)
        {
            $this->titulo=$titu;
        }
        public function graficar()
        {
            echo '<h1 style="text-align: center;">'.$this->titulo.'</h1>';

        }
    }

    class Cuerpo
    {
        private $lineas=array();

        public function isertarParrafo($li)
        {
            $this->lineas[]=$li;
        }

        public function graficar()
        {
            for($f=0; $f<count($this->lineas); $f++)
            {
                echo '<p>'.$this->lineas[$f].'</p>';
            }
        }

    }

        class pie
        {
            private $titulo;

            public function __construct($ti)
            {
                $this->titulo=$ti;
            }
            public function graficar()
            {
                echo '<h4 style="text-align:left">'.$this->titulo.'</h4>';
            }
        }

class Pagina
{
    private $cabecera;
    private $cuerpo;
    private $pie;

    public function __construct($texto1, $texto2)
    {
        $this->cabecera=new Cabecera($texto1);
        $this->cuerpo=new Cuerpo();
        $this->pie=new pie($texto2);

    }
    public function insertarCuerpo($texto)
    {
        $this->cuerpo->isertarParrafo($texto);

    }
    public function graficar()
    {
        $this->cabecera->graficar();
        $this->cuerpo->graficar();
        $this->pie->graficar();
    }

}

$pagina1=new Pagina('primera pagina', 'pie es un parrafo');
$pagina1->insertarCuerpo('haber diceeeeee aparece pss ');
$pagina1->insertarCuerpo('haber diceeeeee aparece pss ');
$pagina1->insertarCuerpo('haber diceeeeee aparece pss ');
$pagina1->graficar();
?>
</body>
</html>