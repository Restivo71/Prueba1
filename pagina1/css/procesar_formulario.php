<?php
// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$archivo_nombre = $_FILES['archivo']['name'];
$archivo_tipo = $_FILES['archivo']['type'];
$archivo_tamaño = $_FILES['archivo']['size'];
$archivo_tmp_name = $_FILES['archivo']['tmp_name'];

// Validar los datos
if (empty($nombre) || empty($correo) || empty($mensaje)) {
    echo "Por favor, rellene todos los campos.";
} else if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo "Por favor, ingrese una dirección de correo electrónico válida.";
} else {
    // Procesar el archivo adjunto
    $directorio_destino = "archivos/";
    $archivo_destino = $directorio_destino . $archivo_nombre;

    if (move_uploaded_file($archivo_tmp_name, $archivo_destino)) {
        echo "¡Gracias por contactarnos, $nombre! Tu mensaje ha sido enviado correctamente y el archivo adjunto \"$archivo_nombre\" ha sido guardado en el servidor.";
    } else {
        echo "Lo sentimos, ha ocurrido un error al subir el archivo adjunto. Por favor, inténtelo de nuevo más tarde.";
    }
}
?>