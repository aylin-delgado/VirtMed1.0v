<?php
$conn= new mysqli("localhost","root","","virtmed");

if($conn->connect_errno)
{
    echo "No hay conexión:(".$conn->connect_errno.")".$conn->connect_error;

}
$Paterno=$_POST['Paterno'];
$Materno=$_POST['Materno'];
$Nombres=$_POST['Nombres'];
$NA=$_POST['NA'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


if(isset($_POST['registrar']))

{
    $contraseña_fuerte = password_hash($contraseña,PASSWORD_DEFAULT);
    $queryregistrar = "INSERT INTO registro(Paterno,Materno,Nombres,NA,usuario,contraseña) values ('$Paterno','$Materno','$Nombres','$NA','$usuario','$contraseña_fuerte')";

    if(mysqli_query($conn,$queryregistrar))
    {
        echo "<script>alert('Usuario registrado:$usuario');window.location='login.html'</script>";

}else

{
    echo "Error: ".$queryregistrar."<br>".mysql_error($conn);
}

}

?>