<?php

session_start();

if(isset($_POST)){

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];	
//$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","12345","tienda");

// SELECT `alumno`.`Usuario`, `alumno`.`Password`, `docentes`.`Usuario`, `docentes`.`Password`, `estudiante`.`Usuario`, `estudiante`.`Password`
// FROM `alumno`
// 	, `docentes`
// 	, `estudiante`;


// $consulta="SELECT *FROM 
//                     alumno where Usuario='$usuario' and Password='$contraseña', 
//                     docentes where Usuario='$usuario' and Password='$contraseña',  
//                     estudiante where Usuario='$usuario' and Password='$contraseña'";


// $consulta="SELECT *FROM docentes where Usuario='$usuario' and Password='$contraseña'
//             UNION SELECT *FROM estudiante where Usuario='$usuario' and Password='$contraseña'";


$consulta="SELECT nombre, contraseña FROM usuario where nombre='$usuario' and contraseña='$contraseña'";
//            UNION ALL SELECT usuario, contraseña, tipo_usuario FROM t_docente where usuario='$usuario' and contraseña='$contraseña'
//            UNION ALL SELECT usuario, contraseña, tipo_usuario FROM t_alumno where usuario='$usuario' and contraseña='$contraseña'";


// $_SESSION['Usuario'] = $Usuariosi;
// $_SESSION['Usuario'] = $row['Usuario'];


$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);
$_SESSION['nombre']=$usuario;

if($filas){
    header("location:dash.html");
}
else{
        header("location:VDoc_AsigActividad.php");
    }

mysqli_free_result($resultado);
mysqli_close($conexion);

return $conexion;

}
?>
