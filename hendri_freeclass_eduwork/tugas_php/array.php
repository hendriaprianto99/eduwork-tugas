<?php 
// Ambil data json
$data = file_get_contents("json/data.json");
$data = json_decode($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
    <style>
        /* reset */
        body {
        padding: 0;
        margin: 0;
        }

        /* navbar */
        .navbar {
        background-color: yellow;
        overflow: hidden;
        }

        .navbar a {
        float: left;
        color: #f2f2f2;
        color: black;
        text-align: center;
        padding: 20px 16px;
        text-decoration: none;
        font-size: 17px;
        }

        /* table */
        table {
            width: 60%;
            text-align: center;
            margin: 50px auto;
        }

        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 15px;
        }

        tr:nth-child(even) {
            background-color: #D6EEEE;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="#home">Daftar Nilai</a>
    </div>
    <!-- table -->
    <table class="content">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
            
        <!-- menampilkan data json -->
        <?php 
        // buat nomor urut
        $nomor = 0;
        foreach($data as $daftarNilai) {
        echo "<tr>";
            while($nomor < 6) {
                $nomor++;
                echo "<td>$nomor</td>"; // Menampilkan nomor
                break;
            }

            echo "<td>$daftarNilai->nama</td>"; // Menampilkan nama
            echo "<td>$daftarNilai->tanggal_lahir</td>"; // Menampilkan tgl lahir

            // hitung umur
            $tglLahir = $daftarNilai->tanggal_lahir;
            $today = date("Y-m-d");
            $diff = date_diff(date_create($tglLahir), date_create($today));
            $umur = $diff->format('%y');
            echo "<td>$umur Tahun</td>"; // Menampilkan umur

            echo "<td>$daftarNilai->alamat</td>"; // Menampilkan alamat
            echo "<td>$daftarNilai->kelas</td>"; // Menampilkan kelas
            echo "<td>$daftarNilai->nilai</td>"; // Menampilkan nilai angka

            // Menhitung Nilai
            if ($daftarNilai->nilai >=90) {
                $daftarNilai->nilai = "A";
            } elseif ($daftarNilai->nilai >=80) {
                $daftarNilai->nilai = "B";
            } elseif ($daftarNilai->nilai >=70) {
                $daftarNilai->nilai = "C";
            } else {
                $daftarNilai->nilai = "D";
            }

            echo "<td>$daftarNilai->nilai</td>"; // Menampilkan nilai huruf
        echo "</tr>";
        }
        
        ?>
    </table>

</body>
</html>