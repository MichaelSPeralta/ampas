
<?php

// Variables de conexion a BD.
$servername = "localhost";
$username = "id14981681_db_test";
$password = "Ams#guros1258";
$database = "id14981681_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Error con la conexion del servidor: " . mysqli_connect_error());
    echo "No se puede conectar";
}

//Comprobamos datos enviadosa la bd
if ($_POST["nom"]){
    echo "Connected successfully";
    //Recibimos por POST datos procedentes del formulario index
    $nombre = $_POST["nom"];
    $apellido = $_POST["ape"];
    $numero = $_POST["num"];
    $email = $_POST["mail"];
    $seguro = $_POST["seg"];
    $notas = $_POST["nota"];

    //Consulta SQL
    $agregarReg = "INSERT INTO formulario2 (nombre,apellido,numero,mail,seguro,nota) VALUES ('$nombre','$apellido','$numero','$email','$seguro','$notas')";

 
    if (!$conn) {
    die("Error con la conexion del servidor: " . mysqli_connect_error());
    echo "No se puede conectar";
}else {
    $ejecutarQuery = mysqli_query($conn,$agregarReg);
    echo  "$nombre lo estaremos contactando a la brevedad.";
}
    $to = "test.am.seguros@gmail.com"; // this is your Email address
    $from = "emahernandez77@gmail.com"; // this is the sender's Email address
    $first_name = $_POST['nom'];
    $last_name = $_POST['ape'];
    $seguro = $_POST['seg'];
    $numero  = $_POST['num'];
    $subject = "Interasado por Seguro";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " esta interesado en el seguro de: " .$seguro. " su numero es: ".$numero." y su mail ". $to;
    
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.

    }


   
// header("location:index.html");
//Cerramos conexion a la base de datos.
mysqli_close($conn);
