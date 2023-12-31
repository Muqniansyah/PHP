<?php
$data = file_get_contents("./data/pizza.json");
$menu = json_decode($data, true);

// masuk kedalam menu pada pizza.json atau keluarkan data menunya supaya bisa akses array dalam menu.
$menu = $menu["menu"];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Manis Hut</title>
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="logo" width="120px" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">All Menu</a>
            <a class="nav-link" aria-current="page" href="#">Pizza</a>
            <a class="nav-link" aria-current="page" href="#">Pasta</a>
            <a class="nav-link" aria-current="page" href="#">Nasi</a>
            <a class="nav-link" aria-current="page" href="#">Minuman</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- bagian utama start -->
    <div class="container">
      <div class="row mt-3">
        <div class="col">
          <h1>All Menu</h1>
        </div>
      </div>

    <div class="row">
    <?php foreach ($menu as $row) : ?>
      <div class="col-md-4">
        <div class="card mb-3">
          <img src="img/menu/<?= $row["gambar"]; ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?= $row["nama"]; ?></h5>
            <p class="card-text"><?= $row["deskripsi"]; ?></p>
            <h5 class="card-title">Rp. <?= $row["harga"]; ?></h5>
            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
          </div>
        </div>
      </div>
    <?php  endforeach; ?>
    </div>
    </div>
    <!-- bagian utama end -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- cdn jquery uncompressed : supaya support ajax -->
    <script
      src="https://code.jquery.com/jquery-3.7.0.js"
      integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
      crossorigin="anonymous"
    ></script>

    <!-- javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
