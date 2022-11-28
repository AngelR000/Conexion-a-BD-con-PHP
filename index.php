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
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
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

$result = mysqli_query($conn, "SELECT * FROM usuarios");

while($query_data = mysqli_fetch_row($result)) {
  echo "<tr>";
  echo "<td>",$query_data[0], "</td>",
       "<td>",$query_data[1], "</td>",
       "<td>",$query_data[2], "</td>";
  echo "</tr>";
}
?>

</table>

<?php
mysqli_free_result($result);
  mysqli_close($conn);

?>
</body>
</html>