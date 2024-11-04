<?php
$archivo = 'comentarios.txt';
if (file_exists($archivo)) {
    $comentarios = file($archivo, FILE_IGNORE_NEW_LINES);
    echo '<div class="list-group">';
    foreach ($comentarios as $comentario) {
        list($nombre, $texto) = explode('|', $comentario);
        echo '<div class="list-group-item list-group-item-success mb-2">';
        echo "<strong>$nombre</strong><br>$texto";
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p>No hay comentarios aún.</p>';
}
?>
