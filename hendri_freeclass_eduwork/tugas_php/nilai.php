<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
</head>
<body>
    <h1>Switch case | Eduwork Tugas PHP</h1><br>
    <form action="" method="get">
        Masukan Nilai :<br><br>
        <input type="tel" name="inputNilai" id="inputNilai"><br><br>
        <input type="submit" value="Hitung Kategori Nilai">
    </form>

    <br><br>

    <!-- Menhitung nilai -->
    <?php 
    if(isset($_GET['inputNilai'])) {
        // input
        $inputNilai = $_GET['inputNilai'];

        // perhitungan menggunakan switch
        switch($inputNilai) {
            case ($inputNilai >= 90) :
                echo "Nilai anda A";
                break;
            case ($inputNilai >= 80) :
                echo "Nilai anda B";
                break;
            case ($inputNilai >= 70) :
                echo "Nilai anda C";
                break;
            default :
                echo "Nilai anda D";
                break;
        }
    }
    ?>
</body>
</html>