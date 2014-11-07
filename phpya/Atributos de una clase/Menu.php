<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        /*Confeccionar una clase Menu. Permitir añadir la cantidad de opciones que necesitemos.
        Mostrar el menú en forma horizontal o vertical (según que método llamemos.
         * */
        class Menu
        {
            private $enlaces=array();
            private $titulos=array();

            public function cargarOpciones($enlaces,$titulo)
            {
                $this->enlaces[]=$enlaces;
                $this->titulos[]=$titulo;
            }

            public function mostrarVertical()
            {
                for($i=0 ; $i<count($this->enlaces) ; $i++)
                {
                    echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
                    echo '<br>';
                }
            }

            public function mostrarHorizontal()
            {
                for($i=0 ; $i<count($this->enlaces) ; $i++)
                {
                    echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
                    echo "-";
                }
            }

        }

        $menus= new Menu();
        $menus->cargarOpciones('coman.com','sabes.com');
        $menus->cargarOpciones('coman.com','qqqq.com');
        $menus->mostrarHorizontal();
    ?>
</body>
</html>