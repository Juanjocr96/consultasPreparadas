<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/formulario.css">
    <title></title>
  </head>
  <body>
    <h1>Guardar Puntuación</h1>
    <form method="POST">
      <div>
        <p>Ejemplo de consultas preparadas</p>
      </div>
      <input type="submit" name="guardar" value="Guardar">
    </form>
    <?php
			include_once 'procesos.php';

			$procesos = new Procesos;

			if(isset($_POST["guardar"])){
        $procesos->alta();
      }
		?>
  </body>
</html>
