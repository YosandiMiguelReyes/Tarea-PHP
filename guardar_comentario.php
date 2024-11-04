<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $comentario = htmlspecialchars($_POST['comentario']);
    
    // Guardar en archivo de texto
    $archivo = 'comentarios.txt';
    $nuevoComentario = "$nombre|$comentario\n";
    file_put_contents($archivo, $nuevoComentario, FILE_APPEND);
    
    // Redirigir de nuevo al formulario para mostrar el nuevo comentario
    header('Location: index.php');
    exit();
}
?>
