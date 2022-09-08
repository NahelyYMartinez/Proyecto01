<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=decive-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <title>Iniciar - Sesion</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-svg" href="img/icono.svg">
</head>
<body>
<?php include("../voz.php")?>

	<form class="login" action="registrar.php" method="post" name="login" enctype="multipart/form-data" >
        <h2>Registrarse</h2>
        <img src="img/icono.svg">
        <input type="text" name="nom_paciente"placeholder="nombre" class="bordes" autofocus/>
        <input type="text" name="ap_paciente" placeholder="apellidos" class="bordes"/>
        <input type="number" name="ci_paciente"placeholder="Ci" class="bordes" autofocus/>
        <input type="number" name="edad_paciente" placeholder="Edad" class="bordes"/>
        <input type="text" name="genero_paciente"placeholder="genero" class="bordes" autofocus/>
        <input type="number" name="telefono_paciente" placeholder="telefono" class="bordes"/>
        <input type="file" accept="image/*" name="foto_paciente" class="bordes"/>
        <input type="email" name="correo_paciente"placeholder="correo" class="bordes" autofocus/>
        <input type="password" name="contraseña_paciente"placeholder="contraseña" class="bordes" autofocus/>
        <button type="submit" name="btnagregar" id="btnagregar" >Registrar</button>
   

        <?php  if(!empty($errores)): ?>
          <ul>
              <?php echo $errores; ?>
          </ul>
        <?php  endif; ?>
      </form>
      <script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.sidenav');
var instances = M.Sidenav.init(elems);
});
</script>
</body>
</html>