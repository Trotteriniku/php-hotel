<?php



include __DIR__ . '/../Model/db.php';

if (isset($_GET['parking']) && isset($_GET['vote'])) {
    $category = $_GET['parking'];
    $raiting = $_GET['vote'];


    $hotels = array_filter($hotels, fn($info) => $info['vote'] > $raiting);
    $hotels = array_filter($hotels, fn($info) => $category == 'all' || $category == $info['parking']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color: #222222;">


    <header class="container mt-5 mb-3  ">
        <form action="index.php" method="GET">
            <select class="p-1" aria-label="Default select example" name="parking">
                <option selected value="all">All</option>
                <option value="1">With parking</option>
                <option value="0">no parking</option>
            </select>
            <select class="p-1" aria-label="Default select example" name="vote">
                <option value="0">1</option>
                <option value="1">2</option>
                <option value="2">3</option>
                <option value="3">4</option>
                <option value="4">5</option>
            </select>
            <button type="submit" class="btn btn-outline-warning align-baseline ">Invia</button>
        </form>
    </header>