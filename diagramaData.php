<?php
// Datos simulados (podrían venir de una base de datos o estar generados dinámicamente)
$data = [
    "nodes" => [
        ["id" => 1, "name" => "Data Centers e Servidores Centrais", "icon" => "./public/img/icons/icon-mundo.svg", "details" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. "],
        ["id" => 2, "name" => "Backbone", "icon" => "./public/img/icons/icon-antena.svg", "details" => "Construção de mais de <strong>1.600 km</strong> de backbone de fibra ótica"],
        ["id" => 3, "name" => "Central (DG)", "icon" => "./public/img/icons/icon-atomo.svg", "details" => "<strong>+ 345.000</strong> Instalações anuais. <strong>+ 540.000</strong> reparos anuais"],
        ["id" => 4, "name" => "Casa Cliente", "icon" => "./public/img/icons/icon-casa.svg", "details" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit."],
        ["id" => 5, "name" => "Móvel", "icon" => "./public/img/icons/icon-telefono.svg", "details" => "Operação e manutenção de mais de <strong>6.500 sites e 16 prédios</strong> concentradores de telefonia móvel"],
        ["id" => 6, "name" => "Cliente corporativo", "icon" => "./public/img/icons/icon-edificio.svg", "details" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. "]
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
