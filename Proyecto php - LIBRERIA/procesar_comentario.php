<?php

require_once 'bd/conexion.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['mensaje'];


    $libreria = new DBGestionLibreria();


    $exito = $libreria->enviarComentario($nombre, $correo, $asunto, $comentario);

    if ($exito) {
        echo "¡Comentario enviado correctamente!";
    } else {
        echo "Hubo un problema al enviar el comentario. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    echo "No se han enviado datos del formulario.";
}
?>
