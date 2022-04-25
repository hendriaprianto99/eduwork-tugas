<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Looping 1 PHP</title>
</head>
<style>
    body {
        margin: 5rem;
    }
</style>
<body>
    <h1>Tugas Looping 1 PHP</h1>
    <!-- PHP -->
    <?php

    for ($baris = 0; $baris <= 8; $baris++) {
        for ($angka = 0; $angka <= $baris; $angka++) {
            echo $angka;
        }
        echo "<br>";
    }
    
    ?>
</body>
</html>