<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conn= new mysqli("localhost","root","","virtmed");

  if($conn->connect_errno)
  {
      echo "No hay conexión:(".$conn->connect_errno.")".$conn->connect_error;
  
  }
  copy($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
  echo "La receta se registro en el servidor.<br>";
  $nom = $_FILES['archivo']['name'];
  echo "<file src=\"$nom\">";
  ?>
</body>

</html>