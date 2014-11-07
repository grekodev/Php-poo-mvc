<!doctype html>
<html lang="ES_es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
    /* Implementar una clase que muestre una lista de hipervínculos en forma horizontal
    (básicamente un menú de opciones)
     * */
        class Menu
        {
            private $enlaces=array();
            private $titulos=array();

            public function cargarOpcion($enla, $titu)
            {
              $this->enlaces[]=$enla;
                $this->titulos[]=$titu;

            }
            public function mostrar()
            {
                for($f=0 ; $f<count($this->enlaces); $f++)
                {
                    echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
                    echo "-";
                }
            }
        }

    $menu=new Menu();
    $menu->cargarOpcion('www.google.com','google');
    $menu->cargarOpcion('fb.com','facebook');
    $menu->cargarOpcion('twitter.com','twitter');
    $menu->mostrar();

    ?>
</body>
</html>