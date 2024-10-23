<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor</title>
</head>
<body>
<?php

class Profesor extends Miembro {
    private bool $titular;
    private string $asignatura;

    // Constructor
    public function __construct(int $id, string $nombre, string $email, string $asignatura) {
        parent::__construct($id, $nombre, $email, $asignatura);
        $this->asignatura = $asignatura;
    }

    // Getters
    public function getAsignatura(): string {
        return $this->asignatura;
    }

    // Método estático para crear profesores de muestra
    public static function crearProfesoresDeMuestra(): array {
        return [
            new Profesor(1, "Steve Wozniak", "steve@apple.com","DWES"),
            new Profesor(2, "Ada Lovelace", "ada@gmail.com", "DIW"),
            new Profesor(3, "Taylor Otwell", "taylor@laravel.com", "DWEC"),
            new Profesor(4, "Rasmus Lerdoff", "rasmus@php.com", "DAW"),
        ];
    }

}

// Ejemplo de uso
$profesores = Profesor::crearProfesoresDeMuestra();
foreach ($profesores as $profesor) {
    echo $profesor->toString() . "<br>";
}
?>
</body>
</html>