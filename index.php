<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/formulario.css">
    <title></title>
  </head>
  <body>
    <h1>Consultas preparadas</h1>
    <form method="POST">
      <div>
        <p>Ejemplo de get_result</p>
      </div>
      <input type="submit" name="consulta" value="Consultar">
    </form>
    <?php
			include_once 'procesos.php';

			$procesos = new Procesos;

			if(isset($_POST["consulta"])){
        $procesos->consulta();
      }
		?>
  </body>
</html>
