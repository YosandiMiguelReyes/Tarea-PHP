<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Comentarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Su opinión es importante</h2>
        
        <!-- Formulario de comentarios -->
        <form id="commentForm" action="guardar_comentario.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Su nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Su nombre" required>
            </div>
            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3" placeholder="Escriba su comentario" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
        <!-- Espacio para mostrar comentarios -->
        <div class="mt-5">
            <h4>Comentarios recibidos</h4>
            <?php include 'mostrar_comentarios.php'; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
