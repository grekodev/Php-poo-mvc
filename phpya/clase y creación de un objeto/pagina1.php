<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>pagina1</title>
</head>
<body>
	<?php
		class Persona 
		{
			public $nombre;
			public function inicializar($nom)
			{
				$this->nombre=$nom;

			}
			public function imprimir()
			{
				echo $this->nombre;
                echo '<br>';

			}
		}

    $per1=new Persona();
    $per1->inicializar('brayan');
    $per1->imprimir();

    $per2=new Persona();
    $per2->inicializar('juan');
    $per2->imprimir();


	?>

</body>
</html>