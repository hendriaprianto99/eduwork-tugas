<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Looping 2 PHP</title>
</head>
<style>
    body {
        margin: 5rem;
    }
    table {
        display: inline-table;
    }
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        border-radius: 2%;
        text-align: center;
        padding: 15px;
        border-spacing: 30px;
    }
    th {
        background: cyan;
    }
    tr:nth-child(even) {
        background-color: #d6eeee;
    }
    .kolom-tiga {
        margin-left: -4px;
    }
</style>
<body>

    <h1>Tugas Looping 2 PHP</h1>
    <!-- Tabel no&nama -->
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>

        <!-- kolom 1 dan 2 -->
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>Nama ke $i</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Tabel kelas -->
    <table class="kolom-tiga">
        <tr>
            <th>Kelas</th>
        </tr>

        <!-- kolom 3 -->
        <?php
        for ($j = 10; $j >= 1; $j--) {
            echo "<tr>";
            echo "<td>Kelas $j</td>";
            echo "</tr>";
    }
        ?>
    </table>

</body>
</html>