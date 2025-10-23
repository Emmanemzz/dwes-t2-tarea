<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triángulo</title>
</head>
<body>
    <?php
    include "clases/TriangleGenerator.php";

    $triangulo = new TriangleGenerator();
    echo $triangulo ->generateTriangle(7);
    ?>
</body>
</html>