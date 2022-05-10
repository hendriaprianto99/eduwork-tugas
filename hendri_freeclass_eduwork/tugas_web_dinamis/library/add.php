<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Buku</title>
  </head>
  <body>
    <!-- connection -->
    <?php
        // connect ke file
        include_once("connect.php");

        // query data
        $dataPenerbit = mysqli_query($db, "SELECT * FROM penerbit");
        $dataPengarang = mysqli_query($db, "SELECT * FROM pengarang");
        $dataKatalog = mysqli_query($db, "SELECT * FROM katalog");
    ?>

    <div class="container">
        <div class="row" style="margin: 50px;">
            <div class="col-md-12 text-center">
                <h4>Form Tambah Buku</h4>
            </div>
        </div>
        <!-- form isi -->
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <form action="add.php" method="post" name="formIsi">
                    <table width="100%" cellpadding="10">
                        <tr>
                            <td>ISBN</td>
                            <td><input type="text" class="form-control" name="isbn"></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td><input type="text" class="form-control" name="judul"></td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td><input type="text" class="form-control" name="tahun"></td>
                        </tr>
                        <tr>
                            <td>Penerbit</td>
                            <td>
                                <select name="id_penerbit" id="id_penerbit" class="form-select">
                                    <option selected>Pilih Penerbit</option>
                                    <?php 
                                        foreach($dataPenerbit as $penerbit) {
                                            echo "<option value=" . $penerbit['id_penerbit'] . ">" . $penerbit['nama_penerbit'] . "</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pengarang</td>
                            <td>
                                <select name="id_pengarang" id="id_pengarang" class="form-select">
                                    <option selected>Pilih Pengarang</option>
                                    <?php 
                                        foreach($dataPengarang as $pengarang) {
                                            echo "<option value=" . $pengarang['id_pengarang'] . ">" . $pengarang['nama_pengarang'] . "</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Katalog</td>
                            <td>
                                <select name="id_katalog" id="id_katalog" class="form-select">
                                    <option selected>Pilih Katalog</option>
                                    <?php 
                                        foreach($dataKatalog as $katalog) {
                                            echo "<option value=" . $katalog['id_katalog'] . ">" . $katalog['nama'] . "</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Qty Stok</td>
                            <td><input type="text" class="form-control" name="qty_stok"></td>
                        </tr>
                        <tr>
                            <td>Harga Pinjam</td>
                            <td><input type="text" class="form-control" name="harga_pinjam"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="form-control btn btn-primary" name="submit" value="Add"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <!-- Insert data -->
    <?php 
        if(isset($_POST['submit'])) {
            $isbn = $_POST['isbn'];
            $judul = $_POST['judul'];
            $tahun = $_POST['tahun'];
            $id_penerbit = $_POST['id_penerbit'];
            $id_pengarang = $_POST['id_pengarang'];
            $id_katalog = $_POST['id_katalog'];
            $qty_stok = $_POST['qty_stok'];
            $harga_pinjam = $_POST['harga_pinjam'];

            $insert = mysqli_query($db, "INSERT INTO 'buku'('isbn', 'judul', 'tahun', 'id_penerbit', 'id_pengarang', 'id_katalog', 'qty_stok', 'harga_pinjam') VALUES('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam')");

            header("Location:index.php");
        }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
  </body>
</html>
