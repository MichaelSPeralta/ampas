
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
if (isset($_POST['registrar'])){

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
    $seguro = $_POST["seguro"];

//Abrimos conexion a la base de datos.
$agregarReg = "INSERT INTO formulario (Nombre,Apellido,Numero,Email,Tipo_de_Seguro) values ('$nombre','$apellido','$numero','$email','$seguro')";

$ejecutarQuery = mysqli_query($conn,$agregarReg);

header("location:index.html");
    }
//Cerramos conexion a la base de datos.
mysql_close($conn);
