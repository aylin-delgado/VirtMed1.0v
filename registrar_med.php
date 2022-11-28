<?php
$conn= new mysqli("localhost","root","","virtmed");

if($conn->connect_errno)
{
    echo "No hay conexión:(".$conn->connect_errno.")".$conn->connect_error;

}
$Paterno=$_POST['paterno'];
$Materno=$_POST['materno'];
$Nombres=$_POST['nombres'];
$NE=$_POST['NE'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


if(isset($_POST['registrar']))

{
    $contraseña_fuerte = password_hash($contraseña,PASSWORD_DEFAULT);
    $queryregistrar = "INSERT INTO medicos(paterno,materno,nombres,NE,usuario,contraseña) values ('$Paterno','$Materno','$Nombres','$NE','$usuario','$contraseña_fuerte')";

    if(mysqli_query($conn,$queryregistrar))
    {
        echo "<script>alert('Medico registrado:$usuario');window.location='login_med.html'</script>";

}else

{
    echo "Error: ".$queryregistrar."<br>".mysql_error($conn);
}

}

?>