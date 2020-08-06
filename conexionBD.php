<!DOCTYPE html>
<head>
    <title>conexionBD</title>    
    </head>
<body>
 <form action="conexionBD.php" method="POST">           
            <input type ="submit" value= "Conectar">
        </form> <br>

</body>
</html>


<?php

$adm = "root";
$pass = "";
$host = "localhost";
$connection = mysqli_connect($host, $adm, $pass);

if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "Hemos conectado al servidor <br>" ;
        }


$dataBD = "sistema_botica";

$db = mysqli_select_db($connection,$dataBD);

if (!$db)
{
echo "No se ha podido encontrar la Tabla";
}
else
{
echo "Tabla seleccionada Administrador" ;
}


$consulta = "SELECT * FROM Administrador";
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}

echo "<table border ='1'";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombres</th></h1>";
echo "<th><h1>Apellidos</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['Id_adm']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre_adm'] . "</td></h2>";
    echo "<td><h2>" . $colum['apellido_adm'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";





echo "<br>";


$dataBD = "sistema_botica";

$db = mysqli_select_db($connection,$dataBD);

if (!$db)
{
echo "No se ha podido encontrar la Tabla";
}
else
{
echo "Tabla seleccionada cliente" ;
}


$consulta = "SELECT * FROM cliente";
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}

echo "<table border ='1'";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombres</th></h1>";
echo "<th><h1>Apellidos</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['Id_cli']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre_cli'] . "</td></h2>";
    echo "<td><h2>" . $colum['apellido_cli'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";







echo "<br>";

$dataBD = "sistema_botica";

$db = mysqli_select_db($connection,$dataBD);

if (!$db)
{
echo "No se ha podido encontrar la Tabla";
}
else
{
echo "Tabla seleccionada farmaceutico" ;
}

$consulta = "SELECT * FROM farmaceutico ";
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}

echo "<table border ='1'";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombres</th></h1>";
echo "<th><h1>Apellidos</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['Id_farm']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre_farm'] . "</td></h2>";
    echo "<td><h2>" . $colum['apellido_farm'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

echo "...............------------.................";

mysqli_close( $connection );

   echo "saliendo:" ;

   ?>