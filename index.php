<?php

include __DIR__ . "./Classes/Movie/Movie.php";
include __DIR__ . "./data/data.php"
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    .card {
        min-height: 450px;
    }
</style>
</head>
<body class="bg-dark">
    <div class="container my-5 ">
        <div class="row">
            <?php foreach($movies as $movie) { 
                $m = new Movie ($movie['title'],$movie['genre'],$movie['year'], $movie['overview'], $movie['cast']) ?>
            <div class="col">
                <div class="card p-3">
                    <h3><?= $movie['title'] ?></h3>
                    <p><strong>Genere: </strong><?= $m->genre ?></p>
                    <p><strong>Anno: </strong><?= $m->getYear() ?></p>
                    <p><strong>Cast: </strong><?= $m->getCast() ?></p>
                    <p><strong>Trama: <br/> </strong><?= $m->overview ?></p>
                </div>
            </div>
           <?php }?>
        </div>
    </div>
</body>
</html>