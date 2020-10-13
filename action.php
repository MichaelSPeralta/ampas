
<?php

$servername = "localhost";
$database = "amseguros";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Error con la conexion del servidor: " . mysqli_connect_error());
}
echo "Connected successfully";


//Recibimos por POST datos procedentes del formulario index
if (isset($_POST["nom"])){

    $nombre = $_POST["nom"];
    $apellido = $_POST["ape"];
    $numero = $_POST["num"];
    $email = $_POST["mail"];
    $seguro = $_POST["seg"];

//Consulta SQL
$agregarReg = "INSERT INTO formulario (Nombre,Apellido,Numero,Email,Tipo_de_Seguro) values ('$nombre','$apellido','$numero','$email','$seguro')";
//Ejecutamos query 
$ejecutarQuery = mysqli_query($conn,$agregarReg);
//Redireccionamos a menu principal
echo  $_POST['nom'];
header("location:index.html");
    }
//Cerramos conexion a la base de datos.
mysqli_close($conn);
