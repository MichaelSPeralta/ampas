
<?php

$servername = "localhost";
$database = "id14981681_test";
$username = "id14981681_db_test";
$password = "$mS3gur0s1258";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Error con la conexion del servidor: " . mysqli_connect_error());
    echo "No se puede conectar";
}
echo "Connected successfully";
echo  $_POST['nom'];

//Recibimos por POST datos procedentes del formulario index
if (isset($_POST["nom"]){

    $nombre = $_POST["nom"];
    $apellido = $_POST["ape"];
    $numero = $_POST["num"];
    $email = $_POST["mail"];
    $seguro = $_POST["seg"];

//Consulta SQL
$agregarReg = "INSERT INTO formulario (nombre,apellido,numero,mail,seguro) values ('$nombre','$apellido','$numero','$email','$seguro')";
//Ejecutamos query 
$ejecutarQuery = mysqli_query($conn,$agregarReg);
//Redireccionamos a menu principal
echo  "Los datos se agregaron correctamente.";

    }
//Cerramos conexion a la base de datos.
mysqli_close($conn);