<?php
// Declaración de variables del formulario
$nombre = $_POST['Nombre'];
$apellido = $_POST[ 'Apellido'];
$email = $_POST['Email'];
$telefono = $_POST['Telefono'];
$mensaje = $_POST['Mensaje'];

// Datos del email
$header =
$para = 'k.calle@utp.edu.co';
$titulo = 'S&S formulario';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n apellido: $apellido\n Telefono: $telefono\n E-Mail: $email\n Mensaje:\n $mensaje";


if ($_POST['submit']) {
    

    if (mail($para, $titulo, utf8_decode ($msjCorreo), $header)) {
     
        
     
    }else{
      echo "<script> Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
      ) </script>";

    }
}  

?>