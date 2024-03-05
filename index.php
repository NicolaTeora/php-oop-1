<!-- create un file index.php in cui è definita una classe Production -->

<?php 

require_once __DIR__ . '/Models/Production.php'; 
require_once __DIR__ . '/Models/Type.php'; 
require_once __DIR__ . '/Models/Movie.php'; 
require_once __DIR__ . '/DB/data.php';

?>

<!-- BONUS 1
Creare un layout completo per stampare a schermo una lista di produzioni. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <!-- cdn Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div id="app">
        <div class="container">
            <h1 class="text-center">OPP programming</h1>
            <div class="row">
                <?php foreach($films as $film): ?>
                <div class="col-4">
                    <ul class="list-group mt-4">
                        <li class="list-group-item list-group-item-action">
                            <b>Title: </b>
                            <?= $film->get_title() ?>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <b>Lenguage: </b>
                            <?= $film->get_lenguage() ?>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <b>Vote: </b>
                            <?= $film->get_vote() ?>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <b>Genere: </b><?= $film->get_type()->name . "<br>" ?> 
                            <b>Description: </b><?= $film->get_type()->description . "<br>" ?>
                        </li>
                        
                        <li class="list-group-item list-group-item-action">
                            <b>Profits (mln): </b><?= $film->profits ?>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <b>Duration (min): </b><?= $film->get_duration() ?>
                        </li>
                        
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>