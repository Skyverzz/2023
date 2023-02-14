<?php
require 'functions.php';
$product = query("SELECT * FROM tb_kopikita");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoffeeDex</title>
  <!-- css -->
  <link rel="stylesheet" href="style.css">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    table tr.nth:nth-child(2n+1){
      background-color: #999;
    }
  </style>
</head>

<body class="bg-dark text-light">
  <header>
    <h1>Learn PHP</h1>
    <p>Pemograman Web Dan Pemograman Berorientasi Objek</p>
  </header>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="./">CoffeeDex</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pesanan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Laporan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container my-5" style="margin-top: 150px;">
      <div class="card">
        <div class="card-title">
          <h4 class="border-1 p-3 text-dark" style="background-color: #eaeaea">Menu</h4>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-6">
              <a class="btn btn-primary" href="tambah.php" role="button">Tambah</a>
            </div>
            <div class="col-6 d-flex justify-content-end">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 250px;">
                <button class="btn btn-primary" type="submit">Search</button>
              </form>
            </div>
          </div>
          <table class="table">
            <thead>
              <th scope="col">Id</th>
              <th scope="col">Nama Menu</th>
              <th scope="col">Harga</th>
              <th scope="col">Jenis Menu</th>
              <th scope="col">Aksi</th>
            </thead>
            <tbody>
              <?php $number = 1;
              foreach ($product as $row) : ?>
                <tr class="nth">
                  <th><?= $number; ?></th>
                  <td><?= $row["namamenu"]; ?></td>
                  <td>Rp. <?= $row["harga"]; ?></td>
                  <td><?= $row["jenismenu"]; ?></td>
                  <td>
                    <button type="submit" class="btn btn-danger"><a class="text-light" style="text-decoration: none;" href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a></button>
                    <button type="submit" class="btn btn-warning"><a class="text-light" style="text-decoration: none;" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('anda yakin?');">Hapus</a></button>
                  </td>
                </tr>
              <?php $number++; endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>

  <footer class="text-dark" style="margin-top: 16rem;">
    <div class="d-flex align-items-center justify-content-center" style="height: 2em; width:100%; background-color: white;">
      <h6>CoffeeDex&copy;2032 Build By : Juangga</h6>
    </div>
  </footer>






  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>