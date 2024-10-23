<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

abstract class Miembro {
    protected int $id;
    protected string $nombre;
    protected string $apellidos;
    protected string $email;
    protected int $edad;

    // Constructor
    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->edad = $edad;
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
   
    }

    public function getApellidos(): string {
        return $this->apellidos;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    // Setters
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }

    // Método toString
    public function toString(): string {
        return "ID: $this->id, Nombre: $this->nombre $this->apellidos, Email: $this->email, Edad: $this->edad";
    }
}

// Ejemplo de uso (instanciación de un objeto de una clase hija)
class Estudiante extends Miembro {
    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad) {
        parent::__construct($id, $nombre, $apellidos, $email, $edad);
    }
}

// Creando un objeto de ejemplo
$estudiante = new Estudiante(1, "Carlos", "Sánchez", "carlos@example.com", 21);
echo $estudiante->toString();
?>
</body>
</html>