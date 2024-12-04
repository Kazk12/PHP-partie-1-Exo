<?php 


// Exo 1

$name = "Moi";
// echo $name;


// Exo 2

$lastname = "Famille";
$firstname = "Kaz";
$age = 15;


// Exo 3


$km = 125;


// Exo 4


$string = "C'est un string";
$int = 10;
$float = 5.12;
$boolean = true;


// Exo 5

$number;

// Exo 6


$prenom = "Kazuko";


// Exo 7

$NomDeFamille = "Mazino";
$PrenomDuType = "Urek";
$AgeDuType = 200;


// Exo 8

$addition = 3 + 4;
$multiplication = 5 * 20;
$division = 45 / 5;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="Exo1">
        <h2>Exo 1
        </h2>
       <p>
       <?php echo $name; ?>
       </p> 
    </div>
    <div class="Exo2">
        <h2>Exo 2</h2>
        <p>
            <?php echo $lastname; echo $firstname; echo $age; ?>
        </p>
    </div>
    <div class="Exo3">
        <h2>
            Exo 3
        </h2>
        <p>
            <?php echo $km ?>
        </p>
    </div>
    <div class="Exo4">
        <h2>
            Exo 4
        </h2>
        <p>
            <?php  echo $string; echo $int; echo $float; echo $boolean ?>
        </p>
    </div>
    <div class="Exo5">
        <h2>
            Exo5
        </h2>
        <?php
        echo $number;
        $number = 15;
        echo $number;
        ?>   
    </div>
    <div class="Exo6">
        <h2>
            Exo 6
        </h2>
        <p>
            <?php echo ("Bonjour " . $prenom . " comment vas tu ?") ?>
        </p>
    </div>
    <div class="Exo7">
        <h2>
            Exo 7
        </h2>
        <p>
            <?php echo "Bonjour " . $NomDeFamille ." " . $PrenomDuType . " ,tu as " . $AgeDuType . " ans"; ?>
        </p>
    </div>
    <div class="Exo8">
        <h2>
            Exo 8
        </h2>
        <p>
            <?php echo "Mon Addition est : " . $addition . "<br>" . "Ma multiplication est : " . $multiplication . "<br>" . "Ma Division est : " . $division ?>
        </p>
    </div>
</body>
</html>