<?php
// Datos simulados (podrían venir de una base de datos o estar generados dinámicamente)
$data = [
    "nodes" => [
        ["id" => 1, "name" => "Data Centers e Servidores Centrais", "icon" => "./public/img/icons/icon-mundo.svg"],
        ["id" => 2, "name" => "Backbone", "icon" => "./public/img/icons/icon-antena.svg"],
        ["id" => 3, "name" => "Central (DG)", "icon" => "./public/img/icons/icon-atomo.svg"],
        ["id" => 4, "name" => "Casa Cliente", "icon" => "./public/img/icons/icon-casa.svg"],
        ["id" => 5, "name" => "Móvel", "icon" => "./public/img/icons/icon-telefono.svg"],
        ["id" => 6, "name" => "Cliente corporativo", "icon" => "./public/img/icons/icon-edificio.svg"]
    ],
    "links" => [
        ["source" => 1, "target" => 2],
        ["source" => 2, "target" => 3],
        ["source" => 3, "target" => 4],
        ["source" => 3, "target" => 5],
        ["source" => 3, "target" => 6]
    ]
];

// Devolver los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
