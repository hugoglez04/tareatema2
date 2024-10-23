<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
</head>
<body>
<?php

class Asignatura {
    private int $id;
    private string $nombre;

    public function __construct(int $id, string $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
}

class Alumno extends Miembro {
    private array $asignaturas = [];
    private bool $cursoAbonado = false;

    // Constructor
    public function __construct(string $nombre, string $apellidos, string $email, int $edad) {
        parent::__construct( $nombre, $apellidos, $email, $edad);
    }

    // Método para abonar el curso
    public function abonarCurso(): void {
        $this->cursoAbonado = true;
    }

    // Método para matricularse en una asignatura
    public function matricularseEnAsignatura(Asignatura $asignatura): string {
        if (!in_array($asignatura, $this->asignaturas, true)) {
            $this->asignaturas[] = $asignatura;
            return "Matriculado en " . $asignatura->getNombre();
        } else {
            return "Ya estás matriculado en " . $asignatura->getNombre();
        }
    }

    // Método para darse de baja en una asignatura
    public function bajaEnAsignatura(Asignatura $asignatura): string {
        $key = array_search($asignatura, $this->asignaturas, true);
        if ($key !== false) {
            unset($this->asignaturas[$key]);
            return "Dado de baja en " . $asignatura->getNombre();
        } else {
            return "No estás matriculado en " . $asignatura->getNombre();
        }
    }

    // Método estático para crear alumnos de muestra
    public static function crearAlumnosDeMuestra(): array {
        return [
            new Alumno("Laura", "Martínez", "laura.martinez@email.com", 22),
            new Alumno("Sergio", "López", "sergio.lopez@email.com", 25),
            new Alumno("Carlos", "García", "carlos.garcia@email.com", 24),
            new Alumno("Marta", "Sánchez", "marta.sanchez@email.com", 23),
            new Alumno("Alba", "Fernández", "alba.fernandez@email.com", 21),
            new Alumno("David", "Rodríguez", "david.rodriguez@email.com", 26),
            new Alumno("Lucía", "Jiménez", "lucia.jimenez@email.com", 20),
            new Alumno("Jorge", "Pérez", "jorge.perez@email.com", 22),
            new Alumno("Elena", "Romero", "elena.romero@email.com", 23),
            new Alumno("Pablo", "Torres", "pablo.torres@email.com", 24)
        ];
    }

    // Método toString (opcional para mostrar información)
    public function toString(): string {
        return parent::toString() . ", Curso Abonado: " . ($this->cursoAbonado ? 'Sí' : 'No') . ", Asignaturas: " . implode(", ", array_map(fn($asig) => $asig->getNombre(), $this->asignaturas));
    }
}

// Ejemplo de uso
$alumnos = Alumno::crearAlumnosDeMuestra();
foreach ($alumnos as $alumno) {
    echo $alumno->toString() . "<br>";
}
?>
</body>
</html>