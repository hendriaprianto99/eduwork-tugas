<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Ruang</title>
</head>
<body>
    <h1>Tugas Bangun Ruang | PHP</h1>

    <ol type="a">
        <!-- Nomor 1, volume balok -->
        <li>
            <?php 
                $p = 7;
                $l = 9;
                $t = 14;

                $volumeBalok = $p * $l * $t;
                echo $volumeBalok;
            ?>
        </li>

        <!-- Nomor 2, volume limas -->
        <li>
            <?php 
                $luasAlas = 48;
                $t = 9;

                $volumeLimas = $luasAlas * $t;
                echo $volumeLimas;
            ?>
        </li>

        <!-- Nomor 3, volume prisma -->
        <li>
            <?php 
                $luasAlas = 78;
                $t = 40;

                $volumePrisma = $luasAlas * $t;
                echo $volumePrisma
            ?>
        </li>
    </ol>
</body>
</html>