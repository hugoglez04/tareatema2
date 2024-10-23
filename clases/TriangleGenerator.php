<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TriangleGenerator</title>
</head>
<body>
<?php
class TriangleGenerator {
    public static function generateTriangle(int $altura): string {
        // Si la altura es negativa, devolver una cadena vacía
        if ($altura < 0) {
            return '';
        }

        $triangle = '';
        for ($i = 0; $i < $altura; $i++) {
            // Generar los espacios en blanco
            $spaces = str_repeat('&nbsp;', $altura - $i - 1);
            // Generar los asteriscos
            $stars = str_repeat('*', 2 * $i + 1);
            // Agregar la línea del triángulo
            $triangle .= "<p>$spaces$stars</p>";
        }

        return $triangle;
    }
}

// Ejemplo de uso
echo TriangleGenerator::generateTriangle(7);
?>
</body>
</html>