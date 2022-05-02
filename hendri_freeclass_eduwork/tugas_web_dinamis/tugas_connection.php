<?php

// coba pake style
echo "<style>body{padding:1.5%;}</style>";

// define db
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "perpustakaan_eduwork");

// connect
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

// error message
if (mysqli_connect_errno()) {
  echo "<br>Koneksi gagal: " . mysqli_connect_error();
  exit;
}

// Menampilkan data
$result = $db->query("SELECT * FROM buku WHERE id_pengarang = 'PG05'");

if($result) {
    while($row = $result->fetch_assoc()) {
        echo $row['judul'] . "<br>Pengarang " . $row['id_pengarang'] . "<br><br>";
    }
}

// close connection to db
$db->close();
?>  