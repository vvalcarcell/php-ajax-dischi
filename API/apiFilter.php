<?php
    require_once __DIR__ . "/../database/database.php";

    $genreType = $_GET["genre"];

    $filterDB = function ($item) use ($genreType) {
        return $item["genre"] === $genreType;
    };

    $dbFiltered= array_filter($database, $filterDB);

    header('Content-Type: application/json');
    echo json_encode($dbFiltered);