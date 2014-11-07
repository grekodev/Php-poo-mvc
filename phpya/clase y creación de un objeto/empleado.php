<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    class Employee
    {
        private $nombre;
        private $sueldo;

        public function iniciar($nom , $suel)
        {
            $this->nombre=$nom;
            $this->sueldo=$suel;
            $this->imprimir();
        }
        public function imprimir()
        {
            echo $this->nombre;
            if($this->sueldo > 3000)
            {
                echo $this->sueldo. ' Su sueldo es mayor a 3000 usted debe pagar impuesto';
            }else{
                exit($this->sueldo.' No pagas impuesto');
            }

        }


    }
$sabe = new Employee();
$sabe->iniciar('brayan',4000);



?>
</body>
</html>