<?php 

if(isset($_POST['nom'])){
    $to = "hernandezemanuelm@gmail.com"; // this is your Email address
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
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
	

?>
    
