
<?php

session_start();

if(isset($_POST)){

$usuario=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$conexion=mysqli_connect("localhost","root","12345","hospitalm");




$consulta="SELECT correo, contraseña, TIPO_USUARIO FROM admin where correo='$usuario' and contraseña='$contraseña'
            UNION ALL SELECT correo_me, contraseña_me, TIPO_USUARIO FROM medico where correo_me='$usuario' and contraseña_me='$contraseña'
            UNION ALL SELECT correo_pac, contraseña_pac, TIPO_USUARIO FROM paciente where correo_pac='$usuario' and contraseña_pac='$contraseña'";




$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);
$_SESSION['nombre']=$usuario;
    if($filas['TIPO_USUARIO']==1){ //administrador
        header("location:../Hospital_M/hospital.html");
    }else
    if($filas['TIPO_USUARIO']==2){ //cliente
    header("location:../Medico_M/medico.html");
    }else
    if($filas['TIPO_USUARIO']==3){ //cliente
        header("location:../Paciente_M/paciente.html");
    }else
    {
        header("location:index.php");
    }

mysqli_free_result($resultado);
mysqli_close($conexion);




return $conexion;

}
?>