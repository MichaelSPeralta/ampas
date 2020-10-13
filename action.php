
<?php

// Variables de conexion a BD.
$servername = "localhost";
$username = "id14981681_db_test";
$password = "\$mS3gur0s1258";
$database = "id14981681_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Error con la conexion del servidor: " . mysqli_connect_error());
    echo "No se puede conectar";
}
// echo "Connected successfully";

//Recibimos por POST datos procedentes del formulario index
$nombre = $_POST["nom"];
$apellido = $_POST["ape"];
$numero = $_POST["num"];
$email = $_POST["mail"];
$seguro = $_POST["seg"];

//Consulta SQL
$agregarReg = "INSERT INTO formulario (nombre,apellido,numero,email,seguro) VALUES ('$nombre','$apellido','$numero','$email','$seguro')";

//Comprobamos datos enviadosa la bd
if ($_POST["nom"]){
    if (!$conn) {
    die("Error con la conexion del servidor: " . mysqli_connect_error());
    echo "No se puede conectar";
}else {
    $ejecutarQuery = mysqli_query($conn,$agregarReg);
    echo  "$nombre lo estaremos contactando a la brevedad.";
}

    }
    
// header("location:index.html");
//Cerramos conexion a la base de datos.
mysqli_close($conn);
