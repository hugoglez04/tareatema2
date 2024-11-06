<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require './clases/Miembro.php';
require './clases/Alumno.php';
require './clases/Profesor.php';
require './clases/Asignatura.php';

$alumnos = Alumno::crearAlumnosDeMuestra();
$profesores = Profesor::crearProfesoresDeMuestra();
$asignaturas = Asignatura::crearAsignaturasDeMuestra();


$alumnos[0]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[1]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[1]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[2]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[2]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[3]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[5]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[7]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[8]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[9]->matricularEnAsignatura($asignaturas[0]);



$alumnosMenores23 = array_filter($alumnos, function ($alumno) {
    return $alumno->getEdad() <= 23;
});

$alumnosConDosAsignaturas = array_filter($alumnos, function ($alumno) {
    return count($alumno->getAsignaturas()) >= 2;
});

$asignaturasConAlumnos = array_filter($asignaturas, function ($asignatura) use ($alumnos) {
    foreach ($alumnos as $alumno) {
        foreach ($alumno->getAsignaturas() as $asignaturaAlumno) {
            if ($asignaturaAlumno == $asignatura) {
                return true;
            }
        }
    }
    return false;
});

echo "<h1>Alumnos</h1>";
echo "<ul>";
foreach ($alumnos as $alumno) {
    echo "<li>$alumno</li>";
}
echo "</ul>";

echo "<h1>Profesores</h1>";
echo "<ul>";
foreach ($profesores as $profesor) {
    echo "<li>$profesor</li>";
}
echo "</ul>";

echo "<h1>Asignaturas</h1>";
echo "<ul>";
foreach ($asignaturas as $asignatura) {
    echo "<li>$asignatura</li>";
}
echo "</ul>";

echo "<h1>Alumnos <= 23</h1>";
echo "<ul>";
foreach ($alumnosMenores23 as $alumno) {
    echo "<li>$alumno</li>";
}
echo "</ul>";

echo "<h1>Alumnos con al menos dos asignaturas</h1>";
echo "<ul>";
foreach ($alumnosConDosAsignaturas as $alumno) {
    echo "<li>$alumno</li>";
}
echo "</ul>";

echo "<h1>Asignaturas con algun alumno matriculado</h1>";
echo "<ul>";
foreach ($asignaturasConAlumnos as $asignatura) {
    echo "<li>$asignatura</li>";
}
echo "</ul>";
 ?>
</body>
</html>