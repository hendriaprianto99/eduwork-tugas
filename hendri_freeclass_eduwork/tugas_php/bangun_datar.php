<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Bangun Datar | Tugas PHP</title>
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
                <h1>Menghitung Bangun Datar | Tugas PHP</h1>
                <p>Mohon masukan data hanya dalam bentuk angka</p>
            </th>
        </tr>
        
        <!-- content -->
        <tr>
           <!-- Luas persegi panjang -->
            <td>
                <div class="luasPersegiPanjang">
                    <h3>Menghitung Luas Persegi Panjang</h3>
                    <form action="" method="get">
                        Panjang<br><input type="num" name="p" id="p"><br><br>
                        Lebar<br><input type="num" name="l" id="l"><br><br>
                        <input type="submit" name="submit3" id="submit3" value="Hitung Luas Persegi Panjang">
                    </form>
                    <br>
                    <br>
                </div>
            </td>

            <!-- luas segitiga -->
            <td>
                <div class="luasSegitiga">
                    <h3>Menghitung Luas Segitiga</h3>
                    <form action="" method="get">
                        Alas<br><input type="num" name="alas" id="alas"><br><br>
                        Tinggi<br><input type="num" name="tinggi" id="tinggi"><br><br>
                        <input type="submit" name="submit4" id="submit4" value="Hitung Luas Segitiga">
                    </form>
                    <br>
                    <br>
                </div>
            </td>

            <!-- Luas lingkaran -->
            <td>
                <div class="luasLingkaran">
                    <h3>Menghitung Luas Lingkaran</h3>
                    <form action="" method="get">
                        Jari-jari Lingkaran<br><input type="num" name="r" id="r"><br><br>
                        phi<br><input type="num" name="phi" id="phi" placeholder="3,14" disabled><br><br>
                        <input type="submit" name="submit5" id="submit5" value="Hitung Luas Lingkaran">
                    </form>
                    <br>
                    <br>
                </div>
            </td>

             <!-- Luas Trapesium -->
             <td>
                <div class="luasTrapesium">
                    <h3>Menghitung Luas Trapesium</h3>
                    <form action="" method="get">
                        Panjang sisi bawah<br><input type="num" name="a" id="a"><br><br>
                        Panjang sisi atas<br><input type="num" name="b" id="b"><br><br>
                        Tinggi<br><input type="num" name="t" id="t"><br><br>
                        <input type="submit" name="submit1" id="submit1" value="Hitung Luas Trapesium">
                    </form>
                    <br><br>
                </div>
            </td>

            <!-- Keliling Trapesium -->
            <td>
                <div class="kelilingTrapesium">
                    <h3>Menghitung Keliling Trapesium</h3>
                    <form action="" method="get">
                        Sisi bawah<br><input type="num" name="ab" id="ab"><br><br>
                        Sisi kanan<br><input type="num" name="bc" id="bc"><br><br>
                        Sisi atas<br><input type="num" name="cd" id="cd"><br><br>
                        Sisi kiri<br><input type="num" name="da" id="da"><br><br>
                        <input type="submit" name="submit2" id="submit2" value="Hitung Keliling Trapesium">
                    </form>
                    <br><br>
                </div>
            </td>
        </tr>

        <!-- hasil -->
        <tr>
            <td colspan=5>
                <?php 
                    // Action form luas trapesium
                    if (isset($_GET['submit1'])) {
                        // input
                        $a = $_GET['a'];
                        $b = $_GET['b'];
                        $t = $_GET['t'];
                        
                        $luasTrapesium = 0.5 * ( $a + $b ) * $t;

                        // hasil
                        echo "<h3>Hasil Hitung Luas Trapesium: " . $luasTrapesium . " CM</h3>";
                    }


                    // Action form keliling trapesium
                    if (isset($_GET['submit2'])) {
                        // input
                        $ab = $_GET['ab'];
                        $bc = $_GET['bc'];
                        $cd = $_GET['cd'];
                        $da = $_GET['da'];
                        
                        $kelilingTrapesium = $ab + $bc + $cd + $da;

                        // hasil
                        echo "<h3>Hasil Hitung Keliling Trapesium : " . $kelilingTrapesium . " CM</h3>";
                    }


                    // Action form luas persegi panjang
                    if (isset($_GET['submit3'])) {
                        // input
                        $p = $_GET['p'];
                        $l = $_GET['l'];
                        
                        $luasPersegiPanjang = $p * $l;

                        // hasil
                        echo "<h3>Hasil Hitung Luas Persegi Panjang : " . $luasPersegiPanjang . " CM</h3>";
                    }


                    // Action form luas segitiga
                    if (isset($_GET['submit4'])) {
                        // input
                        $alas = $_GET['alas'];
                        $tinggi = $_GET['tinggi'];
                        
                        $luasSegitiga = 0.5 * $alas * $tinggi;

                        // hasil
                        echo "<h3>Hasil Hitung Luas Segitiga : " . $luasSegitiga . " CM</h3>";
                    }

                    if (isset($_GET['submit5'])) {
                        // input
                        $r = $_GET['r'];
                        $phi = 3.14;

                        $luasLingkaran = $phi * $r * $r;

                        // hasil
                        echo "<h3>Hasil Hitung Luas Lingkaran : " . $luasLingkaran . " CM</h3>";
                    }
                ?>
        </tr>
    </table>
</body>
</html>