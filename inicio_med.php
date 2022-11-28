<?php

$conn= new mysqli("localhost","root","","virtmed");

if($conn->connect_errno)
{
    echo "No hay conexión:(".$conn->connect_errno.")".$conn->connect_error;

}

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$contraseña_fuerte = password_hash($contraseña,PASSWORD_DEFAULT);

$_SESSION['usuario'] = $usuario;

$consulta="select usuario,contraseña from medicos";
$resultado= mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado); 

while ($reg = mysqli_fetch_array($resultado)) {

    if ($usuario==$reg['usuario'] and password_verify($contraseña, $reg['contraseña'])) {

        header("location:menu_med.html");
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
        header("location:login_med.html");
    }
    
  }

mysqli_free_result($resultado);
mysqli_close($conn);

mysqli_free_result($resultado);
mysqli_close($conn);
