<?php include __DIR__ . '/Models/Production.php' ?>

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
            <h1>OPP programming</h1>
            <?php foreach($films as $film): ?>
            <ul>
                <li>

                </li>
                <li>
                 
                </li>
                <li>
                 
                </li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>

<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>