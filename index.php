<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mineria de Datos</title>
    
</head>
<?php
$servername = "localhost";
$database = "mineria";
$username = "root";
$password = "";
// Crea la conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// Confirma si se conecto correctamente
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected successfully";
}

?>
<body>

<table border="1" cellpadding="2" cellspacing="2">
  <tr>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>APELLIDO</td>
  </tr>

<?php
//Guardas en una variable el resultado de la consulta
$result = mysqli_query($conn, "SELECT * FROM usuarios");

//Mientras que existan datos en el resultado de la funcion mysqli anterior, 
//se guardan en el arreglo $query_data
while($query_data = mysqli_fetch_row($result)) {
  echo "<tr>";
  //Visitas cada campo de la BD con cada indice del arreglo
  echo "<td>",$query_data[0], "</td>",
       "<td>",$query_data[1], "</td>",
       "<td>",$query_data[2], "</td>";
  echo "</tr>";
}
?>

</table>

<?php
//Limpias la variable de la consulta anterior y cierras la conexion a BD
mysqli_free_result($result);
  mysqli_close($conn);

?>
</body>
</html>