<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung BMI | Tugas PHP</title>
</head>
<body>
    <h1>Menghitung BMI</h1>
    <h3>Masukan informasi anda disini</h3>
    <form action="" method="get">
        Nama<br><input type="text" name="nama" id="nama"><br><br>
        Tinggi Badan<br><input type="text" name="tinggiBadan" id="tinggiBadan"><br><br>
        Berat Badan<br><input type="text" name="beratBadan" id="beratBadan"><br><br>
        <input type="submit" name="submit" id="submit" value="hitung BMI">
    </form>
    <br>
    <br>

    <?php 
    // Action form
    if (isset($_GET['submit'])) {
        // input
        $nama = $_GET['nama'];
        $tinggiBadan = $_GET['tinggiBadan']/100;
        $beratBadan = $_GET['beratBadan'];
        // rumus bmi
        $bmi = $beratBadan / ($tinggiBadan * $tinggiBadan);

        // hasil
        echo '<div class="hasil">';
        echo "<h3>Hasil hitung BMI</h3>";
        echo "Halo $nama. Nilai BMI anda adalah $bmi, anda termasuk ";

        // perhitungan bmi
        if($bmi < 17) {
            echo "KURUS, kekurangan berat badan berat";
        } else if ($bmi < 25) {
            echo "NORMAL";
        } else if ($bmi < 27) {
            echo "GEMUK, kelebihan berat badan ringan";
        } else {
            "GEMUK, kelebihan berat badan ringan";
        }
        echo '</div>';
    }
    ?>

</body>
</html>