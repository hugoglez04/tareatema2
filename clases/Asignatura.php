<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Asignatura {
    private int $id;
    private string $nombre;
    private int $creditos;

    // Constructor
    public function __construct(int $id, string $nombre, int $creditos) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getCreditos(): int {
        return $this->creditos;
    }

    // Método estático para crear asignaturas de muestra
    public static function crearAsignaturasDeMuestra(): array {
        return [
            new Asignatura(1, "DWES", 7),
            new Asignatura(2, "DWEC", 6),
            new Asignatura(3, "DIW", 4),
            new Asignatura(4, "DAW", 4)
        ];
    }

    // Método toString (opcional para mostrar información)
    public function toString(): string {
        return "ID: $this->id, Nombre: $this->nombre, Créditos: $this->creditos";
    }
}

// Ejemplo de uso
$asignaturas = Asignatura::crearAsignaturasDeMuestra();
foreach ($asignaturas as $asignatura) {
    echo $asignatura->toString() . "<br>";
}
?>
</body>
</html>