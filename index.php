<?php

require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Faker</title>
    </head>

    <body>
        <h3>Daftar Nama</h3>
        <ul>
            <?php
                for ($i = 0; $i < 10; $i++) {
                    echo $faker->name() . "<br>";
                }
            ?>

        </ul>
    </body>
</html>