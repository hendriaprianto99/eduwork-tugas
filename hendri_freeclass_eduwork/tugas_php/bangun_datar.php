<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun datar</title>
</head>
<body>
    <h1>Tugas Bangun Datar | PHP</h1>
    <ol type="a">
        <!-- 1. luas persegi panjang -->
        <li>
            <?php 
                $p = 4;
                $l = 5;

                $luasPersegi = $p * $l;
                echo $luasPersegi;
            ?>
        </li>

        <!-- 2. keliling persegi panjang -->
        <li>
            <?php 
                $p = 10;
                $l = 76;

                $kelilingPersegi = 2 * ($p + $l);
                echo $kelilingPersegi;    
            ?>
        </li>

        <!-- 3. luas jajar genjang -->
        <li>
            <?php 
                $a = 7;
                $t = 17;

                $luasJajarGenjang = $a * $t;
                echo $luasJajarGenjang;
            ?>
        </li>

        <!-- luas segitiga -->
        <li>
            <?php 
                $a = 9;
                $t = 10;
            
                $luasSegitiga = 0.5 * $a * $t;
                echo $luasSegitiga;
            ?>
        </li>

        <!-- luas belah ketupat -->
        <li>
            <?php 
                $s = 4;

                $kelilingBelahKetupat = 4 * $s;
                echo $kelilingBelahKetupat;
            ?>
        </li>
    </ol>
</body>
</html>