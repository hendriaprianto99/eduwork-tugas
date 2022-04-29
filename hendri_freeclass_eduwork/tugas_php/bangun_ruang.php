<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Bangun Ruang | Tugas PHP</title>
    <style>
        body {
            margin: 50px;
        }
        
        table {
            text-align: center;
            margin: 50px auto;
        }

        table, th, td {
            border: 0 solid black;
            border-collapse: collapse;
            padding: 20px 20px;
        }

        tr:nth-child(odd) {
            background-color: yellow;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <!-- head -->
        <tr>
            <th colspan=5>
                <h1>Menghitung Bangun Ruang | Tugas PHP</h1>
                <p>Mohon masukan data hanya dalam bentuk angka</p>
            </th>
        </tr>
        
        <!-- content -->
        <tr>
           <!-- Volume kubus -->
            <td>
                <div class="volumeKubus">
                    <h3>Menghitung Volume Kubus</h3>
                    <form action="" method="get">
                        Panjang Rusuk<br><input type="num" name="r" id="r"><br><br>
                        <input type="submit" name="submit1" id="submit1" value="Hitung Volume Kubus">
                    </form>
                    <br>
                    <br>
                </div>
            </td>

            <!-- volume balok -->
            <td>
                <div class="volumeBalok">
                    <h3>Menghitung Volume Balok</h3>
                    <form action="" method="get">
                        Panjang<br><input type="num" name="p" id="p"><br><br>
                        Lebar<br><input type="num" name="l" id="l"><br><br>
                        Tinggi<br><input type="num" name="t" id="t"><br><br>
                        <input type="submit" name="submit2" id="submit2" value="Hitung Volume Balok">
                    </form>
                    <br>
                    <br>
                </div>
            </td>

            <!-- volume prisma -->
            <td>
                <div class="volumePrisma">
                    <h3>Menghitung Volume Prisma</h3>
                    <form action="" method="get">
                        Panjang<br><input type="num" name="p" id="p"><br><br>
                        Lebar<br><input type="num" name="l" id="l"><br><br>
                        Tinggi<br><input type="num" name="t" id="t"><br><br>
                        <input type="submit" name="submit3" id="submit3" value="Hitung Volume Prisma">
                    </form>
                    <br>
                    <br>
                </div>
            </td>

            <!-- volume kerucut -->
            <td>
                <div class="volumeKerucut">
                    <h3>Menghitung Volume Kerucut</h3>
                    <form action="" method="get">
                        Jari-jari<br><input type="num" name="r" id="r"><br><br>
                        Tinggi<br><input type="num" name="t" id="t"><br><br>
                        Phi<br><input type="num" name="phi" id="phi" placeholder="3.14" disabled><br><br>
                        <input type="submit" name="submit4" id="submit4" value="Hitung Volume Kerucut">
                    </form>
                    <br><br>
                </div>
            </td>

            <!-- volume limas -->
            <td>
                <div class="volumeLimas">
                    <h3>Menghitung Volume Limas</h3>
                    <form action="" method="get">
                        Luas Alas<br><input type="num" name="luasAlas" id="luasAlas"><br><br>
                        Tinggi<br><input type="num" name="t" id="t"><br><br>
                        <input type="submit" name="submit5" id="submit5" value="Hitung Volume Limas">
                    </form>
                    <br><br>
                </div>
            </td>
        </tr>

        <!-- hasil -->
        <tr>
            <td colspan=5>
                <?php 
                    // Action form Volume kubus
                    if (isset($_GET['submit1'])) {
                        // input
                        $r = $_GET['r'];
                        
                        $volumeKubus = $r * $r * $r;
                        // hasil
                        echo "<h3>Hasil Hitung Volume Kubus: " . $volumeKubus . " CM<sup>3</sup></h3>";
                    }


                    // Action form Volume balok
                    if (isset($_GET['submit2'])) {
                        // input
                        $p = $_GET['p'];
                        $l = $_GET['l'];
                        $t = $_GET['t'];
                        
                        $volumeBalok = $p * $l * $t;

                        // hasil
                        echo "<h3>Hasil Hitung Volume Balok: " . $volumeBalok . " CM<sup>3</sup></h3>";
                    }


                    // Action form volume prisma
                    if (isset($_GET['submit3'])) {
                        // input
                        $p = $_GET['p'];
                        $l = $_GET['l'];
                        $t = $_GET['t'];
                        
                        $volumePrisma = 0.5 * $p * $l * $t;

                        // hasil
                        echo "<h3>Hasil Hitung Volume Prisma: " . $volumePrisma . " CM<sup>3</sup></h3>";
                    }


                    // Action form volume kerucut
                    if (isset($_GET['submit4'])) {
                        // input
                        $r = $_GET['r'];
                        $t = $_GET['t'];
                        $phi = 3.14;
                        
                        $volumeKerucut = 1/3 * $phi * $r *$r * $t;

                        // hasil
                        echo "<h3>Hasil Hitung Volume Kerucut: " . $volumeKerucut . " CM<sup>3</sup></h3>";
                    }

                    // Action form volume limas
                    if (isset($_GET['submit5'])) {
                        // input
                        $luasAlas = $_GET['luasAlas'];
                        $t = $_GET['t'];

                        $volumeLimas = 1/3 * $luasAlas * $t;

                        // hasil
                        echo "<h3>Hasil Hitung Volume Limas: " . $volumeLimas . " CM<sup>3</sup></h3>";
                    }
                ?>
        </tr>
    </table>
</body>
</html>