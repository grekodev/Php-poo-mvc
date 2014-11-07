<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*
 * Confeccionar una clase Persona que tenga como atributos el nombre y la edad.
 * Definir como responsabilidades un método que cargue los datos personales y otro que los imprima.

Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo
sueldo y los métodos de cargar el sueldo e imprimir su sueldo.

Definir un objeto de la clase Persona y llamar a sus métodos. También crear un objeto de
la clase Empleado y llamar a sus métodos.
 * */
class Persona
{
    protected $nombre;
    protected $edad;

    public function cargaPersona($nom, $edad)
    {
        $this->nombre=$nom;
        $this->edad=$edad;
    }

    public function imprimirDatos()
    {
        echo $this->nombre . ' tienes ' .$this->edad.' años';
    }
}
class Empleado extends Persona
{
    private $sueldo;

    public function cargaEmpleado($sue)
    {
        $this->sueldo=$sue;
    }
    public function imprimirEmpleado()
    {
        echo ' y Tu sueldo es ='.$this->sueldo;
    }
}
$empleado=new Empleado();
$empleado->cargaPersona('brayan',23);
$empleado->cargaEmpleado(2000);
$empleado->imprimirDatos();
$empleado->imprimirEmpleado();
?>
</body>
</html>