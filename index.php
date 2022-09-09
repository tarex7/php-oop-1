<?php


    class Movie
    {
        public $title;
        public $genre;
        public $year;
        public $overview;

        public function __construct($title, $genre, $year,  $overview, $cast)
        {
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
            $this->overview = $overview;
            $this->cast = $cast;
        }

        public function getYear()
        {
            return $this-> year ;
        }

        public function getCast()
        {
           foreach($this->cast as $cast) {
            echo $cast . ", ";
           };
        }


    }

    $movie01_overview = "Tyler Durden ed un nuovo amico sfogano la loro aggressività creando un club di combattimento, che assume rapidamente connotati rivoluzionari, fino a esporre la vera identità di Tyler Durden.";

    $movie02_overview = "In questo film, divenuto un vero e proprio classico del cinema, per procurarsi i soldi necessari a pagare le tasse arretrate dall'orfanotrofio in cui sono cresciuti e scongiurarne la chiusura, due fratelli decidono di riunire tutti i vecchi componenti della loro band musicale.";

    $movie03_overview = "Un pilota di caccia si innamora della propria bionda istruttrice, Charlotte Blackwood, e si crede responsabile della morte del copilota. L'esperienza nel programma di formazione lo forza a crescere.";

    $movie04_overview = "Mark Renton, un giovane scozzese, trascorre il tempo con gli amici eroinomani. Tutti hanno intenzione di lottare contro i terribili effetti delle droghe, ma la tentazione è molto forte.";
    
    

    $movie01 = new Movie('Fight club','Drammatico', 1999, $movie01_overview, ['Brad Pitt','Edward Norton']);
    $movie02 = new Movie('The Blues Brothers','Commedia', 1980, $movie02_overview,['John Belushi','Dan Aykroyd']);
    $movie03 = new Movie('Top Gun','Azione', 1986, $movie03_overview,['Tom Cruise','Val Kilmer']);
    $movie04 = new Movie('Trainspotting','Drammatico', 1996, $movie04_overview,['Ewan McGregor','Johnny Lee','Ewen Bremner', 'Robert Carlyle']);


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
            <div class="col">
                <div class="card p-3">
                    <h3><?= $movie01->title ?></h3>
                    <p><strong>Genere: </strong><?= $movie01->genre ?></p>
                    <p><strong>Anno: </strong><?= $movie01->getYear() ?></p>
                    <p><strong>Cast: </strong><?= $movie01->getCast() ?></p>
                    <p><strong>Trama: <br/> </strong><?= $movie01->overview ?></p>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h3><?= $movie02->title ?></h3>
                    <p><strong>Genere: </strong><?= $movie02->genre ?></p>
                    <p><strong>Anno: </strong><?= $movie02->getYear() ?></p>
                    <p><strong>Cast: </strong><?= $movie02->getCast() ?></p>
                    <p><strong>Trama: <br/> </strong><?= $movie02->overview ?></p>

                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h3><?= $movie03->title ?></h3>
                    <p><strong>Genere: </strong><?= $movie03->genre ?></p>
                    <p><strong>Anno: </strong><?= $movie03->getYear() ?></p>
                    <p><strong>Cast: </strong><?= $movie03->getCast() ?></p>
                    <p><strong>Trama: <br/> </strong><?= $movie03->overview ?></p>

                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h3><?= $movie04->title ?></h3>
                    <p><strong>Genere: </strong><?= $movie04->genre ?></p>
                    <p><strong>Anno: </strong><?= $movie04->getYear() ?></p>
                    <p><strong>Cast: </strong><?= $movie04->getCast() ?></p>
                    <p><strong>Trama: <br/> </strong><?= $movie04->overview ?></p>

                </div>
            </div>
        </div>
    </div>
</body>
</html>