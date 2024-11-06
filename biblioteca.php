<?php

$libros = [  
    "libro1" => [  
        "titulo" => "PHP para Principiantes",  
        "autor" => "Carlos Ruiz",  
        "precio" => 19.99,  
        "categoria" => "Desarrollo web"  
    ],  
    "libro2" => [  
        "titulo" => "JavaScript Avanzado",  
        "autor" => "Laura García",  
        "precio" => 25.99,  
        "categoria" => "Desarrollo web"  
    ],  
    "libro3" => [  
        "titulo" => "Algoritmos en Python",  
        "autor" => "Miguel Fernández",  
        "precio" => 29.99,  
        "categoria" => "Algoritmos"  
    ]  
];

    $filtredLibros = array_filter($libros, function($libro) {
        return $libro['categoria'] === "Desarrollo web";
    });

?>

<h2>Información de todos los libros</h2>
<table border="1">
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Precio</th>
        <th>Categoría</th>
    </tr>
    <?php foreach ($libros as $libro) : ?>
        <tr>
        <td><?= $libro["titulo"] ?></td>
        <td><?= $libro["autor"] ?></td>
        <td><?= $libro["precio"] ?></td>
        <td><?= $libro["categoria"] ?></td>
        </tr>
     <?php endforeach; ?>
</table>

<h2>Libros de Categoría "Desarrollo Web"</h2>

<ol>
    <?php foreach ($filtredLibros as $libro) :?>
        <li><?=$libro["titulo"]?></li>

    <?php endforeach;?>
</ol>