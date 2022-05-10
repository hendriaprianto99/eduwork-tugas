<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Perpustakaan | Tugas Web CRUD</title>
  </head>
  <body>
    <!-- connection -->
    <?php
    // connect ke file
    require_once("connect.php");

    // query data
    $dataBuku = mysqli_query($db, "SELECT buku.*, penerbit.nama_penerbit, pengarang.nama_pengarang, katalog.nama  FROM buku
                                  JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                  JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                  JOIN katalog ON katalog.id_katalog = buku.id_katalog
                                  ORDER BY judul ASC"); ?>

    <!-- navigasi -->
    <!-- main nav -->
    <div class="container">
      <div class="row my-3">
        <div class="col-sm-12 navbar-center">
          <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="katalog.php">Katalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="penerbit.php">Penerbit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pengarang.php">Pengarang</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- tambah buku -->
      <div class="row mb-3">
        <div class="col-sm-10 offset-sm-1 text-center">
          <a href="add.php" class="btn btn-primary">Tambahkan Buku Baru</a>
        </div>
      </div>
    </div>

    <!-- table -->
    <div class="container">
      <div class="row">
        <div class="col-sm-10 offset-sm-1">
          <table class="table text-center table-hover table-striped">
            <!-- table head -->
            <thead>
              <tr class="table-primary">
                <th>ISBN</th>
                <th>Judul</th>
                <th>Tahun</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Katalog</th>
                <th>Stok</th>
                <th>Harga Pinjam</th>
              </tr>
            </thead>

            <!-- table data -->
            <tbody>
              <!-- loop buat nampilin data -->
              <?php
              foreach($dataBuku as $buku) {
                echo "<tr>
                        <td>" . $buku['isbn'] . "</td>
                        <td>" . $buku['judul'] . "</td>
                        <td>" . $buku['tahun'] . "</td>
                        <td>" . $buku['nama_penerbit'] . "</td>
                        <td>" . $buku['nama_pengarang'] . "</td>
                        <td>" . $buku['nama'] . "</td>
                        <td>" . $buku['qty_stok'] . "</td>
                        <td>" . $buku['harga_pinjam'] . "</td>
                      </tr>";
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
  </body>
</html>